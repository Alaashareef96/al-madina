<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReturnOrderRequest;
use App\Models\Order;
use App\Models\OrderItem;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;


class OrderSiteController extends Controller
{
    public function MyOrders(Request $request){
        $order = $request->sort;
        $orders = Order::where('user_id',Auth::id())->orderBy('id', $order ?? 'desc')->get();
        if($request->ajax()) {
            $view = view('site.order.sort.myOrders-sort',compact('orders'))->render();
            return response()->json([
                'view'=>$view,
                'order' => $order,
            ]);
        }else{
            return view('site.order.myOrders',compact('orders'));
        }


    }

    public function ReturnOrderList(Request $request){

        $order = $request->sort;
        $orders = Order::where([
        ['user_id',Auth::id()],
        ['return_date','!=',NULL],])->orderBy('id', $order ?? 'desc')->get();

        if($request->ajax()) {
            $view = view('site.order.sort.returnOrders-sort',compact('orders'))->render();
            return response()->json([
                'view'=>$view,
                'order' => $order,
            ]);
        }else{
            return view('site.order.returnOrder',compact('orders'));
        }


    }

    public function CancelOrders(Request $request){
        $order = $request->sort;
        $orders = Order::where([
            ['user_id',Auth::id()],
            ['status','canceled'],])->orderBy('id', $order ?? 'desc')->get();

        if($request->ajax()) {
            $view = view('site.order.sort.cancelOrders-sort',compact('orders'))->render();
            return response()->json([
                'view'=>$view,
                'order' => $order,
            ]);
        }else{
            return view('site.order.cancelOrder',compact('orders'));
        }


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

    public function ReturnOrder(Request $request,$order_id){

        $isSaved = Order::findOrFail($order_id)->update([
            'return_date' => Carbon::now()->format('d F Y'),
            'return_reason' => $request->return_reason,
            'return_order' => 1,
        ]);

        return response()->json([
            'message' => $isSaved ? 'successful' : 'failed',
        ],$isSaved ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);

    }

    public function OrderTraking(Request $request){

        $invoice = $request->code;

        $track = Order::where('invoice_no',$invoice)->first();

        if ($track) {

            return view('site.order.track_order',compact('track'));

        }else{


            return back()->with('error',"هذا الرقم غير صالح");

        }

    }



}
