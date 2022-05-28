@extends('cms.parent')

@section('title','Show')

@section('page-name','Reports Show')
@section('main-page','HUMAN RESOURCES')
@section('sub-page','Reports')
@section('page-name-small','Show')

@section('styles')

@endsection

@section('content')
<!--begin::Advance Table Widget 5-->
<div class="card card-custom gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Reports Show</span>
{{--            <span class="text-muted mt-3 font-weight-bold font-size-sm">Manage Order</span>--}}
        </h3>

{{--        <div class="card-toolbar">--}}
{{--            <a href="{{route('coupons.create')}}" class="btn btn-info font-weight-bolder font-size-sm">New--}}
{{--                Coupon</a>--}}
{{--        </div>--}}


    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-0">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
                <thead>
                    <tr class="text-uppercase">
                    <th style="min-width: 50px">#</th>
                    <th style="min-width: 150px">Date </th>
                    <th style="min-width: 150px">Invoice </th>
                    <th style="min-width: 150px">Amount </th>
                    <th style="min-width: 150px">Payment </th>
                    <th style="min-width: 150px">Status</th>

                  <th class="pr-0 text-right" style="min-width: 160px">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    @foreach ($orders as $order)
                    <tr>
                        <?php $i++; ?>
                        <td>{{ $i }}</td>
                        <td>{{$order->order_date}}</td>
                        <td>{{$order->invoice_no  ?? ''}}</td>
                        <td>${{$order->amount  ?? ''}}</td>
                        <td>{{$order->payment_method   ?? ''}}</td>
                            <td>
                                <span class="@if($order->status == 'Pending') text-warning @elseif($order->status == 'confirm') text-primary  @elseif($order->status == 'processing') text-info @elseif($order->status == 'picked')  text-dark @endif text-success font-weight-bolder d-block font-size-lg">{{ucfirst($order->status)}}</span>

                            </td>

                        <td class="pr-0 text-right">
                            <a href="{{route('order.details',$order->id)}}"
                                class="btn btn-icon btn-light btn-hover-primary btn-sm 3">
                         <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/General/Visible.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                               <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                          <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>
                                        </g>
                             </svg><!--end::Svg Icon--></span>
                            </a>
{{--                            <a href="#" onclick="confirmDestroy('{{$order->id}}',this)"--}}
{{--                                class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
{{--                                <span class="svg-icon svg-icon-md svg-icon-primary">--}}
{{--                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                                            <rect x="0" y="0" width="24" height="24" />--}}
{{--                                            <path--}}
{{--                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"--}}
{{--                                                fill="#000000" fill-rule="nonzero" />--}}
{{--                                            <path--}}
{{--                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"--}}
{{--                                                fill="#000000" opacity="0.3" />--}}
{{--                                        </g>--}}
{{--                                    </svg>--}}
{{--                                    <!--end::Svg Icon-->--}}
{{--                                </span>--}}
{{--                            </a>--}}
                        </td>
                    @endforeach
            </table>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Body-->
</div>
<!--end::Advance Table Widget 5-->
@endsection

@section('scripts')

@endsection
