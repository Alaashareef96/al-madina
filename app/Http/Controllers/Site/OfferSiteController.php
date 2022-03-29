<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscribRequest;
use App\Models\Offer;
use App\Models\Subscrib;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OfferSiteController extends Controller
{
    public function index()
    {

       $offers = Offer::orderBy('id', 'desc')->get();
        return response()->view('site.offers.offers',compact('offers'));
    }

    public function offerDetails($id)
    {
        $offers= Offer::findOrFail($id);

         return response()->view('site.offers.offers_details',compact('offers'));


    }

    public function offerSubscribe(SubscribRequest $request)
    {


        $offerSubscribe = Subscrib::create($request->only(['name', 'email', 'mobile','code',]));

        return response()->json([
            'message' => $offerSubscribe ? 'Create successflu' : 'Create falid',
        ],$offerSubscribe ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);


    }

}
