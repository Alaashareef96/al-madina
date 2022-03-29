<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NewsRequest;
use App\Models\Media;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;


class NewsController extends Controller
{

    public function index()
    {
        $news = News::all();
        return response()->view('cms.news.index',compact('news'));
    }


    public function create()
    {
        return response()->view('cms.news.create');
    }


    public function store(NewsRequest $request)
    {

        $news = News::create($request->only(['name', 'details']));

        if ($request->hasFile('image','video')) {
            $image = $request->file('image');
            $video = $request->file('video');
            $imageName = Carbon::now()->format('Y_m_d_h_i') . '_' . $news->name . '.' . $image->getClientOriginalExtension();
            $videoName = Carbon::now()->format('Y_m_d_h_i') . '_' . $news->name . '.' . $video->getClientOriginalExtension();
            $request->file('image')->storeAs('/news', $imageName, ['disk' => 'public']);
            $request->file('video')->storeAs('/news', $videoName, ['disk' => 'public']);

            $img = new Media();
            $img->object_type = 'news';
            $img->object_id = $news->id;
            $img->type= 'cover';
            $img->url_image = 'news/' . $imageName;
            $img->url_video = 'news/' . $videoName;

            $news->img()->save($img);
        }
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $name = $file->getClientOriginalName();
                $file->storeAs('/news', $name, ['disk' => 'public']);

                $images = new Media();
                $images->object_type = 'news';
                $images->object_id = $news->id;
                $images->url_images = 'news/' . $name;
                $news->images()->save($images);
            }

        }

        return response()->json([
            'message' => $news ? 'Create successful' : 'Create failed'
        ],$news ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }




    public function edit(News $news)
    {
        return response()->view('cms.news.edit',compact('news'));
    }


    public function update(NewsRequest $request, News $news)
    {
        $news->update($request->only(['name', 'details']));

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($news->img->url_image);
            $image = $request->file('image');
            $imageName = Carbon::now()->format('Y_m_d_h_i') . '_' . $news->name . '.' . $image->getClientOriginalExtension();
            $request->file('image')->storeAs('/news', $imageName, ['disk' => 'public']);
            $url_image = 'news/' . $imageName;
            $news->img()->update(['url_image' => $url_image]);
        }

        if ($request->hasFile('video')) {
            Storage::disk('public')->delete($news->img->url_video);
            $video = $request->file('video');
            $videoName = Carbon::now()->format('Y_m_d_h_i') . '_' . $news->name . '.' . $video->getClientOriginalExtension();
            $request->file('video')->storeAs('/news', $videoName, ['disk' => 'public']);
            $url_video = 'news/' . $videoName;

            $news->img()->update(['url_video' => $url_video]);
        }
        if ($request->hasFile('files')) {

            foreach ($request->file('files') as $file) {
                $name = $file->getClientOriginalName();
                $file->storeAs('/news', $name, ['disk' => 'public']);

                $images = new Media();
                $images->object_type = 'news';
                $images->object_id = $news->id;
                $images->url_images = 'news/' . $name;
                $news->images()->save($images);
            }

        }

        return response()->json([
            'message' => $news ? 'Updated successflu' : 'Updated falid'
        ],$news ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }



    public function destroy(News $news)
    {
        $url_video = $news->img->url_video;
        $url_image = $news->img->url_image;
        $media = $news->img->delete();

        $isDeleted = $news->delete();
        if ($isDeleted) Storage::disk('public')->delete($url_image,$url_video);
        return response()->json([
            'icon'=>$isDeleted ? 'success':'error',
            'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
        ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
