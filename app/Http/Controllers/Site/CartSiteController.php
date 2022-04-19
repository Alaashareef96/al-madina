<?php

namespace App\Http\Controllers\Site;



use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartSiteController extends Controller
{

    public function AddToCart(Request $request){

        $id = $request->id;
        $product = Product::findOrFail($id);

            Cart::add([
                'id' => $id,
                'name' => $product->name,
               'price' => $product->price,
                'weight' => 1,
                'qty' => 1,
                'options' => [
                    'image' => $product->image->url_image,
                    'brand' => $product->brand->name,
                    'size' => $product->size->name,
                    'taste' =>$product->taste->name,
                ],
            ]);
            return response()->json(['success' => 'Successfully Added on Your Cart']);
    }

    public function getCart(){

        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();

//        return response()->json(array(
//            'carts' => $carts,
//            'cartQty' => $cartQty,
//            'cartTotal' => round($cartTotal),
//
//        ));
        return response()->view('site.products.cart',compact('carts','cartQty','cartTotal'));
    }

    public function RemoveCartProduct($rowId){
        Cart::remove($rowId);
        return response()->json(['success' => 'Successfully Remove From Cart']);
    }

}
