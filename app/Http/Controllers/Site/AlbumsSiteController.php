<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumsSiteController extends Controller
{
    public function index()
    {

        $albums = Album::all();
        return response()->view('site.albums',compact('albums'));
    }

}
