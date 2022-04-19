<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ContactSiteController extends Controller
{
    public function index()
    {

//        $news = News::all();
        return response()->view('site.contact.contact');
    }

    public function save(ContactRequest $request)
    {
//        dd(auth('web')->check());
//      if(auth('web')->check()){
          $contact = Contact::create($request->only(['name', 'email', 'comment','type',]));
          return response()->json([
              'message' => $contact ? 'Create successful' : 'Create failed',
          ],$contact ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
//      }else{
//          return response()->json([
//              'message' => false,
//          ], Response::HTTP_BAD_REQUEST);
//      }

    }

    public function showContact(){

        $contacts = Contact::orderBy('id', 'desc')->get();
        return response()->view('cms.contact.contact',compact('contacts'));
    }

    public function deleteContact($id){

        $contact= Contact::findOrFail($id);

        $contact->delete();

        return response()->json([
            'icon'=>$contact ? 'success':'error',
            'title'=>$contact ? 'Deleted successfully':'Delete failed'
        ], $contact ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
