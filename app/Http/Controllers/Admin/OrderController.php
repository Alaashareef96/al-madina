<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends Controller
{
    public function PendingOrders(){
        $orders = Order::where('status','pending')->orderBy('id','DESC')->get();
        return view('cms.order.pending_orders',compact('orders'));

    }

    public function OrdersDetails($order_id){

        $order = Order::with('city','user')->where('id',$order_id)->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();
        return view('cms.order.orders_details',compact('order','orderItem'));

    }

    public function ConfirmedOrders(){
        $orders = Order::where('status','confirm')->orderBy('id','DESC')->get();
        return view('cms.order.confirm_orders',compact('orders'));

    }

    public function ProcessingOrders(){
        $orders = Order::where('status','processing')->orderBy('id','DESC')->get();
        return view('cms.order.processing_orders',compact('orders'));

    }

    public function PickedOrders(){
        $orders = Order::where('status','picked')->orderBy('id','DESC')->get();
        return view('cms.order.picked_orders',compact('orders'));

    }

    public function ShippedOrders(){
        $orders = Order::where('status','shipped')->orderBy('id','DESC')->get();
        return view('cms.order.shipped_orders',compact('orders'));

    }

    public function DeliveredOrders(){
        $orders = Order::where('status','delivered')->orderBy('id','DESC')->get();
        return view('cms.order.delivered_orders',compact('orders'));

    }

    public function PendingToConfirm($order_id){

      $confirm =  Order::findOrFail($order_id)->update(['status' => 'confirm']);

        return response()->json([
            'message' => $confirm ? 'تم تأكيد الطلب' : 'Create failed'
        ],$confirm ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }

    public function ConfirmToProcessing($order_id){

        $confirm =  Order::findOrFail($order_id)->update(['status' => 'processing']);

        return response()->json([
            'message' => $confirm ? 'تم تأكيد الطلب' : 'Create failed'
        ],$confirm ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }

    public function ProcessingToPicked($order_id){

        $confirm =  Order::findOrFail($order_id)->update(['status' => 'picked']);

        return response()->json([
            'message' => $confirm ? 'تم تأكيد الطلب' : 'Create failed'
        ],$confirm ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }

    public function PickedToShipped($order_id){

        $confirm =  Order::findOrFail($order_id)->update(['status' => 'shipped']);

        return response()->json([
            'message' => $confirm ? 'تم تأكيد الطلب' : 'Create failed'
        ],$confirm ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }

    public function ShippedToDelivered($order_id){

        $confirm =  Order::findOrFail($order_id)->update(['status' => 'delivered']);

        return response()->json([
            'message' => $confirm ? 'تم تأكيد الطلب' : 'Create failed'
        ],$confirm ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }

    public function ReturnRequest(){

        $orders = Order::where('return_order', 1)->orderBy('id','DESC')->get();
        return view('cms.order.return_request',compact('orders'));

    }

    public function ReturnRequestApprove($order_id){

        Order::where('id',$order_id)->update(['return_order' => 2]);

        return redirect()->back()->with('successSweet',"تمت العملية بنجاح");
    }

    public function ReturnAllRequest(){

        $orders = Order::where('return_order',2)->orderBy('id','DESC')->get();
        return view('cms.order.all_return_request',compact('orders'));
    }

}
