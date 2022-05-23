<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderSiteController extends Controller
{
    public function MyOrders(Request $request){
        $order = $request->sort;
        $orders = Order::where('user_id',Auth::id())->orderBy('id', $order ?? 'desc')->get();
        return view('site.order.myOrders',compact('orders'));

    }

    public function OrderDetails($order_id){

        $order = Order::with('city','user')->where([
        ['id',$order_id],
        ['user_id',Auth::id()],
        ])->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();
        return view('site.order.order_details',compact('order','orderItem'));

    }

    public function InvoiceDownload($order_id)
    {
        $order = Order::with('city','user')->where([
            ['id',$order_id],
            ['user_id',Auth::id()],
        ])->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();
        $pdf = PDF::loadView('site.order.order_invoice',compact('order','orderItem'))->setPaper('a4');
        return $pdf->download('invoice.pdf');
//        return view('site.order.order_invoice',compact('order','orderItem'));
    }
}
