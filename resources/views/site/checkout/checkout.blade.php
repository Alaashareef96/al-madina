@extends('site.parent')

@section('titel','checkout')

@section('contact')


        <div class="container">
            <nav aria-label="breadcrumb">
                <ol  class="breadcrumb official ">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">{{trans('site/product.Home')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('product')}}">{{trans('site/product.products')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{trans('site/product.favourite')}}</li>
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
                    @foreach($carts as $product)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <img src="{{url(Storage::url($product->options->image ?? ''))}}" style="height: 50px; width: 50px;">
                                <h6 class="my-0">{{ $product->name }}</h6>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">تفاصيل</h6>
                            <small class="text-muted">{{$product->options->brand}}</small>
                            <small class="text-muted">{{$product->options->taste}}</small>
                            <small class="text-muted">{{$product->options->size}}</small>
                        </div>
                    </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">الكمية</h6>
                                <small class="text-muted">{{ $product->qty }} </small>
                            </div>
                        </li>
                    @endforeach
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
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="payment" action="{{ route('site.checkout.store') }}" method="post">
                    @csrf
                        <div class="mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{Auth::user()->name}}" >
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted"></span></label>
                        <input type="email" class="form-control" name="email" id="email" value="{{Auth::user()->email}}" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Mobile</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" value="{{Auth::user()->mobile}}" placeholder="1234 Main St" >
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                        <div class="mb-3">
                            <label for="country">Country</label>

                            <select class="custom-select d-block w-100" id="city_id" name="city_id" >
                                <option value="">Choose...</option>
                                @foreach ($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach

                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>


                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" >
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>


                    <hr class="mb-4">

                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="stripe" name="payment_method" type="radio" value="stripe" class="custom-control-input" >
                            <label class="custom-control-label" for="stripe">Stripe</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="cash" name="payment_method" type="radio" value="cash" class="custom-control-input" >
                            <label class="custom-control-label" for="cash">Cash</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="payment_method" type="radio" value="paypal" class="custom-control-input" >
                            <label class="custom-control-label" for="paypal">Paypal</label>
                        </div>
                    </div>
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6 mb-3">--}}
{{--                            <label for="cc-name">Name on card</label>--}}
{{--                            <input type="text" class="form-control" id="cc-name" placeholder="" >--}}
{{--                            <small class="text-muted">Full name as displayed on card</small>--}}
{{--                            <div class="invalid-feedback">--}}
{{--                                Name on card is required--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 mb-3">--}}
{{--                            <label for="cc-number">Credit card number</label>--}}
{{--                            <input type="text" class="form-control" id="cc-number" placeholder="" >--}}
{{--                            <div class="invalid-feedback">--}}
{{--                                Credit card number is required--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-3 mb-3">--}}
{{--                            <label for="cc-expiration">Expiration</label>--}}
{{--                            <input type="text" class="form-control" id="cc-expiration" placeholder="" >--}}
{{--                            <div class="invalid-feedback">--}}
{{--                                Expiration date required--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3 mb-3">--}}
{{--                            <label for="cc-expiration">CVV</label>--}}
{{--                            <input type="text" class="form-control" id="cc-cvv" placeholder="" >--}}
{{--                            <div class="invalid-feedback">--}}
{{--                                Security code required--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                </form>
            </div>
        </div>
        </div>


@endsection
