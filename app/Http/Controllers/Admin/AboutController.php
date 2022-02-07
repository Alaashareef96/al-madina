<?php

namespace App\Http\Controllers\Admin;


use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\aboutRequest;
use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = About::all();
        return response()->view('cms.about.index', ['abouts' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(),[
            'name.ar' => 'required|string',
            'name.en' => 'required|string',
            'image' => 'required',
          ]);

          if(! $validator->fails()){
            $about = About::create($request->only(['name', 'massage', 'details','Objectives','team']));

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Carbon::now()->format('Y_m_d_h_i') . '_' . $about->name . '.' . $image->getClientOriginalExtension();
                $request->file('image')->storeAs('/about', $imageName, ['disk' => 'public']);

                $img = new Media();
                $img->object_type = 'about';
                $img->object_id = $about->id;
                $img->url_image = 'about/' . $imageName;
            
            
            if ($request->hasFile('video')) {
                $video = $request->file('video');
                $videoName = Carbon::now()->format('Y_m_d_h_i') . '_' . $about->name . '.' . $video->getClientOriginalExtension();
                $request->file('video')->storeAs('/about', $videoName, ['disk' => 'public']);

                $img->url_video = 'about/' . $videoName;
            

              $about->imgVid()->save($img);
            }
        }

            return response()->json([
                'message' => $about ? 'Create successflu' : 'Create falid'
            ],$about ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        }else{
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ],Response::HTTP_BAD_REQUEST);

        }

     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return response()->view('cms.about.edit', ['about' => $about]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $validator = Validator($request->all(),[
            'name.ar' => 'required|string',
            'name.en' => 'required|string',
            'image' => 'nullable',
          ]);

          if(! $validator->fails()){
            $about->update($request->only(['name', 'massage', 'details','Objectives','team']));
            if ($request->hasFile('image')) {
                $url = $about->imgVid->url_image;
                $imagee = $about->imgVid->delete();
                Storage::disk('public')->delete($imagee,$url);
                $image = $request->file('image');
                $imageName = Carbon::now()->format('Y_m_d_h_i') . '_' . $about->name . '.' . $image->getClientOriginalExtension();
                $request->file('image')->storeAs('/about', $imageName, ['disk' => 'public']);

                $url_image = 'about/' . $imageName;
    
            if ($request->hasFile('video')) {
                $url = $about->imgVid->url_video;
                $videoo = $about->imgVid->delete();
                Storage::disk('public')->delete($videoo,$url);
                $video = $request->file('video');
                $videoName = Carbon::now()->format('Y_m_d_h_i') . '_' . $about->name . '.' . $video->getClientOriginalExtension();
                $request->file('video')->storeAs('/about', $videoName, ['disk' => 'public']);

                $url_video = 'about/' . $videoName;

               $about->imgVid()->create(['url_video' => $url_video , 'url_image' => $url_image]);
            }
        }

            return response()->json([
                'message' => $about ? 'Create successflu' : 'Create falid'
            ],$about ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        }else{
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ],Response::HTTP_BAD_REQUEST);

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $url_video = $about->imgVid->url_video;
        $url_image = $about->imgVid->url_image;
        $media = $about->imgVid->delete();

        $isDeleted = $about->delete();
        if ($isDeleted) Storage::disk('public')->delete($url_image,$media,$url_video);
        return response()->json([
            'icon'=>$isDeleted ? 'success':'error',
            'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
        ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
