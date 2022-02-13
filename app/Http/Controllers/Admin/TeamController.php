<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\TeamRequest;
use App\Models\Media;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Team::all();
        return response()->view('cms.team.index', ['teams' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.team.create');
    }


    public function store(TeamRequest $request)
    {
        $data=[$request];
        $validator = Validator($data);

        if(! $validator->fails()){
            $team = Team::create($request->only(['name', 'category']));

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Carbon::now()->format('Y_m_d_h_i') . '_' . $team->name . '.' . $image->getClientOriginalExtension();
                $request->file('image')->storeAs('/team', $imageName, ['disk' => 'public']);

                $img = new Media();
                $img->object_type = 'team';
                $img->object_id = $team->id;
                $img->url_image = 'team/' . $imageName;


                $team->image()->save($img);
            }
            return response()->json([
                'message' => $team ? 'Create successflu' : 'Create falid'
            ],$team ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        }else{
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ],Response::HTTP_BAD_REQUEST);

        }

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return response()->view('cms.team.edit', ['team' => $team]);
    }


    public function update(TeamRequest $request, Team $team)
    {

            $data=[$request];
            $validator = Validator($data);

            if(! $validator->fails()){
                $team->update($request->only(['name', 'category']));

                if ($request->hasFile('image')) {
                    Storage::disk('public')->delete($team->image->url_image);
                    $image = $request->file('image');
                    $imageName = Carbon::now()->format('Y_m_d_h_i') . '_' . $team->name . '.' . $image->getClientOriginalExtension();
                    $request->file('image')->storeAs('/team', $imageName, ['disk' => 'public']);
                    $url_image = 'team/' . $imageName;
                    $team->image()->update(['url_image' => $url_image]);
                }
                return response()->json([
                    'message' => $team ? 'Update successflu' : 'Update falid'
                ],$team ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
            }else{
                return response()->json([
                    'message' => $validator->getMessageBag()->first()
                ],Response::HTTP_BAD_REQUEST);

            }


    }

    public function destroy(Team $team)
    {

        $url_image = $team->image->url_image;
        $media = $team->image->delete();

        $isDeleted = $team->delete();
        if ($isDeleted) Storage::disk('public')->delete($url_image,$media);
        return response()->json([
            'icon'=>$isDeleted ? 'success':'error',
            'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
        ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
