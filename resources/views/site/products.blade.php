@extends('site.parent')

@section('titel','products')

@section('styl')

@endsection

@section('contact')

    <div class="products bubbles">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol  class="breadcrumb official ">
                    <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">المنتجات</li>
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
                                    <input type="checkbox" name="filter" >
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
                                    <input type="checkbox" name="filter">
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
                                    <input type="checkbox" name="filter">
                                    <span class="checkmark"></span>
                                    <span class='label'>{{ $tasteName->name }}</span>
                                </label>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mt-lg-0 mt-3">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-lg-4 col-md-6">
                            <a href="#" class="product-link" data-id="{{ $product->id }}">

                                <div class="card product-card  wow fadeInUp" data-target=".product_details" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <figure class="card-img-top">
                                        <img src="{{url(Storage::url($product->image->url_image ?? ''))}}" alt="Card image cap">
                                        <span >{{$product->size->name}}</span>
                                    </figure>
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product->brand->name}}</h5>
                                        <p class="card-text"> {{$product->name}}
                                            بطعم {{$product->taste->name}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach

                        <div class="mx-auto mt-5">
                            <nav class="custom-pagination">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
{{--        $(document).on('click','.product-link',function (){--}}
{{--            var id = $(this).data('id');--}}

{{--            axios.get('/al-madina/show-product',{--}}
{{--                id:id--}}

{{--            }).then(function (response) {--}}
{{--                // handle success--}}
{{--                console.log(response);--}}
{{--                $('.modal-container').html(response.view);--}}
{{--                $('#product_details').modal('show');--}}
{{--            }).catch(function (error) {--}}
{{--                // handle error--}}
{{--                console.log(error);--}}

{{--            });--}}

{{--        })--}}
{{--    </script>--}}


@endsection


