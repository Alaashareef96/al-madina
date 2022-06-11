@extends('site.parent')

@section('titel','سلة المشتريات')

@section('style')
    <style>
        .remove-wishlist{
            position: absolute;
            top: 15px;
            right: 30px;
            font-size: 23px;
            cursor: pointer;


        }
        .remove-wishlist:hover{
           color:red;
            width: 100%;
            height: 100%;
            z-index: 13;
        }
        .remove-wishlist.active{
            color:red;
        }
    </style>

@endsection
@section('contact')

    <div class="products bubbles">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol  class="breadcrumb official ">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">{{trans('site/product.Home')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('product')}}">{{trans('site/product.products')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> سلة المشتريات</li>
                </ol>
            </nav>
            <div class="row">
{{--                <div class="col-lg-3">--}}
{{--                    <div class="filters">--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-lg-12">
                    <div class="col-12" id="filter-bar">
                        <div class="nav-search">
                            <div>
                                <span class="number-of-search-result" id="search_number">{{$cartQty}}</span>
                                <span> منتجات في سلة المشتريات </span>
                                <span id="search-names"> </span>
                            </div>
{{--                            <div>--}}
{{--                                <span class="word-search">{{trans('site/product.show_by')}}</span>--}}
{{--                                <select name="search_by" id="sort-select">--}}
{{--                                    <option value="desc">{{trans('site/product.desc')}}</option>--}}
{{--                                    <option value="asc">{{trans('site/product.asc')}}</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="words-filter" id="filter-tabs">



                        </div>

                    </div>

{{--                    <div class="row" id="updateDiv">--}}

                        <!--begin::Table-->
                        <div class="table">
                            <table class="table table-head-custom table-vertical-center"  data-parent="price" id="kt_advance_table_widget_2">
                                <thead>
                                <tr class="text-uppercase">
                                    <th style="min-width: 50px">#</th>
                                    <th style="min-width: 100px">الصورة</th>
                                    <th style="min-width: 150px">الاسم</th>
                                    <th style="min-width: 120px">النوع</th>
                                    <th style="min-width: 120px">الطعم</th>
                                    <th style="min-width: 150px">الحجم</th>
                                    <th style="min-width: 150px">الكمية</th>
                                    <th style="min-width: 110px">السعر</th>
                                    <th class="pr-0 text-right" style="min-width: 90px">العمليات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach ($carts as $product)
                                    <tr id="tr-{{$product->rowId}}">
                                        <?php $i++; ?>
                                        <td>{{ $i }}</td>
                                        <td>
                                            <img class="img-circle img-bordered-sm" width="65" height="65"
                                                 src="{{url(Storage::url($product->options->image ?? ''))}}"  alt="User Image">
                                        </td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->options->brand}}</td>
                                        <td>{{$product->options->taste}}</td>
                                        <td>{{$product->options->size}}</td>
                                            <td class="col-md-2">
                                                <button type="submit" onclick="cartIncrement('{{$product->rowId}}',this)" class="btn btn-success btn-sm">+</button>
                                                <input type="text" class="input-number" data-id="{{$product->rowId}}" value="{{$product->qty}}"  min="1" max="100"  style="width:38px;" >
                                                <button type="submit" onclick="cartDecrement('{{$product->rowId}}',this)" class="btn btn-danger btn-sm">-</button>
                                            </td>

                                            <td id="subtotal-cart">{{$product->subtotal}}</td>
                                        <td class="pr-0 text-right">
                                            <a href="#" onclick="confirmDestroy('{{$product->rowId}}',this)">
                                            <i class="fa fa-trash fa-2x" aria-hidden="true"></i>

                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    <div class="row">
                    <div class="col-md-4 col-sm-12 estimate-ship-tax">
                        @if(Session::has('coupon'))

                        @else
                            <table class="table" id="couponField">
                            <thead>
                            <tr>
                                <th>
                                    <span class="estimate-title">Discount Code</span>
                                    <p>Enter your coupon code if you have one..</p>
                                </th>
                            </tr>
                            <thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control unicase-form-control text-input" placeholder="You Coupon.." id="coupon_name">
                                    </div>
                                    <div class="clearfix pull-right">
                                        <button type="submit" class="btn-upper btn btn-primary" onclick="applyCoupon()">APPLY COUPON</button>
                                    </div>
                                </td>
                            </tr>
                            </tbody><!-- /tbody -->
                        </table><!-- /table -->
                            @endif
                    </div><!-- /.estimate-ship-tax -->
                    <div>

                    <div class="col-md-12 col-sm-12 cart-shopping-total">
                        <table class="table">
                            <thead id="couponCalField">

                            </thead><!-- /thead -->
                            <tbody>
                            <tr>
                                <td>
                                    <div class="cart-checkout-btn pull-right">
                                        <a href="{{route('site.checkout')}}" type="submit"  class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</a>

                                    </div>
                                </td>
                            </tr>
                            </tbody><!-- /tbody -->
                        </table><!-- /table -->
                    </div><!-- /.cart-shopping-total -->

{{--                    </div>--}}
                    <div class="row">
                        <div class="mx-auto mt-5" id="pagination-div">
                            <nav class="custom-pagination">
{{--                                {{ $products->links() }}--}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form id="sort-form">
            <div id="filter-inputs">

            </div>
        </form>
    </div>

    <div class="modal-container">

    </div>
@endsection


@section('script')
    <script type="text/javascript" src="{{asset('site/js/jquery.numeric-min.js')}}"></script>
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

        function destroy(id, reference) {
            //JS - Axios
            axios.delete('/al-madina/cart/remove/'+id)
                .then(function (response) {
                    // handle success
                    console.log(response);
                    reference.closest('tr').remove();
                    couponCalculation();
                    $('#couponField').show();
                    $('#coupon_name').val('');
                    Swal.fire({
                        icon: 'success',
                        title: 'تم الحذف بنجاح',
                        showConfirmButton: false,
                        timer: 1500
                    })
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                    Swal.fire({
                        icon: 'error',
                        title: 'لم يتم الحذف',
                    })
                })
        }

        function cartIncrement(rowId,that){
          // $sss=   $(that).siblings('.input-number').val();
          //   console.log($sss)
            $.ajax({
                type:'GET',
                url: "/al-madina/cart/increment/"+rowId,
                dataType:'json',
                success:function(data){
                    couponCalculation();
                    $('#tr-'+rowId).find("#subtotal-cart").html(data.showTotal);
                    $(that).siblings('.input-number').val(data.showQty);
                    $('#search_number').html(data.cartQty);
                    $('.badge-number').html(data.cartQty);
                }
            });
        }

        function cartDecrement(rowId,that){
            $.ajax({
                type:'GET',
                url: "/al-madina/cart/decrement/"+rowId,
                dataType:'json',
                success:function(data){
                    if(data.status){
                        couponCalculation();
                        $('#tr-'+rowId).find("#subtotal-cart").html(data.showTotal);
                        $(that).siblings('.input-number').val(data.showQty);
                        $('#search_number').html(data.cartQty);
                        $('.badge-number').html(data.cartQty);
                    }else{
                        Swal.fire({
                            icon: 'info',
                            title: 'يجب اضافة قيمة أعلى من صفر',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                }
            });
        }
        $('.input-number').numeric({
            negative:false
        })
        $(document).on('change','.input-number',function (){
            var number =$(this).val();
            var rowId =  $(this).data('id');
            $.ajax({
                type: "get",
                url: "{{ route('site.cart.change') }}",
                data: {
                    number: number,
                    rowId: rowId,
                },
                success:function(data){
                    if(data.status){
                        couponCalculation();
                        $('#tr-'+rowId).find("#subtotal-cart").html(data.showTotal);
                        $('#search_number').html(data.cartQty);
                        $('.badge-number').html(data.cartQty);
                    }
                    else{
                        Swal.fire({
                            icon: 'info',
                            title: 'يجب اضافة قيمة أعلى من صفر',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }

                }
            });
        })

        function applyCoupon(){
            @guest()
            Swal.fire({
                icon: 'error',
                title: '{{trans('site/product.guest')}}',
                showConfirmButton: false,
                timer: 1500
            });
            @endguest
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var coupon_name = $('#coupon_name').val();
            $.ajax({
                type:'post',
                url: "{{ route('site.cart.coupon') }}",
                data:{
                    coupon_name: coupon_name,
                },
                success:function(data) {
                    if(data.success){
                        couponCalculation();
                        $('#couponField').hide();
                        Swal.fire({
                            icon: 'success',
                            title: 'تم إضافة الكوبون بنجاح',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }else{
                        Swal.fire({
                            icon: 'info',
                            title: 'هذا الكوبون لا يعمل',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                    if(data.nocart)
                    Swal.fire({
                        icon: 'info',
                        title: 'يجب اضافة منتج للسلة',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            });
        }

        function couponCalculation(){
            $.ajax({
                type: 'GET',
                url: "{{ route('site.cart.couponcalculation') }}",
                dataType: 'json',
                success:function(data){

                    if (data.total) {
                        $('#couponCalField').html(
                            `<tr>
                                <th>
                                    <div class="cart-sub-total">
                                        Subtotal<span class="inner-left-md">$ ${data.total}</span>
                                    </div>
                                    <div class="cart-grand-total">
                                        Grand Total<span class="inner-left-md">$ ${data.total}</span>
                                    </div>
                                </th>
                            </tr>`
                        )
                    }else{
                        $('#couponCalField').html(
                            `<tr>
                                    <th>
                                        <div class="cart-sub-total">
                                            Subtotal<span class="inner-left-md">$ ${data.subtotal}</span>
                                        </div>
                                        <div class="cart-sub-total">
                                            Coupon<span class="inner-left-md">$ ${data.coupon_name}</span>
                                            <button type="submit" onclick="couponRemove()"><i class="fa fa-times"></i>  </button>
                                        </div>
                                         <div class="cart-sub-total">
                                            Discount Amount<span class="inner-left-md">$ ${data.discount_amount}</span>
                                        </div>
                                        <div class="cart-grand-total">
                                            Grand Total<span class="inner-left-md">$ ${data.total_amount}</span>
                                        </div>
                                    </th>
                                        </tr>`
                        )
                    }
                }
            })
        }
        function couponRemove() {
            $.ajax({
                type: 'GET',
                url: "{{ route('site.cart.couponremove') }}",
                dataType: 'json',
                success: function (data) {
                    couponCalculation();
                    $('#couponField').show();
                    $('#coupon_name').val('');
                    Swal.fire({
                        icon: 'success',
                        title: 'تم حذف الكوبون',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            })
        }
        function Checkout(){
            @guest()
            Swal.fire({
                icon: 'error',
                title: '{{trans('site/product.guest')}}',
                showConfirmButton: false,
                timer: 1500
            });
            @endguest
            @auth
            $.ajax({
                type:'GET',
                url: "{{ route('site.checkout') }}",
                success:function(data){
                }


            });
            @endauth

        }


        couponCalculation();

    </script>


@endsection


