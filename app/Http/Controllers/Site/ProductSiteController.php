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

        $products = Product::with('brand','size','taste')->paginate(20);
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

    public function filterProduct(Request $request)
    {

        $brand = $request->brand; //brand
        $size = $request->size; //size
        $taste = $request->taste; //size
        $products = Product::query();

        if(is_array($brand) && count($brand) > 0){
            $products = $products->whereIn('brand_id', $brand );
        }
        if(is_array($size) && count($size) > 0){
            $products = $products->whereIn('size_id', $size );
        }
        if(is_array($taste) && count($taste) > 0){
            $products = $products->whereIn('taste_id', $taste );
        }


        $products = $products->paginate(20);
        $view = view('site.product_filter',compact('products'))->render();
        return response()->json(['view'=>$view]);
    }
}
