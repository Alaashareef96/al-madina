@extends('cms.parent')

@section('title','Details Order')
@section('page-name','Details Order')
@section('main-page','Content Management')
@section('sub-page','Orders')
@section('page-name-small','Details Order')

@section('styles')

@endsection

@section('content')
<!--begin::Advance Table Widget 5-->
<div class="card card-custom gutter-b">
    <!--begin::Header-->


    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Page Layout-->
                <div class="d-flex flex-row">
                    <!--begin::Layout-->
                    <div class="flex-row-fluid">
                        <!--begin::Section-->
                        <div class="row">
                            <div class="col-md-7 col-lg-6 col-xxl-7">
                                <!--begin::Engage Widget 14-->
                                <div class="card card-custom card-stretch gutter-b">
                                    <div class="card-body p-15 pb-20">
                                        <div class="row mb-17">

                                            <div class="col-xxl-7 pl-xxl-11">
                                                <h2 class="font-weight-bolder text-dark mb-7" style="font-size: 32px;">Shipping Details</h2>

                                        </div>
                                        <div class="row mb-6">
                                            <!--begin::Info-->
                                            <div class="col-6 col-md-4">
                                                <div class="mb-8 d-flex flex-column">
                                                    <span class="text-dark font-weight-bold mb-4">Shipping Name</span>
                                                    <span class="text-muted font-weight-bolder font-size-lg">{{ $order->name }}</span>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="mb-8 d-flex flex-column">
                                                    <span class="text-dark font-weight-bold mb-4">Shipping Phone</span>
                                                    <span class="text-muted font-weight-bolder font-size-lg">{{$order->mobile}}</span>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="mb-8 d-flex flex-column">
                                                    <span class="text-dark font-weight-bold mb-4">Shipping Email</span>
                                                    <span class="text-muted font-weight-bolder font-size-lg">{{ $order->email }}</span>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="mb-8 d-flex flex-column">
                                                    <span class="text-dark font-weight-bold mb-4">City</span>
                                                    <span class="text-muted font-weight-bolder font-size-lg">{{ $order->city->name }}</span>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="mb-8 d-flex flex-column">
                                                    <span class="text-dark font-weight-bold mb-4">Address</span>
                                                    <span class="text-muted font-weight-bolder font-size-lg">{{ $order->address }}</span>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="mb-8 d-flex flex-column">
                                                    <span class="text-dark font-weight-bold mb-4">Order Date</span>
                                                    <span class="text-muted font-weight-bolder font-size-lg">{{ $order->order_date }}</span>
                                                </div>
                                            </div>

                                            <!--end::Info-->
                                        </div>
{{--                                        <!--begin::Buttons-->--}}
{{--                                        <div class="d-flex">--}}
{{--                                            <button type="button" class="btn btn-primary font-weight-bolder mr-6 px-6 font-size-sm">--}}
{{--															<span class="svg-icon">--}}
{{--																<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->--}}
{{--																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--																		<polygon points="0 0 24 0 24 24 0 24" />--}}
{{--																		<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
{{--																		<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />--}}
{{--																	</g>--}}
{{--																</svg>--}}
{{--                                                                <!--end::Svg Icon-->--}}
{{--															</span>New Stock</button>--}}
{{--                                            <button type="button" class="btn btn-light-primary font-weight-bolder px-8 font-size-sm">--}}
{{--															<span class="svg-icon">--}}
{{--																<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-done.svg-->--}}
{{--																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--																		<polygon points="0 0 24 0 24 24 0 24" />--}}
{{--																		<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
{{--																		<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />--}}
{{--																	</g>--}}
{{--																</svg>--}}
{{--                                                                <!--end::Svg Icon-->--}}
{{--															</span>Approve</button>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Buttons-->--}}
                                    </div>
                                </div>
                                <!--end::Engage Widget 14-->
                            </div>
                            <div class="col-md-5 col-lg-12 col-xxl-5">

                                <div class="card card-custom card-stretch card-stretch-half gutter-b">

                                </div>
                                <!--end::List Widget 20-->
                            </div>
                        </div>
                            <div class="col-md-7 col-lg-6 col-xxl-7">
                                <!--begin::Engage Widget 14-->
                                <div class="card card-custom card-stretch gutter-b">
                                    <div class="card-body p-15 pb-20">
                                        <div class="row mb-17">

                                            <div class="col-xxl-7 pl-xxl-11">
                                                <h2 class="font-weight-bolder text-dark mb-7" style="font-size: 32px;">Order Details</h2>

                                            </div>
                                            <div class="row mb-6">
                                                <!--begin::Info-->
                                                <div class="col-6 col-md-4">
                                                    <div class="mb-8 d-flex flex-column">
                                                        <span class="text-dark font-weight-bold mb-4">Name</span>
                                                        <span class="text-muted font-weight-bolder font-size-lg">{{ $order->user->name }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="mb-8 d-flex flex-column">
                                                        <span class="text-dark font-weight-bold mb-4">Phone</span>
                                                        <span class="text-muted font-weight-bolder font-size-lg">{{ $order->user->mobile }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="mb-8 d-flex flex-column">
                                                        <span class="text-dark font-weight-bold mb-4">Payment Type</span>
                                                        <span class="text-muted font-weight-bolder font-size-lg">{{ $order->payment_method }}</span>
                                                    </div>
                                                </div>
                                                @if($order->transaction_id)
                                                <div class="col-6 col-md-4">
                                                    <div class="mb-8 d-flex flex-column">
                                                        <span class="text-dark font-weight-bold mb-4">Tranx ID</span>
                                                        <span class="text-muted font-weight-bolder font-size-lg">{{ $order->transaction_id }}</span>
                                                    </div>
                                                </div>
                                                @endif
                                                <div class="col-6 col-md-4">
                                                    <div class="mb-8 d-flex flex-column">
                                                        <span class="text-dark font-weight-bold mb-4">Invoice</span>
                                                        <span class="text-muted font-weight-bolder font-size-lg">{{ $order->invoice_no }} </span>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="mb-8 d-flex flex-column">
                                                        <span class="text-dark font-weight-bold mb-4">Order Total</span>
                                                        <span class="text-muted font-weight-bolder font-size-lg">{{ $order->amount }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="mb-8 d-flex flex-column">
                                                        <span class="text-dark font-weight-bold mb-4">Total Sales</span>
                                                        <span class="text-muted font-weight-bolder font-size-lg">$24,900</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="mb-8 d-flex flex-column">
                                                        <span class="text-dark font-weight-bold mb-4">Order</span>
                                                        <span class="@if($order->status == 'Pending') text-warning @elseif($order->status == 'confirm') text-primary  @elseif($order->status == 'processing') text-info @elseif($order->status == 'picked')  text-dark @endif text-success font-weight-bolder d-block font-size-lg">{{ucfirst($order->status)}}</span>
                                                    </div>
                                                </div>

                                                <!--end::Info-->
                                            </div>

                                        @if($order->status == 'Pending')
                                         <div class="d-flex">
                                            <a href="#"  type="button" class="btn btn-light-primary font-weight-bolder mr-6 px-6 font-size-sm"  onclick="confirm('{{$order->id}}')">
                                                <span class="svg-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
                                                        </g>
                                                    </svg>
                                                </span>Confirm</a>
                                         </div>
                                            @elseif($order->status == 'confirm')
                                                <div class="d-flex">
                                                    <a href="#"  type="button" class="btn btn-light-info font-weight-bolder mr-6 px-6 font-size-sm"  onclick="process('{{$order->id}}')">
                                                <span class="svg-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
                                                        </g>
                                                    </svg>
                                                </span>Processing</a>
                                                </div>
                                            @elseif($order->status == 'processing')
                                                <div class="d-flex">
                                                    <a href="#"  type="button" class="btn btn-light-dark font-weight-bolder mr-6 px-6 font-size-sm"  onclick="pick('{{$order->id}}')">
                                                <span class="svg-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
                                                        </g>
                                                    </svg>
                                                </span>Picked</a>
                                                </div>

                                            @elseif($order->status == 'picked')
                                                <div class="d-flex">
                                                    <a href="#"  type="button" class="btn btn-light-success font-weight-bolder mr-6 px-6 font-size-sm"  onclick="shipp('{{$order->id}}')">
                                                <span class="svg-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
                                                        </g>
                                                    </svg>
                                                </span>Shipped</a>
                                                </div>
                                            @elseif($order->status == 'shipped')
                                                <div class="d-flex">
                                                    <a href="#"  type="button" class="btn btn-light-success font-weight-bolder mr-6 px-6 font-size-sm"  onclick="deliver('{{$order->id}}')">
                                                <span class="svg-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
                                                        </g>
                                                    </svg>
                                                </span>Delivered</a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!--end::Engage Widget 14-->
                                </div>
                                <div class="col-md-5 col-lg-12 col-xxl-5">

                                    <div class="card card-custom card-stretch card-stretch-half gutter-b">

                                    </div>
                                    <!--end::List Widget 20-->
                                </div>
                            </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <!--begin::Advance Table Widget 10-->
                        <div class="card card-custom col-lg-12">
                            <!--begin::Header-->
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label font-weight-bolder text-dark">المنتجات</span>
                                    <span class="text-muted mt-3 font-weight-bold font-size-sm">{{count($orderItem)}} منتج</span>
                                </h3>
{{--                                <div class="card-toolbar">--}}
{{--                                    <a href="#" class="btn btn-primary font-weight-bolder font-size-sm">New Report</a>--}}
{{--                                </div>--}}
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-0">
                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_4">
                                        <thead>
                                        <tr class="text-left">
                                            <th class="pl-0" style="width: 30px">
                                                #
                                            </th>
                                            <th style="min-width: 110px">الصورة</th>
                                            <th style="min-width: 120px">الاسم</th>
                                            <th style="min-width: 120px">النوع</th>
                                            <th style="min-width: 120px">الحجم</th>
                                            <th style="min-width: 120px">الطعم</th>
                                            <th style="min-width: 120px">الكمية</th>
                                            <th style="min-width: 120px">السعر</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        @foreach ($orderItem as $item)
                                        <tr>
                                            <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            <td class="pl-0">
                                                <img class="img-circle img-bordered-sm" width="65" height="65"
                                                     src="{{url(Storage::url($item->product->image->url_image ?? ''))}}"  alt="User Image">
                                            </td>
                                            <td>
                                                <span class="text-primary font-weight-bolder d-block font-size-lg">{{$item->product->name}}</span>

                                            </td>
                                            <td>
                                                <span class="label label-lg label-light-primary label-inline">{{$item->brand}}</span>
                                            </td>
                                            <td>

                                                <span class="label label-lg label-light-primary label-inline">{{$item->size}}</span>
                                            </td>
                                            <td>
                                                <span class="label label-lg label-light-primary label-inline">{{ $item->taste}}</span>
                                            </td>
                                                <td>
                                                <span class="label label-lg label-light-warning label-inline">{{$item->qty}}</span>
                                            </td>
                                           <td>
                                                <span class="label label-lg label-light-danger  label-inline">${{ $item->price}}  ( ${{ $item->price * $item->qty}} )</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Advance Table Widget 10-->
                        <!--end::Section-->
                    </div>
                    <!--end::Layout-->
                </div>
                <!--end::Page Layout-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
    <!--end::Body-->
</div>
<!--end::Advance Table Widget 5-->
@endsection
@section('scripts')
        <script>
            function confirm(id){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, process it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        confirmed(id);
                    }
                });
            }
            function confirmed(id) {

                axios.get('/cms/admin/orders/pending/confirm/'+id)

                    .then(function (response) {
                        // handle success
                        console.log(response);
                        Swal.fire({
                            icon: 'success',
                            title: 'تم بنجاح ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        window.location.href = '/cms/admin/orders/pending/orders';
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                        Swal.fire({
                            icon: 'error',
                            title: 'لم يتم  تأكيد الطلب',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    })
            }

            function process(id){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, confirm it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        processing(id);
                    }
                });
            }
            function processing(id) {

                axios.get('/cms/admin/orders/confirm/processing/'+id)

                    .then(function (response) {
                        // handle success
                        console.log(response);
                        Swal.fire({
                            icon: 'success',
                            title: 'تم تأكيد الطلب بنجاح ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        window.location.href = '/cms/admin/orders/confirmed/orders';
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                        Swal.fire({
                            icon: 'error',
                            title: 'لم يتم  تأكيد الطلب',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    })
            }

            function pick(id){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, pick it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        picked(id);
                    }
                });
            }
            function picked(id) {

                axios.get('/cms/admin/orders/processing/picked/'+id)

                    .then(function (response) {
                        // handle success
                        console.log(response);
                        Swal.fire({
                            icon: 'success',
                            title: 'تم بنجاح ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        window.location.href = '/cms/admin/orders/processing/orders';
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                        Swal.fire({
                            icon: 'error',
                            title: 'لم يتم  تأكيد الطلب',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    })
            }


            function shipp(id){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, shipp it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        shipped(id);
                    }
                });
            }
            function shipped(id) {

                axios.get('/cms/admin/orders/picked/shipped/'+id)

                    .then(function (response) {
                        // handle success
                        console.log(response);
                        Swal.fire({
                            icon: 'success',
                            title: 'تم بنجاح ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        window.location.href = '/cms/admin/orders/picked/orders';
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                        Swal.fire({
                            icon: 'error',
                            title: 'لم يتم  تأكيد الطلب',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    })
            }


            function deliver(id){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, deliver it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        delivered(id);
                    }
                });
            }
            function delivered(id) {

                axios.get('/cms/admin/orders/shipped/delivered/'+id)

                    .then(function (response) {
                        // handle success
                        console.log(response);
                        Swal.fire({
                            icon: 'success',
                            title: 'تم بنجاح ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        window.location.href = '/cms/admin/orders/shipped/orders';
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                        Swal.fire({
                            icon: 'error',
                            title: 'لم يتم  تأكيد الطلب',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    })
            }

        </script>


@endsection
