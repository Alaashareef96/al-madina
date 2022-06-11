<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchSiteController extends Controller
{
    public function index(Request $request)
        {
           $search = $request->search;
           $order = $request->sort;
           $products = Product::where('name','LIKE','%'.$search.'%')->orderBy('id', $order ?? 'desc')->get();
           $offers = Offer::where('name','LIKE','%'.$search.'%')->orderBy('id', $order ??'desc')->get();
           $data_count = count($products) + count($offers);
          return response()->view('site.search.search',compact('products','offers','search','data_count','order'));
        }

    public function SearchProduct(Request $request){

        $item = $request->search;

        $products = Product::where('name','LIKE',"%$item%")->limit(5)->get();
        return view('site.search.search_product',compact('products'));



    }


}
