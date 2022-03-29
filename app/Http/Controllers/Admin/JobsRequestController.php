<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Request_job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class JobsRequestController extends Controller
{
    public function index()
    {
        $jobsRequest = Request_job::with('job')->orderBy('id', 'desc')->get();
        return response()->view('cms.jobsRequest.index',compact('jobsRequest'));
    }

    public function delete($id)
    {

        $jobsRequest = Request_job::findOrFail($id);

        $url_images = $jobsRequest->images->url_images;
//        $url_image = $jobsRequest->img->url_image;
//        $media = $jobsRequest->img->delete();
        $media = $jobsRequest->images->delete();
        $isDeleted = $jobsRequest->delete();

        if ($isDeleted) Storage::disk('public')->delete($url_images);
        return response()->json([
            'icon'=>$isDeleted ? 'success':'error',
            'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
        ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function showDetails($id)
    {
//        dd('$request');
//        $id = $request->id;
        $jobsRequest = Request_job::findOrFail($id);
        return response()->view('cms.jobsRequest.showRequest',compact('jobsRequest'));
    }
}
