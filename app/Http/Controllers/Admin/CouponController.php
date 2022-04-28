<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CouponRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;


class CouponController extends Controller
{

    public function index()
    {
        $coupons = Coupon::orderBy('id', 'desc')->get();
        return response()->view('cms.coupons.index',compact('coupons'));
    }


    public function create()
    {
        return response()->view('cms.coupons.create');
    }


    public function store(CouponRequest $request)
    {
        $data = $request->only(['name','discount','qty','date']);
        $data['status'] = $request->has('status');
        $coupon = Coupon::create($data);
        return response()->json([
            'message' => $coupon ? 'Create successful' : 'Create failed'
        ],$coupon ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }



    public function edit(Coupon $coupon)
    {
        return response()->view('cms.coupons.edit',compact('coupon'));
    }


    public function update(CouponRequest $request, Coupon $coupon)
    {
        $data = $request->only(['name','discount','qty','date']);
        $data['status'] = $request->has('status');

        $coupon->update($data);

        return response()->json([
            'message' => $coupon ? 'Update successful' : 'Update failed'
        ],$coupon ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }


    public function destroy(Coupon $coupon)
    {
        $isDeleted = $coupon->delete();
        return response()->json([
            'icon'=>$isDeleted ? 'success':'error',
            'title'=>$isDeleted ? 'Deleted successfully':'Delete failed'
        ], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

}
