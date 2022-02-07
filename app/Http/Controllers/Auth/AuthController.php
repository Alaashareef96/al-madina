<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
                       'message' => 'logge faild '
                   ],Response::HTTP_BAD_REQUEST);
               }
           }else{
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ],Response::HTTP_BAD_REQUEST);
        }
           
    }

    public function editProfile(Request $request){

        $user =auth('admin')->user();
        return response()->view('cms.auth.edit-profile',['user'=> $user]);
    }

    public function updateProfile(Request $request){
         $guard = $this->getGuardName();
         
         $validator = validator($request->all(),[
            'name' => 'required|string|min:3|max:45',
            'email' => 'required|string|email|unique:admins,email,'.auth($guard)->id(),
            'current_password' => 'required|string|current_password:' . $guard,
            'new_password' => 'required|string|min:3|max:25|confirmed',
            'new_password_confirmation' => 'required|string|min:3|max:25',
         ]);
         if(!$validator->fails()){
            $user = auth($guard)->user();
            $user->name =$request->input('name');
            $user->email =$request->input('email');
            $user->password = Hash::make($request->input('new_password'));
            $isSaved = $user->save();
            return response()->json([
                'message' => $isSaved ? 'Update Profile successflu' : 'Update Profile falid'
            ],$isSaved ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);

        }else{
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ],Response::HTTP_BAD_REQUEST);
        }

    }

    private function getGuardName(){
        return auth('admin')->check() ? 'admin' : 'pro';
    }

    public function logout(Request $request){
  
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('auth.login.view');
    }

}
