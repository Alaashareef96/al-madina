<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class OtpSiteController extends Controller
{
//    public function create()
//    {
//
//        return view('otp.create');
//    }

    public function store(Request $request)
    {
        $validator = Validator($request->all(),[
            'mobile' => 'required',
        ]);
        if(!$validator->fails()){

        $client = $this->getClient();

        $request = new \Vonage\Verify\Request($request->post('mobile'), "Vonage");
        $response = $client->verify()->start($request);

        Session::put('nexmo.verify.requestId', $response->getRequestId());

            return response()->json([
                'message' => 'تم ارسال كود التفعيل بنجاح'
            ],Response::HTTP_OK);

        }else{
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ],Response::HTTP_BAD_REQUEST);
        }
    }

//    public function verifyForm()
//    {
//        return view('otp.verify');
//    }

    public function verify(Request $request)
    {
        $validator = Validator($request->all(),[
            'code' => 'required',
        ]);
        if(!$validator->fails()){

        $client = $this->getClient();

            $requestId = Session::get('nexmo.verify.requestId');
            $result = $client->verify()->check($requestId, $request->post('code'));
            if($result){
                $mobile = Session::get('nexmo.verify.requestId')['mobile'];
                $user = User::where('mobile',$mobile)->first();
//                Auth::login($user,true);
//                Auth::user()->login($user,true);
                $user = Auth::User();
            }

           Session::forget('nexmo.verify.requestId');

            return response()->json([
                'message' => 'تم التفعيل '
            ],Response::HTTP_OK);

        }else{
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ],Response::HTTP_BAD_REQUEST);
        }
    }

    public function cancel(){

            $requestId = Session::get('nexmo.verify.requestId');
            $client = $this->getClient();
            $result = $client->verify()->cancel($requestId);
        return response()->json([
            'message' => $result ? 'تم الالغاء' : 'فشل الالغاء'
        ],$result ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }

    protected function getClient()
    {
        $basic  = new \Vonage\Client\Credentials\Basic(config('services.nexmo.key'), config('services.nexmo.secret'));
        $client = new \Vonage\Client(new \Vonage\Client\Credentials\Container($basic));

        return $client;
    }
}
