<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;

class PaymentStripSiteController extends Controller
{
    public function StripeOrder(Request $request){

        if (Session::has('coupon')) {
            $total_amount = Session::get('coupon')['total_amount'];
        }else{
            $total_amount = round(Cart::subtotal(2,'.',''));
        }

//        your Secret key here
        \Stripe\Stripe::setApiKey('sk_test_51KxubPLGMOgTn7EomVvb6f5BFKNe4W6cTU9MHbgpC29qlcvINYR3Q4k479E4eqUrgNkyvyzBoBu2Rrj2HuNUIHbW00rrlJeixo');


        $token = $_POST['stripeToken'];
        $charge = \Stripe\Charge::create([
            'amount' => $total_amount*100,
            'currency' => 'usd',
            'description' => 'Al-Madina Online Store',
            'source' => $token,
            'metadata' => ['order_id' => uniqid()],
        ]);

        $order_id = Order::insertGetId([
         'user_id' => Auth::id(),
        'city_id' => $request->city_id,
     	'name' => $request->name,
     	'email' => $request->email,
     	'mobile' => $request->mobile,
     	'address' => $request->address,
     	'payment_method' => 'Stripe',
     	'payment_type' => $charge->payment_method,
     	'transaction_id' => $charge->balance_transaction,
     	'currency' => $charge->currency,
     	'amount' => $total_amount,
     	'order_number' => $charge->metadata->order_id,
     	'invoice_no' => 'AMD'.mt_rand(10000000,99999999),
     	'order_date' => Carbon::now()->format('d F Y'),
     	'order_month' => Carbon::now()->format('F'),
     	'order_year' => Carbon::now()->format('Y'),
     	'status' => 'Pending',
//     	'created_at' => Carbon::now(),

     ]);

        $invoice = Order::findOrFail($order_id);
        $data = [
            'invoice_no' => $invoice->invoice_no,
            'amount' => $total_amount,
            'name' => $invoice->name,
            'email' => $invoice->email,
        ];

        Mail::to($request->email)->send(new OrderMail($data));


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


        return redirect('al-madina/product')->with('successSweet',"تم العملية بنجاح");

    }
}
