@extends('cms.parent')

@section('title','Return All Request')

@section('page-name','Return All Request')
@section('main-page','Store Management')
@section('sub-page','Orders')
@section('page-name-small','Return All Request')

@section('styles')

@endsection

@section('content')
<!--begin::Advance Table Widget 5-->
<div class="card card-custom gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Return All Request</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">Manage Order</span>
        </h3>


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
                                <span class="label label-lg label-light-success label-inline">Success</span>
                            </td>


                        <td class="pr-0 text-right">
                            <span class="label label-lg label-light-success label-inline">Return Success</span>
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

<script>
    function confirmDestroy(id, reference){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                destroy(id, reference);
            }
            });
    }
</script>
@endsection
