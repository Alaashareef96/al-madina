<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JobsRequest;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;


class JobController extends Controller
{

    public function index()
    {
        $jobs = Job::all();
        return response()->view('cms.jobs.index',compact('jobs'));
    }


    public function create()
    {
        return response()->view('cms.jobs.create');
    }


    public function store(JobsRequest $request)
    {
        $data = $request->only(['name','email','gender','expiry_date']);
        $data['status'] = $request->has('status');
        $job = Job::create($data);


        return response()->json([
            'message' => $job ? 'Create successful' : 'Create failed'
        ],$job ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }



    public function show(Job $job)
    {
        //
    }


    public function edit(Job $job)
    {
        return response()->view('cms.jobs.edit',compact('job'));
    }


    public function update(JobsRequest $request, Job $job)
    {
        $data = $request->only(['name','terms','start_date','expiry_date']);
        $data['status'] = $request->has('status');

        $job->update($data);


        return response()->json([
            'message' => $job ? 'Update successful' : 'Update failed'
        ],$job ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }


    public function destroy(Job $job)
    {
        $isDeleted = $job->delete();
        return response()->json([
            'icon'=>$isDeleted ? 'success':'error',
            'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
        ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
