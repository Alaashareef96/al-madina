<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestjobsRequest;
use App\Models\Job;
use App\Models\Media;
use App\Models\Request_job;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JobsSiteController extends Controller
{
    public function index(Request $request)
    {
        $order = $request->sort;
        $jobs = Job::orderBy('id', $order ?? 'desc')->get();
        return response()->view('site.jobs.jobs',compact('jobs'));
    }

    public function jobsDetails($id)
    {
        $jobs= Job::findOrFail($id);
        return response()->view('site.jobs.jobs-details',compact('jobs'));
    }

    public function jobsRequest($id)
    {

        return response()->view('site.jobs.request-jobs',compact('id'));
    }


    public function saveJobsRequest(RequestjobsRequest $request)
    {
        $data= $request->only(['name', 'gender', 'email','address','phone','dob','status','study','job_id']);

        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $fileName = $file->getClientOriginalName();
            $request->file('cv')->storeAs('/request_job', $fileName, ['disk' => 'public']);

            $data['cv'] ='request_job/' . $fileName;
        }
        $job = Request_job::create($data);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName =$image->getClientOriginalName();
            $request->file('image')->storeAs('/request_job', $imageName, ['disk' => 'public']);

            $img = new Media();
            $img->type = 'cover';
            $img->object_type = 'jobs';
            $img->object_id = $job->id;
            $img->url_image = 'request_job/' . $imageName;
            $job->img()->save($img);
        }

        if ($request->hasFile('university')) {
            foreach ($request->file('university') as $file) {
                $name = $file->getClientOriginalName();
                $file->storeAs('/request_job', $name, ['disk' => 'public']);

                $images = new Media();
                $images->object_type = 'jobs';
                $images->object_id = $job->id;
                $images->url_images = 'request_job/' . $name;
                $job->images()->save($images);
            }

        }

        return response()->json([
            'message' => $job ? 'Create successful' : 'Create failed',
        ],$job ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }
}
