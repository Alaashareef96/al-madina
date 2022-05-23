<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditPasswordRequest;
use App\Http\Requests\UpdateProfileUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class ProfileUserSiteController extends Controller
{
//    public function editProfile(Request $request){
//
//        $user =auth('web')->user();
////        dd($user);
//        return response()->view('site.profile.edit-profile',['user'=> $user]);
//    }

    public function updateProfile(UpdateProfileUserRequest $request){

        $user = auth('web')->user();
        $user->name =$request->input('name');
        if($request->email){
            $user->email =$request->input('email');
            $user->email_verified_at = null;
        }
        $user->mobile =$request->input('mobile');
        $isSaved = $user->save();
        return response()->json([
            'message' => $isSaved ? 'Update Profile successful' : 'Update Profile failed',
            'name' => $user->name,
            'email' => $user->email,
            'mobile' => $user->mobile,
        ],$isSaved ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }


}
