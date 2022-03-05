<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\False_;

class ProductSiteController extends Controller
{
    public function index()
    {

         $products = Product::with('brand','size','taste')->get();
        $brand = Category::where('type','Brand')->get();
        $size = Category::where('type','Size')->get();
        $taste = Category::where('type','Taste')->get();
        return response()->view('site.products',compact('products','brand','size','taste'));
    }

    public function showProduct(Request $request)
    {
        $id = $request->id;
        $show= Product::findOrFail($id);
        if ($show){
            $view = view('site.product_details',compact('show'))->render();
            return response()->json(['view'=>$view]);
        }
        return false;
    }

//    public function filterProduct(Request $request)
//    {
////       $category = Category::where('id',$request->id)->get();
//        $show= Product::where('brand_id', $request->id)->get();
//        return response()->json(['show'=>$show]);
//
//
//    }
}
