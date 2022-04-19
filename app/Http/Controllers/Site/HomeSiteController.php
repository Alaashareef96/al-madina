<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Album;
use App\Models\Brand;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Slider;
use App\Models\SuccessPartner;
use App\Models\They_said;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeSiteController extends Controller
{
    public function index()
    {
        $about = About::first();
        $products = Product::with('brand','size','taste')->orderBy('id', 'desc')->paginate(8);
        $offers = Offer::orderBy('id', 'desc')->get();
        $sliders = Slider::orderBy('id', 'desc')->get();
        $brands = Brand::orderBy('id', 'desc')->get();
        $theysaid = They_said::orderBy('id', 'desc')->get();
        $albums = Album::orderBy('id', 'desc')->get();
        $successpartners = SuccessPartner::orderBy('id', 'desc')->get();
        return response()->view('site.home.home',compact('about','products','offers','sliders','brands','theysaid','successpartners','albums'));
    }

    public function changeLanguageUser(Request $request, $language)
    {

        $status = in_array($language, ['en', 'ar']);
        $lang = $status ? $language : 'ar';
        App::setLocale($lang);
        $request->session()->put('lang', $lang);
        return redirect()->back();
    }


}
