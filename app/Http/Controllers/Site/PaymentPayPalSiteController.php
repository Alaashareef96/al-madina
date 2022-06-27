<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Order;
use App\Models\OrderItem;
use App\Notifications\User\ConfirmOrderNotification;
use App\Notifications\User\OrderCreatedNotification;
use App\Notifications\User\OrderCreatedSmsNotification;
use App\Services\OmnipayService;
use App\Services\OrderService;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PaymentPayPalSiteController extends Controller
{
    public function checkout_now(Request $request)
    {
//        $order = (new OrderService)->createOrder($request->except(['_token', 'submit']));

        if (Session::has('coupon')) {
            $total_amount = Session::get('coupon')['total_amount'];
        }else{
            $total_amount = round(Cart::subtotal(2,'.',''));
        }

        $order = Order::create([
            'user_id' => Auth::id(),
            'city_id' => $request[('city_id')],
            'name' => $request[('name')],
            'email' => $request[('email')],
            'mobile' => $request[('mobile')],
            'address' => $request[('address')],
            'payment_method' => 'PayPal',
            'payment_type' => 'PayPal',
            'transaction_id' => 'ORD-' . Str::random(15),
            'currency' => 'USD',
            'amount' => $total_amount,
//            'order_number' => $charge->metadata->order_id,
            'invoice_no' => 'AMD'.mt_rand(10000000,99999999),
            'order_date' => Carbon::now()->format('d F Y'),
            'order_month' => Carbon::now()->format('F'),
            'order_year' => Carbon::now()->format('Y'),
            'status' => 'pending',
//     	'created_at' => Carbon::now(),

        ]);

//        dd($order);
//        $invoice = Order::findOrFail($order_id);
//        $data = [
//            'invoice_no' => $invoice->invoice_no,
//            'amount' => $total_amount,
//            'name' => $invoice->name,
//            'email' => $invoice->email,
//        ];
//
//        Mail::to($request->email)->send(new OrderMail($data));


        $carts = Cart::content();
        foreach ($carts as $cart) {
            OrderItem::insert([
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'brand' => $cart->options->brand,
                'size' => $cart->options->size,
                'taste' => $cart->options->taste,
                'qty' => $cart->qty,
                'price' => $cart->price,
//                'created_at' => Carbon::now(),

            ]);
        }

        $omniPay = new OmnipayService('PayPal_Express');
        $response = $omniPay->purchase([
            'amount' => $order->amount,
            'transactionId' => $order->transaction_id,
            'currency' => $order->currency,
            'cancelUrl' => $omniPay->getCancelUrl($order->id),
            'returnUrl' => $omniPay->getReturnUrl($order->id),
        ]);

        if ($response->isRedirect()) {
            $response->redirect();
        }

        return redirect('al-madina/product')->with('successSweet',$response->getMessage());
    }

    public function cancelled($id)
    {
        $order = Order::find($id);
        $order->update([
            'status' => 'canceled'
        ]);

        return redirect('al-madina/product')->with('error','You have cancelled your order payment');

    }

    public function completed($id)
    {

        $order = Order::find($id);

        $omniPay = new OmnipayService('PayPal_Express');
        $response = $omniPay->complete([
            'amount' => $order->amount,
            'transactionId' => $order->transaction_id,
            'currency' => $order->currency,
            'cancelUrl' => $omniPay->getCancelUrl($order->id),
            'returnUrl' => $omniPay->getReturnUrl($order->id),
            'notifyUrl' => $omniPay->getNotifyUrl($order->id),
        ]);

        if (Session::has('coupon')) {
            Session::forget('coupon');
        }

        Cart::destroy();

        foreach (Admin::all() as $admin){
            $admin->notify(new OrderCreatedNotification($order));
        }
        Auth::user()->notify(new OrderCreatedSmsNotification($order));

        return redirect('al-madina/product')->with('successSweet','تمت العملية بنجاح');
        }


}
