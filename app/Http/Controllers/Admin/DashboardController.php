<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Product;
use App\Models\Request_job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class DashboardController extends Controller
{
    public function showDashboard(Request $request)
    {
        $date = date('d-m-y');
        $today = Order::where('order_date',$date)->sum('amount');

        $month = date('F');
        $month = Order::where('order_month',$month)->sum('amount');

        $year = date('Y');
        $year = Order::where('order_year',$year)->sum('amount');

        $pending = Order::where('status','pending')->count();

        $user = User::count();

        $product = Product::count();

        $jobRequest= Request_job::count();

        $contact = Contact::count();

       $lastuser = User::latest()->get();

       $lastproduct = Product::latest()->get();

        return response()->view('cms.dashboard',compact('today','month','year','user','pending','product','jobRequest','contact','lastuser','lastproduct'));
    }

    public function changeLanguage(Request $request, $language)
    {
        // dd(session()->get('lang'));
        $status = in_array($language, ['en', 'ar']);
        $lang = $status ? $language : 'ar';
        App::setLocale($lang);
        $request->session()->put('lang', $lang);
        // dd(session()->get('lang') . ' CURRENT: ' . App::currentLocale());
        return redirect()->back();
    }
}
