@extends('site.parent')

@section('titel',trans('site/home.Home'))

@section('style')
    <style>
        .mt-45{
            margin-top: 60px;
        }
    </style>

@endsection

@section('contact')
        <!-- banner -->
        <div class="owl-carousel owl-theme owl-1  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
            @foreach($sliders as $slider)
            <div class="banner">
                <img src="{{url(Storage::url($slider->img->url_image ?? ''))}}" class="img-fluid">
            </div>
            @endforeach
        </div>
        <!-- ./banner -->

        <!-- about us -->
        <div class="about-us bg ">
            <div class="container">
                <h2 class="main-title wow fadeInUp " data-wow-duration="1s" data-wow-delay="0.1s">
                    {{trans('site/home.About')}}
                </h2>
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="title about-title wow fadeInUp " data-wow-duration="1s" data-wow-delay="0.2s">
                            {{$about->name ?? ''}}
                        </h1>
                        <div class="paragraph wow fadeInUp mt-45" data-wow-duration="1s" data-wow-delay="0.3s">
                            <p>{{ \Illuminate\Support\Str::limit($about->details ?? '', 200, $end='...') }}</p>
                        </div>
                        <div class="col-lg-3 mb-lg-0 mb-4">
                            <a href="{{route('about')}}" target="_blank" rel="noopener noreferrer"
                                class="btn btn-primary custom-botton wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay="0.4s">
                                {{trans('site/home.read_more')}}
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <span class="shape-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                                <circle id="Oval_Copy_2" data-name="Oval Copy 2" cx="13" cy="13" r="13" fill="#fff6dd" />
                            </svg>
                        </span>
                        <a href="{{url(Storage::url($about->imgVid->url_video ?? ''))}}" data-fancybox>
                            <div class="video">
                                <figure class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                    <img src="{{url(Storage::url($about->imgVid->url_image ?? ''))}}" class="img-fluid">
                                    <div class="play">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </div>
                                </figure>
                            </div>
                        </a>
                        <span class="shape-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30.43" height="30.765"
                                viewBox="0 0 30.43 30.765">
                                <path id="Path_7023" data-name="Path 7023"
                                    d="M497.966,159.125a18.937,18.937,0,0,0,4.9-.68,20.217,20.217,0,0,0,11.333-7.8,12.253,12.253,0,0,0,2.095-6.747,15.232,15.232,0,0,0-4.457-11.123,15.863,15.863,0,0,0-11.855-4.409c-4.568.1-8.9,3.044-11.581,7.879-3.22,5.8-3.383,12.78-.418,17.781C489.944,157.337,493.574,159.125,497.966,159.125Zm2.456-24.361a9.552,9.552,0,0,1,6.914,2.567,8.9,8.9,0,0,1,2.557,6.5h0c-.04,3.967-4.508,7.3-8.69,8.425-2.713.732-6.368.773-7.713-1.5-1.8-3.032-1.6-7.617.51-11.408,1.565-2.822,3.853-4.535,6.121-4.585Z"
                                    transform="translate(-485.867 -128.359)" fill="#ffb1b5" />
                            </svg>
                        </span>

                    </div>
                </div>
            </div>
        </div>
        <!-- ./about us -->

        <!-- our-brands -->
        <div class="our-brands">
            <div class="container">
                <h2 class="main-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    {{trans('site/home.Brands')}}
                </h2>
                <div class="row">
                    @foreach($brands as $brand)
                    <div class="col-lg-4 col-md-6 mx-auto mt-lg-0 mt-4 wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay="0.2s">
                        <img src="{{url(Storage::url($brand->img->url_image ?? ''))}}" alt="" srcset="" loading="lazy" class="border-raduis img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- ./our-brands -->

        <!-- manger-word -->
        <div class="manger-word mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <figure class="card-photo wow zoomIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <img src="{{url(Storage::url($about->img->url_image ?? ''))}}" class="img-fluid" alt="" srcset="" loading="lazy">
                        </figure>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="mt-5">
                            <h2 class="title  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"> {{trans('site/home.Company_manager_word')}}
                            </h2>
                            <p class="paragraph  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                {{$about->details_manager}}
                            </p>
                            <div class="info-manger  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                <p class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">{{$about->name_manager}}
                                </p>
                                <span class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"> {{trans('site/home.Company_manager')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./manger-word -->

        <!-- products-section -->
        <div class="products-section">
            <div class="container">
                <h2 class="main-title  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">منتجاتنا</h2>
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-lg-3 col-md-6">
                        <a href="http://">
                            <div class="card product-card  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                <figure class="card-img-top">
                                    <img src="{{url(Storage::url($product->image->url_image ?? ''))}}" alt="Card image cap">
                                    <span>{{$product->size->name}}</span>
                                </figure>
                                <div class="card-body">
                                    <h5 class="card-title">{{$product->brand->name}}</h5>
                                    <p class="card-text"> {{$product->name}}
                                        {{trans('site/home.taste')}} {{$product->taste->name}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-lg-3 mx-auto">
                        <a href="{{route('product')}}" target="_blank" rel="noopener noreferrer"
                           class="btn btn-primary custom-botton wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            {{trans('site/home.View_all_products')}}
                        </a>
                    </div>
                </div>


            </div>
        </div>
        <!-- ./products-section -->
        <!-- people rate -->
        <div class="people-rate bg">
            <div class="container">
                <h2 class="main-title">
                    {{trans('site/home.said_about_us')}}
                </h2>
                <div class="owl-carousel owl-theme owl-2  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    @foreach($theysaid as $said)
                    <div class="card people_rate_card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="card-img-top">
                            <div class="user-info">
                                <figure>
                                    <img src="{{url(Storage::url($said->image->url_image ?? ''))}}" alt="Card image cap">
                                </figure>
                                <div>
                                    <p>{{$said->name}}</p>
                                    <span>{{$said->category}}</span>
                                </div>
                            </div>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                    <g id="Group_52364" data-name="Group 52364" transform="translate(-1291 -6325)">
                                        <circle id="Oval" cx="25" cy="25" r="25" transform="translate(1291 6325)"
                                            fill="#fbfbfb" />
                                        <path id="Shape"
                                            d="M18.8,18a5.657,5.657,0,0,1-4.031-1.649A6.363,6.363,0,0,1,13,11.725a11.036,11.036,0,0,1,.7-3.831A12.337,12.337,0,0,1,15.71,4.387,12.464,12.464,0,0,1,23,0l.984,2.126a6.87,6.87,0,0,0-2.939,2.435A7.429,7.429,0,0,0,19.6,7.872,5.213,5.213,0,0,1,24,13.021,4.73,4.73,0,0,1,22.381,16.7,5.509,5.509,0,0,1,18.8,18Zm-13,0A5.657,5.657,0,0,1,1.77,16.351,6.363,6.363,0,0,1,0,11.725,11.036,11.036,0,0,1,.7,7.894,12.337,12.337,0,0,1,2.71,4.387,12.464,12.464,0,0,1,10,0l.984,2.126A6.87,6.87,0,0,0,8.045,4.561,7.426,7.426,0,0,0,6.6,7.872,5.213,5.213,0,0,1,11,13.021,4.73,4.73,0,0,1,9.381,16.7,5.509,5.509,0,0,1,5.8,18Z"
                                            transform="translate(1304 6341)" fill="#8ec641" />
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="card-body">
                            <p class="card-text"> {{$said->details}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- ./people rate -->
        <!-- offers -->
        <div class="offers bg">
            <div class="container">
                <div class="offer-bg">
                    <h2 class="main-title">
                        {{trans('site/home.campaigns_and_offers')}}
                    </h2>

                    <div class="owl-carousel owl-theme owl-3  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        @foreach($offers as $offer)
                        <a href="{{route('offer-details',$offer->id)}}" target="_blank" rel="noopener noreferrer">
                            <div class="card-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.15s">
                                <figure>
                                    <img src="{{url(Storage::url($offer->img->url_image ?? ''))}}" alt="" srcset="" loading="lazy">
                                </figure>
                                <div class="body-card">
                                    <div class="calender">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15.6" height="17.2"
                                            viewBox="0 0 15.6 17.2">
                                            <g id="Calendar" transform="translate(0.6 0.6)">
                                                <path id="Line_200" d="M0,.473H14.259" transform="translate(0.074 5.451)"
                                                    fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.2" />
                                                <path id="Line_201" d="M.459.473H.466" transform="translate(10.295 8.575)"
                                                    fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.2" />
                                                <path id="Line_202" d="M.459.473H.466" transform="translate(6.745 8.575)"
                                                    fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.2" />
                                                <path id="Line_203" d="M.459.473H.466" transform="translate(3.188 8.575)"
                                                    fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.2" />
                                                <path id="Line_204" d="M.459.473H.466" transform="translate(10.295 11.684)"
                                                    fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.2" />
                                                <path id="Line_205" d="M.459.473H.466" transform="translate(6.745 11.684)"
                                                    fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.2" />
                                                <path id="Line_206" d="M.459.473H.466" transform="translate(3.188 11.684)"
                                                    fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.2" />
                                                <path id="Line_207" d="M.463,0V2.633" transform="translate(9.972 0)"
                                                    fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.2" />
                                                <path id="Line_208" d="M.463,0V2.633" transform="translate(3.509 0)"
                                                    fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-width="1.2" />
                                                <path id="Path"
                                                    d="M10.591,0H3.817C1.467,0,0,1.309,0,3.714v7.24a3.475,3.475,0,0,0,3.817,3.783h6.766c2.357,0,3.817-1.316,3.817-3.722v-7.3C14.407,1.309,12.947,0,10.591,0Z"
                                                    transform="translate(0 1.263)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                    stroke-width="1.2" />
                                            </g>
                                        </svg>


                                        <span>{{$offer->created_at}}</span>
                                    </div>
                                    <h2>{{$offer->name}}</h2>
                                    <p>{{ \Illuminate\Support\Str::limit($offer->details, 200, $end='...') }}</p>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
        <!-- ./offers -->
        <!-- Albums -->
        <div class="albums">
            <div class="container">
                <h2 class="main-title">
                    {{trans('site/home.Photo_album')}}
                </h2>

                <div class="row">
                    @foreach ($albums as $album )
{{--                        @dd($album->images->first())--}}
                        @if($item = $album->images->whereNotNull('url_images')->first())
                    <div class="col-lg-4 col-md-6">
                        <a href="{{route('albums',$album->id)}}">
                            <div class="home-album wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                                <img src="{{url(Storage::url($item->url_images))}}" alt="" class="img-fluid" srcset="" loading="lazy">
                            </div>
                        </a>
                    </div>
                        @endif

                    @endforeach

                </div>
            </div>
        </div>
        <!-- ./Albums -->
        <!-- partainers -->
        <div class="partainers">
            <div class="container">
                <h2 class="main-title">
                    {{trans('site/home.Our_partners_in_success')}}
                </h2>
                <div class="partainers__conatent">
                    <div class="owl-carousel owl-theme owl-partainers  wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay="0.1s">
                        @foreach($successpartners as $success)
                        <div class="partainers__conatent__img">
                            <img src="{{url(Storage::url($success->img->url_image ?? ''))}}" alt="" srcset="" loading="lazy">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- ./partainers -->
@endsection


@section('script')


@endsection


