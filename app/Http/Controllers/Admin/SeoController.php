<?php

namespace App\Http\Controllers\Admin;


use App\Models\Seo;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SeoController extends Controller
{

    public function index()
    {
        $seo = Seo::all();
        return response()->view('cms.seo.index',compact('seo'));
    }


    public function create()
    {
        return response()->view('cms.seo.create');
    }


    public function store(Request $request)
    {
        $seo = Seo::create($request->only(['meta_title','meta_author','meta_keyword','meta_description','google_analytics']));

        return response()->json([
            'message' => $seo ? 'Create successful' : 'Create failed'
        ],$seo ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }


    public function show(Seo $seo)
    {
        //
    }


    public function edit(Seo $seo)
    {
        return response()->view('cms.seo.edit',compact('seo'));
    }

    public function update(Request $request, Seo $seo)
    {
        $seo->update($request->only(['meta_title','meta_author','meta_keyword','meta_description','google_analytics']));

        return response()->json([
            'message' => $seo ? 'Update successful' : 'Update failed'
        ],$seo ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }


    public function destroy(Seo $seo)
    {
        $isDeleted = $seo->delete();
        return response()->json([
            'icon'=>$isDeleted ? 'success':'error',
            'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
        ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
