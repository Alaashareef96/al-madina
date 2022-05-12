<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class CheckoutSiteController extends Controller
{
    public function CheckoutCreate()
    {

        if(Auth::check()){

            if (Cart::subtotal() > 0) {

                $carts = Cart::content();
                $cartQty = Cart::count();
                $cartTotal = Cart::subtotal();
                $cities = City::all();
                return response()->view('site.checkout.checkout', compact('carts', 'cartQty', 'cartTotal', 'cities'));

            } else {
                return redirect()->back()->with('info',"يجب اضافة منتج للسلة");

            }
        }else{
            return redirect('/al-madina/loginUser');
        }


    }

    public function CheckoutStore(Request $request)
    {
//         dd($request->all());
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['mobile'] = $request->mobile;
        $data['city_id'] = $request->city_id;
        $data['address'] = $request->address;
        $cartTotal = Cart::subtotal();
        $cartQty = Cart::count();

        if ($request->payment_method == 'stripe') {
          return view('site.checkout.payment_stripe', compact('data','cartTotal','cartQty'));
        } elseif ($request->payment_method == 'card') {
         return 'card';
        } else {
            return 'cash';
        }

    }



}
