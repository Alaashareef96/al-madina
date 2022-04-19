@extends('site.parent')

@section('titel',trans('site/product.products'))

@section('style')
    <style>
        .wishlist{
            position: absolute;
            top: 15px;
            right: 30px;
            font-size: 23px;
            cursor: pointer;
            /*color: red;*/

        }
        .wishlist:hover{
           color:red;
            width: 100%;
            height: 100%;
            z-index: 13;
        }
        .wishlist.active{
            color:red;
        }

        .catrs{
            position: absolute;
            top: 57px;
            right: 32px;
            font-size: 25px;
            cursor: pointer;
            /*color: red;*/

        }
        .catrs:hover{
            color:red;
            width: 100%;
            height: 100%;
            z-index: 13;
        }


    </style>

@endsection

@section('contact')

    <div class="products bubbles">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol  class="breadcrumb official ">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">{{trans('site/product.Home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{trans('site/product.products')}}</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-lg-3">
                    <div class="filters">
                        <div>
                            <div class="top">
                                <p>{{__('site/product.Brand')}}</p>
                                <span class="filter hide">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                        <g id="Group_52884" data-name="Group 52884" transform="translate(-29 -1130.5)">
                                            <path id="Path_30683" data-name="Path 30683"
                                                  d="M10,0A10,10,0,1,1,0,10,10,10,0,0,1,10,0Z"
                                                  transform="translate(29 1130.5)" fill="#8ec641" />
                                            <path id="Path"
                                                  d="M9.286,1.5H.714A.734.734,0,0,1,0,.75.734.734,0,0,1,.714,0H9.286A.734.734,0,0,1,10,.75.734.734,0,0,1,9.286,1.5Z"
                                                  transform="translate(34 1140)" fill="#fff" />
                                        </g>
                                    </svg>
                                </span>
                                <span class="filter show">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                        <g id="Group_52877" data-name="Group 52877" transform="translate(-29 -1130.5)">
                                            <path id="Path_30683" data-name="Path 30683"
                                                  d="M10,0A10,10,0,1,1,0,10,10,10,0,0,1,10,0Z"
                                                  transform="translate(29 1130.5)" fill="#8ec641" />
                                            <path id="Path"
                                                  d="M9.286,5.714H5.714V9.286a.714.714,0,1,1-1.429,0V5.714H.714a.714.714,0,1,1,0-1.429H4.286V.714a.714.714,0,1,1,1.429,0V4.286H9.286a.714.714,0,1,1,0,1.429Z"
                                                  transform="translate(34 1135.856)" fill="#fff" />
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <div class="bottom">
                                @foreach($brand as $brandName)
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="filter" class="filter_input" data-parent="brand" data-name="{{ $brandName->name }}" id="brandID" data-id="{{ $brandName->id }}">
                                    <span class="checkmark"></span>
                                    <span class='label'>{{$brandName->name}}</span>
                                </label>
                                @endforeach

                            </div>
                        </div>
                        <div>
                            <div class="top">
                                <p>{{__('site/product.Size')}}</p>
                                <span class="filter hide">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                        <g id="Group_52884" data-name="Group 52884" transform="translate(-29 -1130.5)">
                                            <path id="Path_30683" data-name="Path 30683"
                                                  d="M10,0A10,10,0,1,1,0,10,10,10,0,0,1,10,0Z"
                                                  transform="translate(29 1130.5)" fill="#8ec641" />
                                            <path id="Path"
                                                  d="M9.286,1.5H.714A.734.734,0,0,1,0,.75.734.734,0,0,1,.714,0H9.286A.734.734,0,0,1,10,.75.734.734,0,0,1,9.286,1.5Z"
                                                  transform="translate(34 1140)" fill="#fff" />
                                        </g>
                                    </svg>
                                </span>
                                <span class="filter show">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                        <g id="Group_52877" data-name="Group 52877" transform="translate(-29 -1130.5)">
                                            <path id="Path_30683" data-name="Path 30683"
                                                  d="M10,0A10,10,0,1,1,0,10,10,10,0,0,1,10,0Z"
                                                  transform="translate(29 1130.5)" fill="#8ec641" />
                                            <path id="Path"
                                                  d="M9.286,5.714H5.714V9.286a.714.714,0,1,1-1.429,0V5.714H.714a.714.714,0,1,1,0-1.429H4.286V.714a.714.714,0,1,1,1.429,0V4.286H9.286a.714.714,0,1,1,0,1.429Z"
                                                  transform="translate(34 1135.856)" fill="#fff" />
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <div class="bottom">
                                @foreach($size as $sizeName)
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="filter" class="filter_input" data-parent="size" data-name="{{ $sizeName->name }}" id="sizeID" data-id="{{ $sizeName->id }}">
                                    <span class="checkmark"></span>
                                    <span class='label'> {{$sizeName->name}}</span>
                                </label>
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <div class="top">
                                <p>{{__('site/product.Taste')}}</p>
                                <span class="filter hide">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                        <g id="Group_52884" data-name="Group 52884" transform="translate(-29 -1130.5)">
                                            <path id="Path_30683" data-name="Path 30683"
                                                  d="M10,0A10,10,0,1,1,0,10,10,10,0,0,1,10,0Z"
                                                  transform="translate(29 1130.5)" fill="#8ec641" />
                                            <path id="Path"
                                                  d="M9.286,1.5H.714A.734.734,0,0,1,0,.75.734.734,0,0,1,.714,0H9.286A.734.734,0,0,1,10,.75.734.734,0,0,1,9.286,1.5Z"
                                                  transform="translate(34 1140)" fill="#fff" />
                                        </g>
                                    </svg>
                                </span>
                                <span class="filter show">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                        <g id="Group_52877" data-name="Group 52877" transform="translate(-29 -1130.5)">
                                            <path id="Path_30683" data-name="Path 30683"
                                                  d="M10,0A10,10,0,1,1,0,10,10,10,0,0,1,10,0Z"
                                                  transform="translate(29 1130.5)" fill="#8ec641" />
                                            <path id="Path"
                                                  d="M9.286,5.714H5.714V9.286a.714.714,0,1,1-1.429,0V5.714H.714a.714.714,0,1,1,0-1.429H4.286V.714a.714.714,0,1,1,1.429,0V4.286H9.286a.714.714,0,1,1,0,1.429Z"
                                                  transform="translate(34 1135.856)" fill="#fff" />
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <div class="bottom">
                                @foreach($taste as $tasteName)
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="filter" class="filter_input"  data-parent="taste" data-name="{{ $tasteName->name }}" id="tasteID" data-id="{{ $tasteName->id }}" >
                                    <span class="checkmark"></span>
                                    <span class='label'>{{ $tasteName->name }}</span>
                                </label>
                                @endforeach

                            </div>
                        </div>

                        <div>
                            <div class="top">
                                <p>المفضلة</p>
                                <span class="filter hide">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                        <g id="Group_52884" data-name="Group 52884" transform="translate(-29 -1130.5)">
                                            <path id="Path_30683" data-name="Path 30683"
                                                  d="M10,0A10,10,0,1,1,0,10,10,10,0,0,1,10,0Z"
                                                  transform="translate(29 1130.5)" fill="#8ec641" />
                                            <path id="Path"
                                                  d="M9.286,1.5H.714A.734.734,0,0,1,0,.75.734.734,0,0,1,.714,0H9.286A.734.734,0,0,1,10,.75.734.734,0,0,1,9.286,1.5Z"
                                                  transform="translate(34 1140)" fill="#fff" />
                                        </g>
                                    </svg>
                                </span>
                                <span class="filter show">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                        <g id="Group_52877" data-name="Group 52877" transform="translate(-29 -1130.5)">
                                            <path id="Path_30683" data-name="Path 30683"
                                                  d="M10,0A10,10,0,1,1,0,10,10,10,0,0,1,10,0Z"
                                                  transform="translate(29 1130.5)" fill="#8ec641" />
                                            <path id="Path"
                                                  d="M9.286,5.714H5.714V9.286a.714.714,0,1,1-1.429,0V5.714H.714a.714.714,0,1,1,0-1.429H4.286V.714a.714.714,0,1,1,1.429,0V4.286H9.286a.714.714,0,1,1,0,1.429Z"
                                                  transform="translate(34 1135.856)" fill="#fff" />
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <div class="bottom">
{{--                                @foreach($taste as $tasteName)--}}
                                    <label class="custom-checkbox">
                                        <a href="{{route('favourite-show')}}" name="filter" class="filter_input"  >
                                        <span class="checkmark"></span>
                                        <span class='label'>المفضلة</span>
                                        </a>
                                    </label>

                            </div>
                        </div>
                        <div>
                            <div class="top">
                                <p>سلة المشتريات</p>
                                <span class="filter hide">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                        <g id="Group_52884" data-name="Group 52884" transform="translate(-29 -1130.5)">
                                            <path id="Path_30683" data-name="Path 30683"
                                                  d="M10,0A10,10,0,1,1,0,10,10,10,0,0,1,10,0Z"
                                                  transform="translate(29 1130.5)" fill="#8ec641" />
                                            <path id="Path"
                                                  d="M9.286,1.5H.714A.734.734,0,0,1,0,.75.734.734,0,0,1,.714,0H9.286A.734.734,0,0,1,10,.75.734.734,0,0,1,9.286,1.5Z"
                                                  transform="translate(34 1140)" fill="#fff" />
                                        </g>
                                    </svg>
                                </span>
                                <span class="filter show">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                        <g id="Group_52877" data-name="Group 52877" transform="translate(-29 -1130.5)">
                                            <path id="Path_30683" data-name="Path 30683"
                                                  d="M10,0A10,10,0,1,1,0,10,10,10,0,0,1,10,0Z"
                                                  transform="translate(29 1130.5)" fill="#8ec641" />
                                            <path id="Path"
                                                  d="M9.286,5.714H5.714V9.286a.714.714,0,1,1-1.429,0V5.714H.714a.714.714,0,1,1,0-1.429H4.286V.714a.714.714,0,1,1,1.429,0V4.286H9.286a.714.714,0,1,1,0,1.429Z"
                                                  transform="translate(34 1135.856)" fill="#fff" />
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <div class="bottom">
                                {{--                                @foreach($taste as $tasteName)--}}
                                <label class="custom-checkbox">
                                    <a href="{{route('site.cart.index')}}" name="filter" class="filter_input"  >
                                        <span class="checkmark"></span>
                                        <span class='label'>سلة المشتريات</span>
                                    </a>
                                </label>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mt-lg-0 mt-3">
                    <div class="col-12" id="filter-bar" style="display: none">
                        <div class="nav-search">
                            <div>
                                <span class="number-of-search-result" id="search_number"></span>
                                <span> {{trans('site/product.Search_matching')}} </span>
                                <span id="search-names"> </span>
                            </div>
                            <div>
                                <span class="word-search">{{trans('site/product.show_by')}}</span>
                                <select name="search_by" id="sort-select">
                                    <option value="desc">{{trans('site/product.desc')}}</option>
                                    <option value="asc">{{trans('site/product.asc')}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="words-filter" id="filter-tabs">



                        </div>

                    </div>

                    <div class="row" id="updateDiv">

                            @include('site.products.product_filter')
{{--                        @foreach($products as $product)--}}
{{--                            <div class="col-lg-4 col-md-6">--}}
{{--                                <a href="#" class="product-link" data-id="{{ $product->id }}">--}}

{{--                                    <div class="card product-card  wow fadeInUp" data-target=".product_details" data-wow-duration="1s" data-wow-delay="0.2s">--}}
{{--                                        <figure class="card-img-top">--}}
{{--                                            <img src="{{url(Storage::url($product->image->url_image ?? ''))}}" alt="Card image cap">--}}
{{--                                            <span >{{$product->size->name}}</span>--}}
{{--                                        </figure>--}}
{{--                                        <div class="card-body">--}}
{{--                                            <h5 class="card-title">{{$product->brand->name}}</h5>--}}
{{--                                            <p class="card-text"> {{$product->name}}--}}
{{--                                                بطعم {{$product->taste->name}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}

                    </div>
                    <div class="row">
                        <div class="mx-auto mt-5" id="pagination-div">
                            <nav class="custom-pagination">
                                {{ $products->links() }}
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

{{--    <script>--}}
{{--        $(document).on('click','.data-to-filter',function(){--}}
{{--            var id= $(this).val();--}}
{{--            var brand = [];--}}
{{--            var size = [];--}}
{{--            var taste = [];--}}
{{--            $('#catFilters').find('#cat-box'+ id).remove();--}}
{{--            $('.data-to-filter').each(function(){--}}

{{--                if($(this).is(":checked")){--}}
{{--                    if ($(this).attr('id') == 'brandID'){--}}
{{--                        brand.push($(this).val());--}}
{{--                    }--}}
{{--                    else if($(this).attr('id') == 'sizeID'){--}}
{{--                        size.push($(this).val());--}}
{{--                    }--}}
{{--                    else if($(this).attr('id') == 'tasteID'){--}}
{{--                        taste.push($(this).val());--}}

{{--                    }--}}
{{--                    let html = `<div class="d-flex justify-content-center align-items-center border p-2 mr-2" id="cat-box`+id+`" >--}}
{{--                                <span class="pr-3">`+$(this).data('name')+`</span>--}}
{{--                                <i class="fa fa-times-circle" aria-hidden="true"></i>--}}
{{--                            </div>`;--}}
{{--                    $('#catFilters').append(html);--}}

{{--                    // $('#search_name').append($(this).data('name'));--}}
{{--                }--}}

{{--            });--}}

{{--            $.ajax({--}}
{{--                type: 'get',--}}
{{--                // dataType: 'html',--}}
{{--                url: "{{ route('filter-product') }}",--}}
{{--                data: {--}}
{{--                    'brand': brand,--}}
{{--                    'size': size,--}}
{{--                    'taste': taste,--}}
{{--                },--}}
{{--                success: function (data) {--}}
{{--                    // console.log(response);--}}
{{--                    $('#updateDiv').html(data.view);--}}
{{--                    $('#search_number').html(data.products_count);--}}
{{--                    $('#search_div').show();--}}

{{--                }--}}
{{--            });--}}

{{--        });--}}
{{--    </script>--}}

    <script>
        $(document).on('change','.filter_input',function (){
            var id = $(this).data("id");
            var parent = $(this).data("parent");


            if ($(this).val() == 0){
                $(this).val(1);
                var name = $(this).data('name');
                var input_id = $(this).data('id');
                $('#search-names').append('<span class="search-name" data-id="'+id+'"> , '+ name+'</span>');


                var tab = '<div class="d-flex justify-content-center align-items-center border p-2 mr-2">'+
                    '<span class="pr-3"> '+name+'</span>'+
                    '<a class="remove-tab" data-id="'+input_id+'"><i class="fa fa-times-circle" aria-hidden="true"></i></a>'+
                    '</div>';
                $('#filter-tabs').append(tab);
                $('#filter-inputs').append('<input type="hidden" data-id="'+id+'" data-parent="'+parent+'" name="ids[]" value="'+id+'" class="input-id">')
            }

            else {
                $(this).val(0);
                $('.bottom').find("[data-id='" + id + "']").prop("checked",false);
                $('#search-names').find("[data-id='" + id + "']").remove();
                $('#filter-inputs').find("[data-id='" + id + "']").remove();
                $('#filter-tabs').find("[data-id='" + id + "']").parent().remove();

            }

            // var inputt = $(this).val();
            sorting();
        });

        $(document).on('click','.remove-tab',function (){
            var id = $(this).data('id');
            $('.bottom').find("[data-id='" + id + "']").prop("checked",false);
            $('#search-names').find("[data-id='" + id + "']").remove();
            $('#filter-inputs').find("[data-id='" + id + "']").remove();
            $(this).parent().remove();
            sorting();
        });

        function sorting(){
            var brand = [];
            var size = [];
            var taste = [];
            var sort = $('#sort-select').val();

            $('.input-id').each(function(i, obj) {
                if($(this).data('parent') == 'brand'){
                    brand.push($(this).val());
                }
                else if($(this).data('parent') == 'size'){
                    size.push($(this).val());
                }
                else if($(this).data('parent') == 'taste') {
                    taste.push($(this).val());
                }
            });

            $.ajax({
                url: "{{ route('filter-product') }}",
                type: "get",
                data: {
                    brand: brand,
                    size: size,
                    taste: taste,
                    sort: sort

                },
                success: function (data) {
                    $('#filter-bar').show();
                    $('#pagination-div').hide();
                    $('#search_number').html(data.products_count);
                    $('#updateDiv').html(data.view);
                    $('#sort-select').val(data.order);
                },

            });
        }

        $(document).on('change','#sort-select',function (){
            sorting();
        })
        $(document).on('click','.wishlist',function (){
            $(this).toggleClass('active');
        });

        $(document).on('click', '.wishlist', function (e) {
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
            })
            @endguest
            @if(auth('web')->user()->email_verified_at == null)
            Swal.fire({
                icon: 'info',
                title: 'يجب تفعيل الايميل الخاص بك',
                showConfirmButton: false,
                timer: 1500
            })
            @endif
            var id = $(this).data("id");
            $.ajax({

                url: "{{route('favourite')}}",
                type: 'post',
                data: {
                    'id': id,
                },
                success: function (data) {
                    if(data.wished )
                        Swal.fire({
                            icon: 'success',
                            title: '{{trans('site/product.add_wishlist')}}',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    else
                        Swal.fire({
                            icon: 'info',
                            title: '{{trans('site/product.exists_wishlist')}}',
                            showConfirmButton: false,
                            timer: 1500
                        })

                },

            })
            {{--    .fail(function( jqXHR, textStatus, errorThrown ) {--}}
            {{--    if (jqXHR.responseJSON.type == 'emailNotVerified'){--}}
            {{--        location.href="{{url('/email/verify')}}"--}}
            {{--    }--}}
            {{--});--}}


        });

        $(document).on('click', '.catrs', function (e) {
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
            @if(auth('web')->user()->email_verified_at == null)
            Swal.fire({
                icon: 'info',
                title: 'يجب تفعيل الايميل الخاص بك',
                showConfirmButton: false,
                timer: 1500
            })
            @endif
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

    </script>

@endsection


