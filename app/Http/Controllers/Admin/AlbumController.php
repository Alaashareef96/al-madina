<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;


class AlbumController extends Controller
{

    public function index()
    {
        $albums = Album::all();
        return response()->view('cms.album.index',compact('albums'));
    }


    public function create()
    {
        return response()->view('cms.album.create');
    }


    public function store(AlbumRequest $request)
    {
        $album = Album::create($request->only(['name', 'details']));


        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $name = $file->getClientOriginalName();
                $file->storeAs('/album', $name, ['disk' => 'public']);

                $images = new Media();
                $images->object_type = 'album';
                $images->object_id = $album->id;
                $images->url_images = 'album/' . $name;
                $album->images()->save($images);
            }

        }

        return response()->json([
            'message' => $album ? 'Create successflu' : 'Create falid'
        ],$album ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }




    public function edit(Album $album)
    {
        return response()->view('cms.album.edit',compact('album'));
    }


    public function update(AlbumRequest $request, Album $album)
    {
        $album->update($request->only(['name', 'details']));

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $name = $file->getClientOriginalName();
                $file->storeAs('/album', $name, ['disk' => 'public']);

                $images = new Media();
                $images->object_type = 'album';
                $images->object_id = $album->id;
                $images->url_images = 'album/' . $name;
                $album->images()->save($images);
            }
        }
        return response()->json([
            'message' => $album ? 'Create successflu' : 'Create falid'
        ],$album ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }


    public function destroy(Album $album)
    {
        foreach ($album->images as $img) {
            $media = $img->delete();

        }

        $isDeleted = $album->delete();
        if ($isDeleted) Storage::disk('public')->delete($media);
        return response()->json([
            'icon'=>$isDeleted ? 'success':'error',
            'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
        ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

}
