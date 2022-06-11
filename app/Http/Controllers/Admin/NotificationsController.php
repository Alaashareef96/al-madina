<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class NotificationsController extends Controller
{



    public function markRead(Request $request,$id){
        $notificatio = Auth::user()->notifications()->find($id);
        $notificatio->markAsRead();
        return redirect()->back();
    }


    public function destroy(Request $request,$id)
    {
        $deleted = Auth::user()->notifications()->find($id)->delete();
        return response()->json([
            'icon'=> $deleted ? 'success':'error',
            'title'=> $deleted ? 'Deleted successfully':'Delete failed'
        ], $deleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
