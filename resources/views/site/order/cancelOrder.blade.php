@extends('site.parent')

@section('titel','الطلبات الملغية')

@section('style')
    <style>
        .block-aa {
            display: block;
            width: 100%;
            border: none;
            border-radius: 12px;
            background-color: #25d366;
            padding: 15px 28px;
            font-size: 14px;
            cursor: pointer;
            text-align: center;
            color: white;
        }
        .block-aa:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
@endsection

@section('contact')


        <div class="container">
<br> <br>
        <section style="background-color: #eee;">
                <div class="container py-5">

                    <div class="row col-lg-6">
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="{{asset('cms/assets/media/users/blank.png')}}" alt="avatar"
                                         class="rounded-circle img-fluid" style="width: 150px;">
                                    <h5 class="my-3">{{Auth::user()->name}}</h5>
                                    <p class="text-muted mb-1">{{Auth::user()->email}}</p>
                                    <p class="text-muted mb-4">{{Auth::user()->mobile}}</p>
                                    <div class="d-flex justify-content-center mb-2">
                                        <a href="{{route('auth.logout.user')}}" type="button" class="btn btn-primary">Logout</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4 mb-lg-0">
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush rounded-3">
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <a href="{{route('site.edit-profile')}}" type="button" class="block-aa">تعديل الحساب</a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <a href="{{route('site.edit-password')}}" type="button" class="block-aa">تعديل كلمة المرور</a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <a href="{{route('site.MyOrders')}}" type="button" class="block-aa">قائمة الطلبات</a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <a href="{{route('site.return.order.list')}}" type="button" class="block-aa">قائمة الطلبات المرجعة</a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <a href="{{route('site.cancel.orders')}}" type="button" class="block-aa">قائمة الطلبات الملغية</a>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row col-lg-6">
                            <div class="col-lg-6">
{{--                                <div class="col-12" id="filter-bar">--}}
{{--                                    <div class="nav-search">--}}
{{--                                        <div>--}}
{{--                                            <span class="number-of-search-result" id="search_number">{{count($orders)}}</span>--}}
{{--                                            <span> منتجات في المشتريات </span>--}}
{{--                                            <span id="search-names"> </span>--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <span class="word-search">{{trans('site/product.show_by')}}</span>--}}
{{--                                            <select name="search_by" id="sort-select">--}}
{{--                                                <option value="desc" {{ request()->sort == 'desc' ? 'selected':'' }}>الأحدث</option>--}}
{{--                                                <option value="asc" {{ request()->sort == 'asc' ? 'selected':'' }}>الأقدم</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12 mb-3">--}}
{{--                                    <div class="words-filter" id="filter-tabs">--}}

{{--                                    </div>--}}

{{--                                </div>--}}

                                <!--begin::Table-->
                                <div class="table">
                                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
                                        <thead>
                                        <tr class="text-uppercase">
                                            <th style="min-width: 50px">#</th>
                                            <th style="min-width: 100px">التاريخ</th>
                                            <th style="min-width: 100px">المجموع</th>
                                            <th style="min-width: 120px">وسيلة الدفع</th>
                                            <th style="min-width: 120px">الفاتورة</th>
                                            <th style="min-width: 150px">حالة الطلب</th>
                                            <th class="pr-0 text-right" style="min-width: 60px">العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        @forelse ($orders as $order)
                                            <tr>
                                                <?php $i++; ?>
                                                <td>{{ $i }}</td>

                                                <td>{{$order->order_date}}</td>
                                                <td>{{$order->amount}}</td>
                                                <td>{{$order->payment_method}}</td>
                                                <td>{{$order->invoice_no}}</td>
                                                <td class="col-md-2">
                                                    <label for="">
                                                        <span class="badge badge-pill badge-success ">{{ucfirst($order->status)}}</span>
{{--                                                        <span class="badge badge-pill badge-danger">Return Requested</span>--}}
                                                    </label>

                                                </td>
                                                <td class="pr-0">
                                                    <a href="{{route('site.OrdersDetails',$order->id)}}">
                                                        {{--                                                <i class="fa fa-eye fa-2x" aria-hidden="true"></i>--}}
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                        </svg>
                                                    </a>
                                                </td>
                                                <td class="pr-0">
                                                    <a target="_blank"  href="{{route('site.invoiceDownload',$order->id)}}">
                                                        {{--                                        <i class="fa fa-download fa-2x" aria-hidden="true"></i>--}}
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                                        </svg>
                                                    </a>
                                                </td>
                                        @empty

                                                 <h6 class="text-danger">Order Not Found</h6>


                                        @endforelse
                                    </table>
                                </div>
                                <!--end::Table-->
                                <div class="row">
                                    <div class="mx-auto mt-5" id="pagination-div">
                                        <nav class="custom-pagination">

                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>

        </div>

@endsection


@section('script')

@endsection


