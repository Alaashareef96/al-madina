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
                            <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
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
                                    <tr>
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
                                                <button type="submit" class="btn btn-success btn-sm">+</button>
                                                <input type="text" value="{{$product->qty}}" min="1" max="100" disabled="" style="width:25px;" >
                                                <button type="submit" class="btn btn-danger btn-sm">-</button>
                                            </td>

                                            <td>{{$product->subtotal}}</td>
                                        <td class="pr-0 text-right">
                                            <a href="#" onclick="confirmDestroy('{{$product->rowId}}',this)">
                                            <i class="fa fa-trash fa-2x" aria-hidden="true"></i>

                                            </a>
                                        </td>
                                @endforeach
                            </table>
                        </div>
                        <!--end::Table-->

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
            axios.delete('/al-madina/cart-remove/'+id)
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

    </script>


@endsection


