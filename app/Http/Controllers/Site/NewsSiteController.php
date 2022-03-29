<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Media;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class NewsSiteController extends Controller
{
    public function index()
    {

        $news = News::orderBy('id', 'desc')->get();
        return response()->view('site.news.news',compact('news'));
    }

    public function newsDetails($id)
    {
        $news= News::findOrFail($id);
//        $news= News::query()->where('id',$id)->whereHas('comment',function ($q){
//            $q->active();
//        });
        $comments = Comment::where('news_id',$id)->active()->get();
        $newsall = News::all();
        return response()->view('site..news.news_details',compact('news','newsall','comments'));

    }
    public function showComment()
    {

        $comments = Comment::with('news')->orderBy('id', 'desc')->get();
        return response()->view('cms.news.comment',compact('comments'));
    }

    public function newsComment(CommentRequest $request)
    {
        $commentNews = Comment::create($request->only(['name', 'email', 'comment','status','news_id']));

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Carbon::now()->format('Y_m_d_h_i') . '_' . $commentNews->name . '.' . $image->getClientOriginalExtension();
            $request->file('image')->storeAs('/comment', $imageName, ['disk' => 'public']);

            $img = new Media();
            $img->type= 'cover';
            $img->object_type = 'comment';
            $img->object_id = $commentNews->id;
            $img->url_image = 'comment/' . $imageName;


            $commentNews->img()->save($img);
        }

        return response()->json([
            'message' => $commentNews ? 'Create successful' : 'Create failed',
        ],$commentNews ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);


    }
    public function deleteComment($id){

        $comment= Comment::findOrFail($id);

        $url_image = $comment->img->url_image;
        $media = $comment->img->delete();
        $comment->delete();

        if ($comment) Storage::disk('public')->delete($url_image);
        return response()->json([
            'icon'=>$comment ? 'success':'error',
            'title'=>$comment ? 'Deleted successfully':'Delete failed'
        ], $comment ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function status(Request $request){


        $comment= Comment::findOrFail($request->id);
//        return  $request->input('status')? 1 : 0;
        $comment->status = $request->input('status') == 'true'  ? 1 : 0;
        $isUpdated = $comment->save();
    }


}
