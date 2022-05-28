<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use DateTime;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function ReportByDate(Request $request){
//         return $request->all();
        $date = new DateTime($request->date);
        $formatDate = $date->format('d F Y');
//         return $formatDate;
        $orders = Order::where('order_date',$formatDate)->latest()->get();
        return response()->view('cms.report.report_show',compact('orders'));
    }

    public function ReportByMonth(Request $request){
//        return $request->all();
        $orders = Order::where([
            ['order_month',$request->month],
            ['order_year',$request->year_name],
        ])->latest()->get();
        return response()->view('cms.report.report_show',compact('orders'));
    }

    public function ReportByYear(Request $request){
//        return $request->all();
        $orders = Order::where('order_year',$request->year)->latest()->get();
        return response()->view('cms.report.report_show',compact('orders'));
    }
}
