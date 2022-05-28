@extends('cms.parent')

@section('title','Return Request')

@section('page-name','Return Request')
@section('main-page','Store Management')
@section('sub-page','Orders')
@section('page-name-small','Return Request')

@section('styles')

@endsection

@section('content')
<!--begin::Advance Table Widget 5-->
<div class="card card-custom gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Return Request</span>
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
                              <span class="label label-lg label-light-warning label-inline">Pending</span>
                            </td>


                        <td class="pr-0 text-right">
                            <a href="#"  type="button" class="btn btn-light-success font-weight-bolder mr-6 px-6 font-size-sm"  onclick="approve('{{$order->id}}')">
                              <span class="svg-icon">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <polygon points="0 0 24 0 24 24 0 24" />
                                          <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                          <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
                                      </g>
                                  </svg>
                              </span>Approve</a>

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
    function approve(id){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, approve it!'
        }).then((result) => {
            if (result.isConfirmed) {
                approveing(id);
            }
        });
    }
    function approveing(id) {

        axios.get('/cms/admin/orders/return/approve/'+id)

            .then(function (response) {
                // handle success
                console.log(response);
                Swal.fire({
                    icon: 'success',
                    title: 'تم تأكيد الطلب بنجاح ',
                    showConfirmButton: false,
                    timer: 1500
                })
                window.location.href = '/cms/admin/orders/all/request/';
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
