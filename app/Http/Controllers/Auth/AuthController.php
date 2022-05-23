<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditPasswordRequest;
use App\Http\Requests\EditProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function ShowLogin(){

        return response()->view('cms.auth.login');
    }

    public function login(Request $request){

        $validator = Validator($request->all(),[
             'email' => 'required|email',
             'password' => 'required|string|min:1|max:20',
             'remember' => 'required|boolean',
         ]);

           if(!$validator->fails()){
               $credntials =['email' => $request->input('email'),'password' => $request->input('password')];
               if(Auth::guard('admin')->attempt($credntials,$request->input('remember_me'))){
                   return response()->json([
                       'message' => 'logged in successfully'
                   ],Response::HTTP_OK);
               }else{
                   return response()->json([
                       'message' => 'logge failed '
                   ],Response::HTTP_BAD_REQUEST);
               }
           }else{
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ],Response::HTTP_BAD_REQUEST);
        }

    }

    public function editPassword(Request $request){

        return response()->view('cms.auth.edit-password');
    }

    public function updatePassword(EditPasswordRequest $request){

        $guard = $this->getGuardName();

            $user = auth($guard)->user();
            $user->password = Hash::make($request->input('new_password'));
            $isSaved = $user->save();
            return response()->json([
                'message' => $isSaved ? 'Password Changed successful' : 'Password Changed failed'
            ],$isSaved ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);


    }

    public function editProfile(Request $request){

        $user =auth('admin')->user();
        return response()->view('cms.auth.edit-profile',['user'=> $user]);
    }

    public function updateProfile(EditProfileRequest $request){
           $guard = $this->getGuardName();

            $user = auth($guard)->user();
            $user->name =$request->input('name');
            $user->email =$request->input('email');
            $isSaved = $user->save();
            return response()->json([
                'message' => $isSaved ? 'Update Profile successful' : 'Update Profile failed'
            ],$isSaved ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }


    private function getGuardName(){
        return auth('admin')->check() ? 'admin' : 'web';
    }

    public function logout(Request $request){

        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('auth.login.view');
    }

}
