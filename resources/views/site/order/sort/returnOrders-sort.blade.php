<?php $i = 0; ?>
@foreach ($orders as $order)
    <tr>
        <?php $i++; ?>
        <td>{{ $i }}</td>

        <td>{{$order->order_date}}</td>
        <td>{{$order->amount}}</td>
        <td>{{$order->payment_method}}</td>
        <td>{{$order->invoice_no}}</td>
        <td>{{$order->return_reason  ?? ''}}</td>
        <td class="col-md-2">
            <label for="">
                @if($order->return_order == 1)
                    <span class="badge badge-pill badge-warning ">Pedding</span>
                    <span class="badge badge-pill badge-danger">Return Requested</span>
                @elseif($order->return_order == 2)
                    <span class="badge badge-pill badge-success ">Success </span>
                @endif
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
                <a target="_blank"  href="{{route('site.invoiceDownload',$order->id)}}">
                    {{--                                        <i class="fa fa-download fa-2x" aria-hidden="true"></i>--}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                    </svg>
                </a>
            </td>

@endforeach
