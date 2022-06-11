@extends('cms.parent')

@section('title','All Order')

@section('page-name','All Order')
@section('main-page','Content Management')
@section('sub-page','Orders')
@section('page-name-small','All Order')

@section('styles')

@endsection

@section('content')
<!--begin::Advance Table Widget 5-->
{{--<div class="card card-custom gutter-b">--}}
{{--    <!--begin::Header-->--}}
{{--    <div class="card-header border-0 py-5">--}}
{{--        <h3 class="card-title align-items-start flex-column">--}}
{{--            <span class="card-label font-weight-bolder text-dark">Pending Order</span>--}}
{{--            <span class="text-muted mt-3 font-weight-bold font-size-sm">Manage Order</span>--}}
{{--        </h3>--}}

{{--        <div class="card-toolbar">--}}
{{--            <a href="{{route('coupons.create')}}" class="btn btn-info font-weight-bolder font-size-sm">New--}}
{{--                Coupon</a>--}}
{{--        </div>--}}


{{--    </div>--}}
{{--    <!--end::Header-->--}}
{{--    <!--begin::Body-->--}}
{{--    <div class="card-body py-0">--}}
{{--        <!--begin::Table-->--}}
{{--        <div class="table-responsive">--}}
{{--            <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">--}}
{{--                <thead>--}}
{{--                    <tr class="text-uppercase">--}}
{{--                    <th style="min-width: 50px">#</th>--}}
{{--                    <th style="min-width: 150px">Date </th>--}}
{{--                    <th style="min-width: 150px">Invoice </th>--}}
{{--                    <th style="min-width: 150px">Amount </th>--}}
{{--                    <th style="min-width: 150px">Payment </th>--}}
{{--                    <th style="min-width: 150px">Status</th>--}}

{{--                  <th class="pr-0 text-right" style="min-width: 160px">action</th>--}}
{{--                    </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                    <?php $i = 0; ?>--}}
{{--                    @foreach ($orders as $order)--}}
{{--                    <tr>--}}
{{--                        <?php $i++; ?>--}}
{{--                        <td>{{ $i }}</td>--}}
{{--                        <td>{{$order->order_date}}</td>--}}
{{--                        <td>{{$order->invoice_no  ?? ''}}</td>--}}
{{--                        <td>${{$order->amount  ?? ''}}</td>--}}
{{--                        <td>{{$order->payment_method   ?? ''}}</td>--}}
{{--                            <td>--}}

{{--                                <span class="label label-lg label-light-warning label-inline">{{$order->status}}</span>--}}

{{--                            </td>--}}


{{--                        <td class="pr-0 text-right">--}}
{{--                            <a href="{{route('order.details',$order->id)}}"--}}
{{--                                class="btn btn-icon btn-light btn-hover-primary btn-sm 3">--}}
{{--                         <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/General/Visible.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--        <rect x="0" y="0" width="24" height="24"/>--}}
{{--        <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>--}}
{{--        <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>--}}
{{--    </g>--}}
{{--</svg><!--end::Svg Icon--></span>--}}
{{--                            </a>--}}
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
{{--                        </td>--}}
{{--                    @endforeach--}}
{{--            </table>--}}
{{--        </div>--}}
{{--        <!--end::Table-->--}}
{{--    </div>--}}
{{--    <!--end::Body-->--}}
{{--</div>--}}
<!--end::Advance Table Widget 5-->

<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">All Orders
                <span class="d-block text-muted pt-2 font-size-sm">Manage Orders</span></h3>
        </div>
        <div class="card-toolbar">

            <!--begin::Button-->
            <a href="{{route('cities.create')}}" class="btn btn-primary font-weight-bolder">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<circle fill="#000000" cx="9" cy="15" r="6" />
														<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>New Record</a>
            <!--end::Button-->
        </div>
    </div>
    <div class="card-body">
        <!--begin: Search Form-->
        <!--begin::Search Form-->
        <div class="mb-7">
            <div class="row align-items-center">
                <div class="col-lg-9 col-xl-8">
                    <div class="row align-items-center">
                        <div class="col-md-4 my-2 my-md-0">
                            <div class="input-icon">
                                <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query1" />
                                <span>
                                    <i class="flaticon2-search-1 text-muted"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4 my-2 my-md-0">
                            <div class="d-flex align-items-center">
                                <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                <select class="form-control" id="kt_datatable_search_status1">
                                    <option value="">All</option>
                                    <option value="pending">Pending</option>
                                    <option value="confirm">Confirm</option>
                                    <option value="processing">Processing</option>
                                    <option value="picked">Picked</option>
                                    <option value="shipped">Shipped</option>
                                    <option value="delivered">Delivered</option>
                                    <option value="canceled">Canceled</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 my-2 my-md-0">
                            <div class="d-flex align-items-center">
                                <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                <select class="form-control" id="kt_datatable_search_type1">
                                    <option value="">All</option>
                                    <option value="Stripe">Stripe</option>
                                    <option value="Cash On Delivery">Cash On Delivery</option>
                                    <option value="PayPal">PayPal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable1">
            <thead>
            <tr>

                <th title="Field #1">Date</th>
                <th title="Field #2">Invoice</th>
                <th title="Field #3">Amount</th>
                <th title="Field #4">Type</th>
                <th title="Field #7">Status</th>
                <th title="Field #6">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{$order->order_date}}</td>
                    <td>{{$order->invoice_no  ?? ''}}</td>
                    <td>{{$order->amount  ?? ''}}</td>
                    <td>{{$order->payment_method ?? ''}}</td>
{{--                    <td>{{$order->status}}</td>--}}
{{--                    <td class="text-right">{{$order->status}}</td>--}}
                    <td class="text-right">{{$order->status}}</td>

                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
                    <span style="overflow: visible; position: relative; width: 125px;">

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
                    </span>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!--end: Datatable-->
    </div>
</div>
@endsection

@section('scripts')
<script>
    'use strict';
    // Class definition

    var KTDatatableHtmlTableDemo1 = function () {
        // Private functions

        // demo initializer
        var demo1 = function () {

            var datatable = $('#kt_datatable1').KTDatatable({
                data: {
                    saveState: { cookie: false },
                },
                search: {
                    input: $('#kt_datatable_search_query1'),
                    key: 'generalSearch',
                },
                layout: {
                    class: 'datatable-bordered',
                },
                columns: [
                    {
                        field: 'DepositPaid',
                        type: 'number',
                    },
                    {
                        field: 'OrderDate',
                        type: 'date',
                        format: 'YYYY-MM-DD',
                    }, {
                        field: 'Status',
                        title: 'Status',
                        autoHide: false,
                        // callback function support for column rendering
                        template: function (row) {
                            var status = {
                                'pending': {
                                    'title': 'Pending',
                                    'class': ' label-light-warning',
                                },
                                'confirm': {
                                    'title': 'Confirm',
                                    'class': ' label-light-primary',
                                },
                                'processing': {
                                    'title': 'Processing',
                                    'class': ' label-light-info',
                                },
                                'picked': {
                                    'title': 'Picked',
                                    'class': ' label-light-dark',
                                },
                                'shipped': {
                                    'title': 'Shipped',
                                    'class': ' label-light-success',
                                },
                                'delivered': {
                                    'title': 'Delivered',
                                    'class': ' label-light-success',
                                },
                                'canceled': {
                                    'title': 'Canceled',
                                    'class': ' label-light-danger',
                                },
                            };
                            return '<span class="label font-weight-bold label-lg' + status[row.Status].class + ' label-inline">' + status[row.Status].title + '</span>';
                        },
                    }, {
                        field: 'Type',
                        title: 'Type',
                        autoHide: false,
                        // callback function support for column rendering
                        template: function (row) {
                            var status = {
                                'Stripe': {
                                    'title': 'Stripe',
                                    'state': 'primary',
                                },
                                'Cash On Delivery': {
                                    'title': 'Cash On Delivery',
                                    'state': 'danger',
                                },
                                'PayPal': {
                                    'title': 'PayPal',
                                    'state': 'success',
                                },
                            };
                            return '<span class="label label-' + status[row.Type].state + ' label-dot mr-2"></span><span class="font-weight-bold text-' + status[row.Type].state + '">' + status[row.Type].title + '</span>';
                        },
                    },
                ],
            });

            $('#kt_datatable_search_status1').on('change', function () {
                datatable.search($(this).val().toLowerCase(), 'Status');
            });

            $('#kt_datatable_search_type1').on('change', function () {
                datatable.search($(this).val().toLowerCase(), 'Type');
            });

            $('#kt_datatable_search_status1, #kt_datatable_search_type1').selectpicker();

        };

        return {
            // Public functions
            init: function () {
                // init dmeo
                demo1();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableDemo1.init();
    });

</script>
@endsection
