@extends('site.parent')

@section('titel','المشتريات')


@section('contact')

    <div class="products bubbles">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol  class="breadcrumb official ">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">{{trans('site/product.Home')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('product')}}">{{trans('site/product.products')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">المشتريات</li>
                </ol>
            </nav>
            <div class="row">

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><h4>Shipping Details</h4></div>
                        <hr>
                        <div class="card-body" style="background: #E9EBEC;">
                            <table class="table">
                                <tr>
                                    <th> Shipping Name : </th>
                                    <th> {{ $order->name }} </th>
                                </tr>
                                <tr>
                                    <th> Shipping Phone : </th>
                                    <th> {{ $order->mobile }} </th>
                                </tr>
                                <tr>
                                    <th> Shipping Email : </th>
                                    <th> {{ $order->email }} </th>
                                </tr>
                                <tr>
                                    <th> City : </th>
                                    <th> {{ $order->city->name }} </th>
                                </tr>
                                <tr>
                                    <th> Address : </th>
                                    <th> {{ $order->address }} </th>
                                </tr>

                                <tr>
                                    <th> Order Date : </th>
                                    <th> {{ $order->order_date }} </th>
                                </tr>

                            </table>
                        </div>

                    </div>

                </div> <!-- // end col md -5 -->

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><h4>Order Details
                                <span class="text-danger"> Invoice : {{ $order->invoice_no }}</span></h4>
                        </div>
                        <hr>
                        <div class="card-body" style="background: #E9EBEC;">
                            <table class="table">
                                <tr>
                                    <th>  Name : </th>
                                    <th> {{ $order->user->name }} </th>
                                </tr>

                                <tr>
                                    <th>  Phone : </th>
                                    <th> {{ $order->user->mobile }} </th>
                                </tr>

                                <tr>
                                    <th> Payment Type : </th>
                                    <th> {{ $order->payment_method }} </th>
                                </tr>
                                 @if($order->transaction_id)
                                <tr>
                                    <th> Tranx ID : </th>
                                    <th> {{ $order->transaction_id }} </th>
                                </tr>
                                @endif
                                <tr>
                                    <th> Invoice  : </th>
                                    <th class="text-danger"> {{ $order->invoice_no }} </th>
                                </tr>

                                <tr>
                                    <th> Order Total : </th>
                                    <th>{{ $order->amount }} </th>
                                </tr>

                                <tr>
                                    <th> Order : </th>
                                    <th>
{{--                                        <span class="badge badge-pill badge-warning" style="background: #418DB9;">{{ $order->status }} </span> </th>--}}
                                        <span class="badge badge-pill @if($order->status == 'Pending')badge-warning @elseif($order->status == 'confirm') badge-primary @elseif($order->status == 'processing') badge-info @elseif($order->status == 'picked')  badge-dark  @elseif($order->status == 'shipped') badge-success @elseif($order->status == 'delivered') badge-success @elseif($order->status == 'cancel')badge-danger @endif">{{ucfirst($order->status)}}</span>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div> <!-- // 2ND end col md -5 -->
            </div>
            <br>
             <div class="row">

                    <div class="col-md-12" style="background: #E9EBEC;">

                        <div class="table">
                            <table class="table table-head-custom table-vertical-center"  data-parent="price" id="kt_advance_table_widget_2">
                                <thead>
                                <tr class="text-uppercase">
                                    <th style="min-width: 50px">#</th>
                                    <th style="min-width: 100px">الصورة</th>
                                    <th style="min-width: 150px">الاسم</th>
                                    <th style="min-width: 120px">
                                        <label for=""> النوع </label>
                                    </th>
                                    <th style="min-width: 120px">الحجم</th>
                                    <th style="min-width: 150px">الطعم</th>
                                    <th style="min-width: 150px">الكمية</th>
                                    <th style="min-width: 110px">السعر</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach ($orderItem as $item)
                                    <tr>
                                        <?php $i++; ?>
                                        <td>{{ $i }}</td>
                                        <td>
                                            <img class="img-circle img-bordered-sm" width="65" height="65"
                                                 src="{{url(Storage::url($item->product->image->url_image ?? ''))}}"  alt="User Image">
                                        </td>
                                        <td>{{$item->product->name}}</td>
                                        <td>{{$item->brand}}</td>
                                        <td>{{$item->size}}</td>
                                        <td>{{ $item->taste}}</td>
                                        <td>{{$item->qty}}</td>
                                        <td>${{ $item->price}}  ( ${{ $item->price * $item->qty}} )</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- / end col md 8 -->

                </div> <!-- // END ORDER ITEM ROW -->
            <br>
            @if($order->status !== "delivered")

            @else
                <div class="form-group">
                    <label for="label"> Order Return Reason:</label>
                    <textarea name="return_reason" id="" class="form-control" cols="30" rows="05">Return Reason</textarea>

                </div>
            @endif


            </div>
        </div>

@endsection


@section('script')


@endsection


