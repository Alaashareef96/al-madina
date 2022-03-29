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
        $teams = Team::orderBy('id', 'desc')->get();
        return response()->view('site.about.about',compact('about','teams'));
    }
}
