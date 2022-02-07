<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class DashboardController extends Controller
{
    public function showDashboard(Request $request)
    {
        
        return response()->view('cms.dashboard');
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
