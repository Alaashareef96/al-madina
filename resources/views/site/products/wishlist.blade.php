@extends('site.parent')

@section('titel','المفضلة')

@section('style')
    <style>
        .remove-wishlist{
            position: absolute;
            top: 15px;
            right: 30px;
            font-size: 23px;
            cursor: pointer;
            color:red;

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
                    <li class="breadcrumb-item active" aria-current="page">{{trans('site/product.favourite')}}</li>
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
                                <span class="number-of-search-result" id="search_number">{{count($products)}}</span>
                                <span> منتجات في المفضلة </span>
                                <span id="search-names"> </span>
                            </div>
                            <div>
                                <span class="word-search">{{trans('site/product.show_by')}}</span>
                                <select name="search_by" id="sort-select">
                                    <option value="desc" {{ request()->sort == 'desc' ? 'selected':'' }}>الأحدث</option>
                                    <option value="asc" {{ request()->sort == 'asc' ? 'selected':'' }}>الأقدم</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="words-filter" id="filter-tabs">



                        </div>

                    </div>

{{--                    <div class="row" id="updateDiv">--}}

{{--                            @include('site.products.product_filter')--}}
{{--                        @foreach($products as $product)--}}
{{--                            <div class="col-lg-4 col-md-6">--}}
{{--                                <div class="position-relative">--}}
{{--                                    <a href="#" class="product-link" data-id="{{ $product->id }}">--}}

{{--                                </div>--}}

{{--                                <div class="card product-card  wow fadeInUp" data-target=".product_details" data-wow-duration="1s" data-wow-delay="0.2s">--}}
{{--                                    <figure class="card-img-top">--}}
{{--                                        <img src="{{url(Storage::url($product->image->url_image ?? ''))}}" alt="Card image cap">--}}
{{--                                        <span >{{$product->size->name}}</span>--}}


{{--                                    </figure>--}}
{{--                                    <div class="card-body">--}}
{{--                                        <h5 class="card-title">{{$product->brand->name}}</h5>--}}
{{--                                        <p class="card-text"> {{$product->name}}--}}
{{--                                            {{trans('site/product.taste')}} {{$product->taste->name}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                </a>--}}
{{--                                <div class="favourite">--}}

{{--                                    <a class="remove-wishlist" data-id="{{$product->id}}">--}}
{{--                                        <i class="fa fa-heart" aria-hidden="true"></i>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="catr-add">--}}
{{--                                    <a class="catrs" data-id="{{$product->id}}">--}}
{{--                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>--}}
{{--                                    </a>--}}


{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}

{{--                    </div>--}}

                    <!--begin::Table-->
                    <div class="table">
                        <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
                            <thead>
                            <tr class="text-uppercase">
                                <th style="min-width: 50px">#</th>
                                <th style="min-width: 100px">الصورة</th>
                                <th style="min-width: 150px">الاسم</th>
                                <th style="min-width: 120px">النوع</th>
                                <th style="min-width: 120px">الطعم</th>
                                <th style="min-width: 150px">الحجم</th>
                                <th style="min-width: 110px">السعر</th>
                                <th class="pr-0 text-right" style="min-width: 90px">العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0; ?>
                            @foreach ($products as $product)
                                <tr>
                                    <?php $i++; ?>
                                    <td>{{ $i }}</td>
                                    <td>
                                        <img class="img-circle img-bordered-sm" width="65" height="65"
                                             src="{{url(Storage::url($product->image->url_image ?? ''))}}"  alt="User Image">
                                    </td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->brand->name}}</td>
                                    <td>{{$product->taste->name}}</td>
                                    <td>{{$product->size->name}}</td>
                                    <td>{{$product->price}}</td>
                                        <td class="pr-0 text-right">
                                            <a class="catrs-wish" data-id="{{$product->id}}">
                                                <i class="fa fa-cart-plus fa-2x" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    <td class="pr-0 text-right">
                                        <a href="#" onclick="confirmDestroy('{{$product->id}}',this)"
                                        ><i class="fa fa-trash fa-2x" aria-hidden="true"></i>

                                        </a>
                                    </td>

                            @endforeach
                        </table>
                    </div>
                    <!--end::Table-->
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
    <script>
        $(document).on('click','.product-link',function (){
            var id = $(this).data('id');
            $.ajax({
                url: "{{ route('show-product') }}",
                type: "get",
                data: {
                    id : id
                },
                success: function (data) {
                    $('.modal-container').html(data.view);
                    $('#product_details').modal('show');
                },

            });
        })
    </script>

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
            @guest()
            Swal.fire({
                icon: 'error',
                title: '{{trans('site/product.guest')}}',
            })
            @endguest
            axios.delete('/al-madina/favourite-delete/'+id)

                .then(function (response) {
                    // handle success
                    console.log(response);
                    reference.closest('tr').remove();
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


        {{--$(document).on('click', '.remove-wishlist', function (e) {--}}
        {{--    e.preventDefault();--}}
        {{--    $.ajaxSetup({--}}
        {{--        headers: {--}}
        {{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
        {{--        }--}}
        {{--    });--}}
        {{--    @guest()--}}
        {{--    Swal.fire({--}}
        {{--        icon: 'error',--}}
        {{--        title: '{{trans('site/product.guest')}}',--}}
        {{--    })--}}
        {{--    @endguest--}}
        {{--    var id = $(this).data("id");--}}
        {{--    $.ajax({--}}

        {{--        url: "{{route('favourite-delete')}}",--}}
        {{--        type: 'delete',--}}
        {{--        data: {--}}
        {{--            'id': id,--}}
        {{--        },--}}
        {{--        success: function (data) {--}}
        {{--            if(data.wished )--}}
        {{--                Swal.fire({--}}
        {{--                    icon: 'success',--}}
        {{--                    title: '{{trans('site/product.remove_wishlist')}}',--}}
        {{--                })--}}
        {{--            location.reload();--}}

        {{--        }--}}
        {{--    });--}}
        {{--});--}}

        $(document).on('click', '.catrs-wish', function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            @guest()
            Swal.fire({
                icon: 'error',
                title: '{{trans('site/product.guest')}}',
                showConfirmButton: false,
                timer: 1500
            })
            @endguest
            var id = $(this).data("id");
            $.ajax({

                url: "{{route('site.cart.add')}}",
                type: 'post',
                data: {
                    'id': id,
                },
                success: function (data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'تم الاضافة بسلة المشتريات',
                        showConfirmButton: false,
                        timer: 1500
                    })
                },

            })
        });

        $(document).on('change','#sort-select',function (){

            var sort = $(this).val();
            window.location.href = '{{ route('favourite-show') }}'+'?sort=' + sort
        });
    </script>

@endsection


