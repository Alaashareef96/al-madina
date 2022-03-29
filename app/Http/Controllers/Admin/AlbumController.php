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


        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = Carbon::now()->format('Y_m_d_h_i') . '_' . $album->name . '.' . $video->getClientOriginalExtension();
            $request->file('video')->storeAs('/album', $videoName, ['disk' => 'public']);

            $video = new Media();
            $video->object_type = 'album';
            $video->type= 'video';
            $video->object_id = $album->id;
            $video->url_video = 'album/' . $videoName;

            $album->video()->save($video);
        }
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

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName =$image->getClientOriginalName();
            $request->file('image')->storeAs('/album', $imageName, ['disk' => 'public']);

            $img = new Media();
            $img->type = 'cover';
            $img->object_type = 'album';
            $img->object_id = $album->id;
            $img->url_image = 'album/' . $imageName;


            $album->img()->save($img);
        }


        return response()->json([
            'message' => $album ? 'Create successful' : 'Create failed'
        ],$album ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }




    public function edit(Album $album)
    {
        return response()->view('cms.album.edit',compact('album'));
    }


    public function update(AlbumRequest $request, Album $album)
    {
        $album->update($request->only(['name', 'details']));

        if ($request->hasFile('video')) {
            Storage::disk('public')->delete($album->video->url_video);
            $video = $request->file('video');
            $videoName = Carbon::now()->format('Y_m_d_h_i') . '_' . $album->name . '.' . $video->getClientOriginalExtension();
            $request->file('video')->storeAs('/album', $videoName, ['disk' => 'public']);
            $url_video = 'album/' . $videoName;

            $album->video()->update(['url_video' => $url_video]);
        }

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

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($album->img->url_image);
            $image = $request->file('image');
            $imageName =$image->getClientOriginalName();
            $request->file('image')->storeAs('/album', $imageName, ['disk' => 'public']);
            $url_image = 'album/' . $imageName;
            $album->img()->update(['url_image' => $url_image]);
        }
        return response()->json([
            'message' => $album ? 'Updated successful' : 'Updated failed'
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
