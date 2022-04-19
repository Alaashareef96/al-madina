<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class UsersSiteController extends Controller
{
   public function index(){
       $users = User::orderBy('id', 'desc')->get();
       return response()->view('cms.users.index',compact('users'));
   }

    public function status(Request $request){


        $users= User::findOrFail($request->id);
//        return  $request->input('status')? 1 : 0;
        $users->status = $request->input('status') == 'true'  ? 1 : 0;
        $isUpdated = $users->save();
    }

    public function deleteUser($id){

        $users= User::findOrFail($id);
        $users->delete();

        return response()->json([
            'icon'=>$users ? 'success':'error',
            'title'=>$users ? 'Deleted successfully':'Delete failed'
        ], $users ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
