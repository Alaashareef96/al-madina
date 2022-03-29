<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SuccessPartnerRequest;
use App\Models\Media;
use App\Models\SuccessPartner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class SuccessPartnerController extends Controller
{

    public function index()
    {
        $successPartners = SuccessPartner::all();
        return response()->view('cms.successPartners.index',compact('successPartners'));
    }


    public function create()
    {
        return response()->view('cms.successPartners.create');
    }


    public function store(SuccessPartnerRequest $request)
    {
        $successPartners =  new SuccessPartner;
        $successPartners->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName =$image->getClientOriginalName();
            $request->file('image')->storeAs('/successPartners', $imageName, ['disk' => 'public']);

            $img = new Media();
            $img->object_type = 'successPartners';
            $img->object_id = $successPartners->id;
            $img->url_image = 'successPartners/' . $imageName;


            $successPartners->img()->save($img);
        }

        return response()->json([
            'message' => $successPartners ? 'Create successful' : 'Create failed'
        ],$successPartners ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }



    public function edit(SuccessPartner $successPartner)
    {
        return response()->view('cms.successPartners.edit',compact('successPartner'));
    }


    public function update(SuccessPartnerRequest $request, SuccessPartner $successPartner)
    {
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($successPartner->img->url_image);
            $image = $request->file('image');
            $imageName =$image->getClientOriginalName();
            $request->file('image')->storeAs('/successPartners', $imageName, ['disk' => 'public']);
            $url_image = 'successPartners/' . $imageName;
            $successPartner->img()->update(['url_image' => $url_image]);
        }

        return response()->json([
            'message' => $successPartner ? 'Updated successful' : 'Updated failed'
        ],$successPartner ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }


    public function destroy(SuccessPartner $successPartner)
    {
        $url_image = $successPartner->img->url_image;
        $media = $successPartner->img->delete();

        $isDeleted = $successPartner->delete();
        if ($isDeleted) Storage::disk('public')->delete($url_image);
        return response()->json([
            'icon'=>$isDeleted ? 'success':'error',
            'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
        ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
