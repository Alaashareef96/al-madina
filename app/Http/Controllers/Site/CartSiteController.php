<?php

namespace App\Http\Controllers\Site;



use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Product;
use App\Notifications\User\CartNumberNotification;
use App\Notifications\User\CartRemoveNotification;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class CartSiteController extends Controller
{

    public function AddToCart(Request $request){
        if (Session::has('coupon')) {
            Session::forget('coupon');
        }
        $id = $request->id;
        $product = Product::findOrFail($id);

        if ($product->discount_price == NULL) {
            $cart = Cart::add([
                'id' => $id,
                'name' => $product->name,
                'price' => $product->price,
                'weight' => 1,
                'qty' => 1,
                'taxRate' => 0,
                'options' => [
                    'image' => $product->image->url_image,
                    'brand' => $product->brand->name,
                    'size' => $product->size->name,
                    'taste' => $product->taste->name,
                ],
            ]);
            Auth::user()->notify(new CartNumberNotification());
            return response()->json(['success' => 'Successfully Added on Your Cart']);
        }else{
            $cart = Cart::add([
                'id' => $id,
                'name' => $product->name,
                'price' => $product->discount_price,
                'weight' => 1,
                'qty' => 1,
                'taxRate' => 0,
                'options' => [
                    'image' => $product->image->url_image,
                    'brand' => $product->brand->name,
                    'size' => $product->size->name,
                    'taste' => $product->taste->name,
                ],
            ]);
            Auth::user()->notify(new CartNumberNotification());
            return response()->json(['success' => 'Successfully Added on Your Cart']);
        }
    }

    public function getCart(){

        $carts = Cart::content();
        $cartQty = Cart::count();

        return response()->view('site.products.cart',compact('carts','cartQty'));
    }

    public function RemoveCartProduct($rowId){
        Cart::remove($rowId);
        if (Session::has('coupon')) {
            Session::forget('coupon');
        }
        $cartQty = Cart::count();
        return response()->json([
            'success' => 'Successfully Remove From Cart',
            'cartQty' => $cartQty,
        ]);
    }

    public function CartIncrement($rowId){

        $row = Cart::get($rowId);

        Cart::update($rowId, $row->qty + 1);

        if (Session::has('coupon')) {
            $coupon_name = Session::get('coupon')['coupon_name'];
            $coupon = Coupon::where('name', $coupon_name)->first();
//            dd(Cart::subtotal(2,'.',''));
            Session::put('coupon', [
                'coupon_name' => $coupon->name,
                'coupon_discount' => $coupon->discount,
                'discount_amount' => round(Cart::subtotal(2,'.','') * $coupon->discount / 100),
                'total_amount' => round(Cart::subtotal(2,'.','') - Cart::subtotal(2,'.','') * $coupon->discount / 100)
            ]);
        }
        $showTotal =  $row->subtotal;
        $showQty =  $row->qty;
        $cartQty = Cart::count();
//        Session::put(['cartQty' => $cartQty]);
        return response()->json([
            'showTotal' => $showTotal,
            'showQty' => $showQty,
            'cartQty' => $cartQty,
            'status' => true
        ]);

    }
    public function CartDecrement($rowId){

        $row = Cart::get($rowId);

        if($row->qty > 1){
        Cart::update($rowId, $row->qty - 1);

            if (Session::has('coupon')) {
                $coupon_name = Session::get('coupon')['coupon_name'];
                $coupon = Coupon::where('name', $coupon_name)->first();
                Session::put('coupon', [
                    'coupon_name' => $coupon->name,
                    'coupon_discount' => $coupon->discount,
                    'discount_amount' => round(Cart::subtotal(2,'.','') * $coupon->discount / 100),
                    'total_amount' => round(Cart::subtotal(2,'.','') - Cart::subtotal(2,'.','') * $coupon->discount / 100)
                ]);
            }

        $showTotal =  $row->subtotal;
        $showQty =  $row->qty;
        $cartQty = Cart::count();
        return response()->json([
            'showTotal' => $showTotal,
            'showQty' => $showQty,
            'cartQty' => $cartQty,
            'status' => true
        ]);
        }
        return response()->json([
            'status' => false
        ]);
    }

    public function CartChange(Request $request){
        $number = $request->number;
        $rowId = $request->rowId;
       if($number >=1){
           Cart::update($rowId, ['qty' => $number]);

           if (Session::has('coupon')) {
               $coupon_name = Session::get('coupon')['coupon_name'];
               $coupon = Coupon::where('name', $coupon_name)->first();
               Session::put('coupon', [
                   'coupon_name' => $coupon->name,
                   'coupon_discount' => $coupon->discount,
                   'discount_amount' => round(Cart::subtotal(2,'.','') * $coupon->discount / 100),
                   'total_amount' => round(Cart::subtotal(2,'.','') - Cart::subtotal(2,'.','') * $coupon->discount / 100)
               ]);
           }
           $total = Cart::get($rowId);
           $showTotal =  $total->subtotal;
           $cartQty = Cart::count();
           return response()->json([
               'showTotal' => $showTotal,
               'cartQty' => $cartQty,
               'status' => true
           ]);
       }
        return response()->json([
            'status' => false
        ]);
    }

    public function CouponApply(Request $request)
    {
        if (Cart::subtotal() > 0) {
            $coupon_name = $request->coupon_name;
            $coupon = Coupon::where([
                ['name', $coupon_name],
                ['date', '>=', Carbon::now()->format('Y-m-d')],
                ['qty', '>=', 1],
                ['status', '=', 1],
            ])->first();
            if ($coupon) {

                Session::put('coupon', [
                    'coupon_name' => $coupon->name,
                    'coupon_discount' => $coupon->discount,
                    'discount_amount' => round(Cart::subtotal(2, '.', '') * $coupon->discount / 100),
                    'total_amount' => round(Cart::subtotal(2, '.', '') - Cart::subtotal(2, '.', '') * $coupon->discount / 100)
                ]);

                return response()->json(array(

                    'success' => 'Coupon Applied Successfully'
                ));

            } else {
                return response()->json(['error' => 'Invalid Coupon']);
            }
        }else{
            return response()->json(['nocart' => true]);
        }
    }

    public function CouponCalculation(){

        if (Session::has('coupon')) {
            return response()->json(array(
                'subtotal' =>Cart::subtotal(),
                'coupon_name' => session()->get('coupon')['coupon_name'],
                'coupon_discount' => session()->get('coupon')['coupon_discount'],
                'discount_amount' => session()->get('coupon')['discount_amount'],
                'total_amount' => session()->get('coupon')['total_amount'],
            ));
        }else{
            return response()->json(array(
                'total' =>Cart::subtotal(),
            ));

        }
    }

    public function CouponRemove(){
        Session::forget('coupon');
        return response()->json(['success' => 'Coupon Remove Successfully']);
    }
}
