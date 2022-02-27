<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OfferRequest;
use App\Models\Media;
use App\Models\Offer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;


class OfferController extends Controller
{


    public function index()
    {
        $offers = Offer::all();
        return response()->view('cms.offer.index',compact('offers'));
    }



    public function create()
    {
        return response()->view('cms.offer.create');
    }


    public function store(OfferRequest $request)
    {


        $offer = Offer::create($request->only(['name', 'details', 'terms','subscription','expiry_date']));

        if ($request->hasFile('image','video')) {
            $image = $request->file('image');
            $video = $request->file('video');
            $imageName = Carbon::now()->format('Y_m_d_h_i') . '_' . $offer->name . '.' . $image->getClientOriginalExtension();
            $videoName = Carbon::now()->format('Y_m_d_h_i') . '_' . $offer->name . '.' . $video->getClientOriginalExtension();
            $request->file('image')->storeAs('/offer', $imageName, ['disk' => 'public']);
            $request->file('video')->storeAs('/offer', $videoName, ['disk' => 'public']);

            $img = new Media();
            $img->object_type = 'offer';
            $img->object_id = $offer->id;
            $img->type= 'cover';
            $img->url_image = 'offer/' . $imageName;
            $img->url_video = 'offer/' . $videoName;

            $offer->img()->save($img);
        }
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $name = $file->getClientOriginalName();
                $file->storeAs('/offer', $name, ['disk' => 'public']);

                $images = new Media();
                $images->object_type = 'offer';
                $images->object_id = $offer->id;
                $images->url_images = 'offer/' . $name;
                $offer->images()->save($images);
            }

        }

        return response()->json([
            'message' => $offer ? 'Create successflu' : 'Create falid'
        ],$offer ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }


    public function show(Offer $offer)
    {
//        $url_images = $offer->images->url_images;
//
//        $mediaimg = $offer->images->delete();
//
//        Storage::disk('public')->delete($mediaimg,$url_images);
    }


    public function edit(Offer $offer)
    {
        return response()->view('cms.offer.edit',compact('offer'));
    }


    public function update(Request $request, Offer $offer)
    {
        $offer->update($request->only(['name', 'details', 'terms','subscription','expiry_date']));

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($offer->img->url_image);
            $image = $request->file('image');
            $imageName = Carbon::now()->format('Y_m_d_h_i') . '_' . $offer->name . '.' . $image->getClientOriginalExtension();
            $request->file('image')->storeAs('/offer', $imageName, ['disk' => 'public']);
            $url_image = 'offer/' . $imageName;
            $offer->img()->update(['url_image' => $url_image]);
        }

        if ($request->hasFile('video')) {
            Storage::disk('public')->delete($offer->img->url_video);
            $video = $request->file('video');
            $videoName = Carbon::now()->format('Y_m_d_h_i') . '_' . $offer->name . '.' . $video->getClientOriginalExtension();
            $request->file('video')->storeAs('/offer', $videoName, ['disk' => 'public']);
            $url_video = 'offer/' . $videoName;

            $offer->img()->update(['url_video' => $url_video]);
        }
        if ($request->hasFile('files')) {
//            Storage::disk('public')->delete($offer->images->url_images);
            foreach ($request->file('files') as $file) {
                $name = $file->getClientOriginalName();
                $file->storeAs('/offer', $name, ['disk' => 'public']);

                $images = new Media();
                $images->object_type = 'offer';
                $images->object_id = $offer->id;
                $images->url_images = 'offer/' . $name;
                $offer->images()->save($images);
            }

        }

        return response()->json([
            'message' => $offer ? 'Updated successflu' : 'Updated falid'
        ],$offer ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }


    public function destroy(Offer $offer)
    {
        $url_video = $offer->img->url_video;
        $url_image = $offer->img->url_image;
//      $url_images = $offer->images->url_image;

        $media = $offer->img->delete();
//        $mediaimg = $offer->images->delete();

        $isDeleted = $offer->delete();
        if ($isDeleted) Storage::disk('public')->delete($url_image,$url_video,$media);
        return response()->json([
            'icon'=>$isDeleted ? 'success':'error',
            'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
        ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }


}
