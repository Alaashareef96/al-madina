<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TheySaidRequest;
use App\Models\Media;
use App\Models\They_said;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class TheySaidController extends Controller
{

    public function index()
    {
        $theySaid = They_said::all();
        return response()->view('cms.theySaid.index',compact('theySaid'));
    }


    public function create()
    {
        return response()->view('cms.theySaid.create');
    }


    public function store(TheySaidRequest $request)
    {

        $theySaid = They_said::create($request->only(['name','category','details']));

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Carbon::now()->format('Y_m_d_h_i') . '_' . $theySaid->name . '.' . $image->getClientOriginalExtension();
            $request->file('image')->storeAs('/theySaid', $imageName, ['disk' => 'public']);

            $img = new Media();
            $img->object_type = 'theySaid';
            $img->object_id = $theySaid->id;
            $img->url_image = 'theySaid/' . $imageName;


            $theySaid->image()->save($img);
        }
        return response()->json([
            'message' => $theySaid ? 'Create successful' : 'Create failed'
        ],$theySaid ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }

 function show(They_said $they_said)
    {
        //
    }


    public function edit(They_said $they_said)
    {
        return response()->view('cms.theySaid.edit',compact('they_said'));
    }


    public function update(TheySaidRequest $request, They_said $they_said)
    {

        $they_said->update($request->only(['name','category','details']));

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($they_said->image->url_image);
            $image = $request->file('image');
            $imageName = Carbon::now()->format('Y_m_d_h_i') . '_' . $they_said->name . '.' . $image->getClientOriginalExtension();
            $request->file('image')->storeAs('/theySaid', $imageName, ['disk' => 'public']);
            $url_image = 'theySaid/' . $imageName;
            $they_said->image()->update(['url_image' => $url_image]);
        }
        return response()->json([
            'message' => $they_said ? 'Update successful' : 'Update failed'
        ],$they_said ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }


    public function destroy(They_said $they_said)
    {
        $url_image = $they_said->image->url_image;
        $media = $they_said->image->delete();

        $isDeleted = $they_said->delete();
        if ($isDeleted) Storage::disk('public')->delete($url_image);
        return response()->json([
            'icon'=>$isDeleted ? 'success':'error',
            'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
        ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
