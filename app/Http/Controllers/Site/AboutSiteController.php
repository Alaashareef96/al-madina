<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutSiteController extends Controller
{
    public function index()
    {
        $about = About::first();
        $teams = Team::all();
        return response()->view('site.about',compact('about','teams'));
    }
}
