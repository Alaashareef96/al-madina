@extends('site.parent')

@section('titel','Payment PayPal')

@section('contact')


    <div class="container">
        <nav aria-label="breadcrumb">
            <ol  class="breadcrumb official ">
                <li class="breadcrumb-item"><a href="{{route('home')}}">{{trans('site/product.Home')}}</a></li>
                <li class="breadcrumb-item"><a href="{{route('product')}}">{{trans('site/product.products')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Payment PayPal</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">{{$cartQty}}</span>
                </h4>
                <ul class="list-group mb-3">

                    @if(Session::has('coupon'))
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">SubTotal</h6>
                            </div>
                            <strong>${{ $cartTotal }}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success-aa">
                                <h6 class="my-0">coupon name</h6>
                            </div>
                            <span class="text-success">{{ session()->get('coupon')['coupon_name'] }}
                                         ( {{ session()->get('coupon')['coupon_discount'] }} % )</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>discount amount</span>
                            <strong>${{ session()->get('coupon')['discount_amount'] }} </strong>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span>Grand Total</span>
                            <strong>${{ session()->get('coupon')['total_amount'] }} </strong>
                        </li>
                    @else
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">SubTotal</h6>
                                <small class="text-muted">SubTotal</small>
                            </div>
                            <span class="text-muted">${{ $cartTotal }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Grand Total </h6>
                                <small class="text-muted">Grand Total</small>
                            </div>
                            <span class="text-muted">{{ $cartTotal }}$</span>
                        </li>
                    @endif
                </ul>

            </div>
            <div class="col-md-6 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form action="{{route('checkout.payment')}}"  method="post" id="payment-form">
                    @csrf
                    <div class="form-group">
                        <label for="card-element">
                            <img src="{{ asset('site/images/paypal.png') }}">
                            <input type="hidden" name="name" value="{{ $data['name'] }}">
                            <input type="hidden" name="email" value="{{ $data['email'] }}">
                            <input type="hidden" name="mobile" value="{{ $data['mobile'] }}">
                            <input type="hidden" name="city_id" value="{{ $data['city_id'] }}">
                            <input type="hidden" name="address" value="{{ $data['address'] }}">

                        </label>
                    </div>

                        <button
                            id="card-button" class="btn btn-dark" type="submit"> Continue PayPal </button>
                </form>

            </div>
        </div>
    </div>


@endsection
@section('script')

@endsection


