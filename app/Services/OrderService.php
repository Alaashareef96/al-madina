<?php


namespace App\Services;


use App\Mail\OrderMail;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class OrderService
{
    public function createOrder($request){
//         dd($request[('name')]);
        if (Session::has('coupon')) {
            $total_amount = Session::get('coupon')['total_amount'];
        }else{
            $total_amount = round(Cart::subtotal(2,'.',''));
        }

        $order_id = Order::insertGetId([
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
                'order_id' => $order_id,
                'product_id' => $cart->id,
                'brand' => $cart->options->brand,
                'size' => $cart->options->size,
                'taste' => $cart->options->taste,
                'qty' => $cart->qty,
                'price' => $cart->price,
//                'created_at' => Carbon::now(),

            ]);
        }
        if (Session::has('coupon')) {
            Session::forget('coupon');
        }

        Cart::destroy();
    }
}
