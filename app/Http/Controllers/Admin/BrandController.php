<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class BrandController extends Controller
{

    public function index()
    {
        $brands = Brand::all();
        return response()->view('cms.brand.index',compact('brands'));
    }


    public function create()
    {
        return response()->view('cms.brand.create');
    }


    public function store(BrandRequest $request)
    {
        $brand =  new Brand;
        $brand->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName =$image->getClientOriginalName();
            $request->file('image')->storeAs('/brand', $imageName, ['disk' => 'public']);

            $img = new Media();
            $img->type = 'cover';
            $img->object_type = 'brand';
            $img->object_id = $brand->id;
            $img->url_image = 'brand/' . $imageName;


            $brand->img()->save($img);
        }

        return response()->json([
            'message' => $brand ? 'Create successful' : 'Create failed'
        ],$brand ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }


    public function show(Brand $brand)
    {
        //
    }


    public function edit(Brand $brand)
    {
        return response()->view('cms.brand.edit',compact('brand'));
    }

    public function update(BrandRequest $request, Brand $brand)
    {
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($brand->img->url_image);
            $image = $request->file('image');
            $imageName =$image->getClientOriginalName();
            $request->file('image')->storeAs('/brand', $imageName, ['disk' => 'public']);
            $url_image = 'brand/' . $imageName;
            $brand->img()->update(['url_image' => $url_image]);
        }

        return response()->json([
            'message' => $brand ? 'Updated successful' : 'Updated failed'
        ],$brand ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }

    public function destroy(Brand $brand)
    {
        $url_image = $brand->img->url_image;
        $media = $brand->img->delete();
        $isDeleted = $brand->delete();

        if ($isDeleted) Storage::disk('public')->delete($url_image);
        return response()->json([
            'icon'=>$isDeleted ? 'success':'error',
            'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
        ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
