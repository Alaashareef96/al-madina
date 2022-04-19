<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FavouriteSiteController extends Controller
{
    public function index(Request $request)
    {
        $order = $request->sort;
        $products =  auth()->user()->products()->orderBy('id', $order ?? 'desc')->get();
        return view('site.products.wishlist', compact('products'));
    }

    public function storfavourite(Request $request){

        if (! auth()->user()->wishlistHas(request('id'))) {
            auth()->user()->products()->attach(request('id'));
            return response() -> json(['status' => true , 'wished' => true]);
        }
        return response() -> json(['status' => true , 'wished' => false]);
    }

    public function destroy($id)
    {

        $isDeleted=  auth()->user()->products()->detach(request('id'));
        return response() -> json([
            $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST]);
    }
}
