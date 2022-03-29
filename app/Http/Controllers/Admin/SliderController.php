<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SliderRequest;
use App\Models\Media;
use App\Models\Slider;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::all();
        return response()->view('cms.slider.index',compact('sliders'));
    }


    public function create()
    {
        return response()->view('cms.slider.create');
    }

    public function store(SliderRequest $request)
    {
        $slider = Slider::create($request->only(['url']));

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName =$image->getClientOriginalName();
            $request->file('image')->storeAs('/slider', $imageName, ['disk' => 'public']);

            $img = new Media();
            $img->type = 'cover';
            $img->object_type = 'slider';
            $img->object_id = $slider->id;
            $img->url_image = 'slider/' . $imageName;


            $slider->img()->save($img);
        }

        return response()->json([
            'message' => $slider ? 'Create successful' : 'Create failed'
        ],$slider ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }


    public function show(Slider $slider)
    {
        //
    }

    public function edit(Slider $slider)
    {
        return response()->view('cms.slider.edit',compact('slider'));
    }


    public function update(SliderRequest $request, Slider $slider)
    {
        $slider->update($request->only(['url']));

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($slider->img->url_image);
            $image = $request->file('image');
            $imageName =$image->getClientOriginalName();
            $request->file('image')->storeAs('/slider', $imageName, ['disk' => 'public']);
            $url_image = 'slider/' . $imageName;
            $slider->img()->update(['url_image' => $url_image]);
        }

        return response()->json([
            'message' => $slider ? 'Updated successful' : 'Updated failed'
        ],$slider ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }


    public function destroy(Slider $slider)
    {
        $url_image = $slider->img->url_image;
        $media = $slider->img->delete();

        $isDeleted = $slider->delete();
        if ($isDeleted) Storage::disk('public')->delete($url_image);
        return response()->json([
            'icon'=>$isDeleted ? 'success':'error',
            'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
        ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
