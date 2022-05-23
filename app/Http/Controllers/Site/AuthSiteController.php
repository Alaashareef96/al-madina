<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Symfony\Component\HttpFoundation\Response;

class AuthSiteController extends Controller
{
    public function ShowLoginUser(){
        return response()->view('site.login.login');
    }

    public function register(Request $request)
    {
        $data = $request->only(['name','email','gender','mobile','dob']);
        $data['password'] =  Hash::make($request->input('password'));
        $isSave = User::create($data);
        if ($isSave)
        event(new Registered($isSave));

            return response()->json([
                'message' => $isSave ? 'Create successful' : 'Create failed'
            ],$isSave ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);


    }
    public function loginUser(Request $request){

        $validator = Validator($request->all(),[
            'email' => 'required|email',
            'password' => 'required|string|min:1|max:20',
            'remember' => 'required|boolean',
        ]);

        if(!$validator->fails()){

            $credntials =['email' => $request->email,'password' => $request->password];
           $user = User::where('email',$request->email)->first();

               if($user->status == 1){
                   if(Auth::guard('web')->attempt($credntials,$request->input('remember_me'))){
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
                       'message' => 'Please wait while your account is approved by the administrator'
                   ],Response::HTTP_BAD_REQUEST);
               }

        }else{
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ],Response::HTTP_BAD_REQUEST);
        }

    }
    public function logoutUser(Request $request){

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }

    public function sendResetEmailUser(Request $request)
    {

//        dd(Password::broker('admins'));
        $validator = Validator($request->all(), [
            'email' => 'required|email',
        ]);
        if (!$validator->fails()) {
            $status = Password::broker('users')->sendResetLink(
                $request->only('email')
            );

            return $status === Password::RESET_LINK_SENT
                ? response()->json(['message' => __($status)], Response::HTTP_OK)
                : response()->json(['message' => __($status)], Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }

    }
}
