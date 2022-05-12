<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('titel')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/animate.compat.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
    @if (App::getLocale() == 'en')
    <link rel="stylesheet" href="{{asset('site/css/style-en.css')}}">
    @endif
    <link rel="stylesheet" href="{{asset('site/css/custom.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.8.1/lottie_svg.min.js" integrity="sha512-jk2H6cbspEVLyLHIJkHcwiHqh7sQuyrBJvHKokFyKebzaRZiA7RmcbAo7KvM3GqFaLJJGDFC/gBMYzbeeS7KUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://js.stripe.com/v3/"></script>



{{--    <link rel="stylesheet" href="{{asset('cms/assets/plugins/toastr/toastr.min.css')}}" />--}}
{{--    <link rel="stylesheet" href="{{asset('cms/plugins/toastr/toastr.min.css')}}">--}}

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    <style>
        #loading svg path{
            fill: #FFF;
            stroke: #FFF;
            /* fill: var(--green);
            stroke: var(--green); */
        }
        .alert-danger{
            top: 16px;
        }
        .badge-number{
            position: absolute;
            top: -16px;
            left: 1px;
            width: max-content;
            padding: 4px 6px 2px;
            z-index: -1;
            border-radius: 50%;
            background: #aad471;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .catr-show{
            position: relative;
        }
    </style>

    @yield('style')
</head>

<body>

{{--<div id="loadOverlay" style="background-color:rgb(31 94 157 / 90%);position: fixed;top: 0px;left:0px;width: 100%;height: 100%;z-index: 200000;    display: flex;--}}
{{--    align-items: center;--}}
{{--    justify-content: center;--}}
{{--    flex-direction: column;">--}}
{{--    <div id="loading" width="200" height="200"></div>--}}
{{--</div>--}}
<script>
    // document.getElementsByTagName('html')[0].style.overflow='hidden';
    // document.getElementsByTagName('body')[0].style.overflow='hidden';
    // var animation = bodymovin.loadAnimation({
    //     container: document.getElementById('loading'), // Required
    //     path: "images/data.json", // Required
    //     renderer: 'svg', // Required
    //     loop: true, // Optional
    //     autoplay: true, // Optional
    //     name: "Hello World", // Name for future reference. Optional.
    // });
</script>
<!-- header -->
<header class="main-header">
    <div class="top-header">
        <div class="container">
            <div class="top">
                <div class="language">
                        @if(auth('web')->user()->id ?? '' != null)
                            <a href="{{route('auth.logout.user')}}" type="button" class="btn btn-primary">LogoOut</a>
                        @else
                            <a href="{{route('auth.login.view.user')}}" type="button" class="btn btn-primary">Login&SignUp</a>
                        @endif

                    <a href="{{route('dashboard.change-language-user','ar')}}" class=@if (App::getLocale() == 'ar') "active" @endif >العربية</a>
                    <a href="{{route('dashboard.change-language-user','en')}}"class=@if (App::getLocale() == 'en') "active" @endif >English</a>
                </div>
                <div class="d-flex">

                    <div class="d-flex ">
                        <div class="wishlist-show mx-3">
                            <a  href="{{route('favourite-show')}}" class="wishlist-main" >
                                <i class="fa fa-heart fa-2x" aria-hidden="true"></i>
                            </a>
                        </div>
                        @yield('catr')
                        <div class="catr-show">
                            <a  href="{{route('site.cart.index')}}" class="catrs-main">
                                <i class="fa fa-cart-plus fa-2x" aria-hidden="true"></i>
                            </a>
{{--                            {{Session::get('cartQty')}}--}}
                            <span class="badge-number">{{Gloudemans\Shoppingcart\Facades\Cart::count()}}</span>
                        </div>
                    </div>
                    <div class="socail-media ml-3">

                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="16.277" height="16.277" viewBox="0 0 16.277 16.277">
                                    <defs>
                                        <linearGradient id="linear-gradient" x1="0.084" y1="0.916" x2="0.916" y2="0.084"
                                                        gradientUnits="objectBoundingBox">
                                            <stop offset="0" stop-color="#ffd600" />
                                            <stop offset="0.5" stop-color="#ff0100" />
                                            <stop offset="1" stop-color="#d800b9" />
                                        </linearGradient>
                                        <linearGradient id="linear-gradient-2" x1="0.146" y1="0.854" x2="0.854"
                                                        y2="0.146" gradientUnits="objectBoundingBox">
                                            <stop offset="0" stop-color="#ff6400" />
                                            <stop offset="0.5" stop-color="#ff0100" />
                                            <stop offset="1" stop-color="#fd0056" />
                                        </linearGradient>
                                        <linearGradient id="linear-gradient-3" x1="0.146" y1="0.854" x2="0.854"
                                                        y2="0.146" gradientUnits="objectBoundingBox">
                                            <stop offset="0" stop-color="#f30072" />
                                            <stop offset="1" stop-color="#e50097" />
                                        </linearGradient>
                                    </defs>
                                    <g id="instagram" transform="translate(0 0)">
                                        <path id="Path_54" data-name="Path 54"
                                              d="M16.228,4.783a5.975,5.975,0,0,0-.378-1.976,3.989,3.989,0,0,0-.939-1.442A3.99,3.99,0,0,0,13.469.427,5.974,5.974,0,0,0,11.494.049C10.626.009,10.349,0,8.138,0S5.651.009,4.783.049A5.976,5.976,0,0,0,2.807.427a3.989,3.989,0,0,0-1.442.939A3.989,3.989,0,0,0,.427,2.807,5.974,5.974,0,0,0,.049,4.783C.009,5.651,0,5.928,0,8.138s.009,2.488.049,3.356a5.973,5.973,0,0,0,.378,1.976,3.988,3.988,0,0,0,.939,1.441,3.988,3.988,0,0,0,1.442.939,5.972,5.972,0,0,0,1.976.378c.868.04,1.145.049,3.355.049s2.488-.009,3.355-.049a5.972,5.972,0,0,0,1.976-.378,4.161,4.161,0,0,0,2.38-2.38,5.973,5.973,0,0,0,.378-1.976c.039-.868.049-1.145.049-3.355s-.009-2.488-.049-3.355Zm-1.465,6.644a4.5,4.5,0,0,1-.28,1.511,2.7,2.7,0,0,1-1.545,1.545,4.5,4.5,0,0,1-1.511.28c-.858.039-1.115.047-3.289.047S5.708,14.8,4.85,14.763a4.5,4.5,0,0,1-1.511-.28,2.522,2.522,0,0,1-.936-.609,2.521,2.521,0,0,1-.609-.936,4.5,4.5,0,0,1-.28-1.511c-.039-.858-.047-1.116-.047-3.289s.008-2.431.047-3.289a4.506,4.506,0,0,1,.28-1.511A2.523,2.523,0,0,1,2.4,2.4a2.52,2.52,0,0,1,.936-.609,4.5,4.5,0,0,1,1.511-.28c.858-.039,1.116-.047,3.289-.047h0c2.173,0,2.431.008,3.289.048a4.5,4.5,0,0,1,1.511.28,2.523,2.523,0,0,1,.936.609,2.52,2.52,0,0,1,.609.936,4.5,4.5,0,0,1,.28,1.511c.039.858.047,1.116.047,3.289s-.008,2.431-.047,3.289Zm0,0"
                                              fill="url(#linear-gradient)" />
                                        <path id="Path_55" data-name="Path 55"
                                              d="M128.718,124.539a4.179,4.179,0,1,0,4.179,4.179A4.179,4.179,0,0,0,128.718,124.539Zm0,6.892a2.713,2.713,0,1,1,2.713-2.713A2.713,2.713,0,0,1,128.718,131.431Zm0,0"
                                              transform="translate(-120.58 -120.58)" fill="url(#linear-gradient-2)" />
                                        <path id="Path_56" data-name="Path 56"
                                              d="M363.883,89.6a.977.977,0,1,1-.977-.977A.977.977,0,0,1,363.883,89.6Zm0,0"
                                              transform="translate(-350.424 -85.808)" fill="url(#linear-gradient-3)" />
                                    </g>
                                </svg>
                            </span>
                        </a>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.922" height="11.973"
                                     viewBox="0 0 16.922 11.973">
                                    <path id="youtube"
                                          d="M.363,13.629A2.146,2.146,0,0,0,1.835,15.12c1.738.473,11.481.475,13.246,0a2.154,2.154,0,0,0,1.472-1.492,24.483,24.483,0,0,0-.021-8.416l.021.138a2.146,2.146,0,0,0-1.472-1.492c-1.715-.466-11.483-.483-13.246,0A2.155,2.155,0,0,0,.363,5.35a22.807,22.807,0,0,0,0,8.278Zm6.4-1.566V6.924L11.18,9.5Z"
                                          transform="translate(0.015 -3.503)" fill="#e53935" />
                                </svg>
                            </span>
                        </a>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.445" height="13.362"
                                     viewBox="0 0 16.445 13.362">
                                    <g id="Brand" transform="translate(-1.777 -3.319)">
                                        <path id="twitter"
                                              d="M16.445,49.582a7.029,7.029,0,0,1-1.943.532,3.352,3.352,0,0,0,1.483-1.863,6.738,6.738,0,0,1-2.138.816,3.371,3.371,0,0,0-5.832,2.305,3.472,3.472,0,0,0,.078.769,9.543,9.543,0,0,1-6.949-3.526,3.372,3.372,0,0,0,1.036,4.506,3.33,3.33,0,0,1-1.523-.415v.037a3.387,3.387,0,0,0,2.7,3.313,3.365,3.365,0,0,1-.884.111,2.981,2.981,0,0,1-.638-.058,3.4,3.4,0,0,0,3.15,2.349A6.774,6.774,0,0,1,.807,59.9,6.314,6.314,0,0,1,0,59.849a9.491,9.491,0,0,0,5.172,1.513,9.53,9.53,0,0,0,9.6-9.594c0-.149-.005-.293-.012-.436A6.726,6.726,0,0,0,16.445,49.582Z"
                                              transform="translate(1.777 -44.681)" fill="#03a9f4" />
                                    </g>
                                </svg>

                            </span>
                        </a>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <span>
                                <svg id="Iconspace_User_1_25px" data-name="Iconspace_User 1_25px"
                                     xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                    <path id="Path" d="M0,0H20V20H0Z" fill="none" />
                                    <path id="Path-2" data-name="Path" d="M0,0H20V20H0Z" fill="none" />
                                    <g id="facebook" transform="translate(1.6 1.6)">
                                        <path id="Path-3" data-name="Path"
                                              d="M15.876,0H.924A.924.924,0,0,0,0,.924V15.876a.924.924,0,0,0,.924.924H8.971V10.29H6.787V7.77H8.971V5.88A3.058,3.058,0,0,1,12.23,2.52a17.018,17.018,0,0,1,1.957.1V4.889H12.852c-1.058,0-1.26.5-1.26,1.235V7.745h2.52l-.328,2.52H11.592V16.8h4.284a.924.924,0,0,0,.924-.924V.924A.924.924,0,0,0,15.876,0Z"
                                              transform="translate(0)" fill="#4267b2" />
                                    </g>
                                </svg>
                            </span>
                        </a>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="container">

        <div class="header">
            <a href="{{route('home')}}" class="logo">
                <img src="{{asset('site/images/Logo.svg')}}" alt="" srcset="" loading="lazy">
            </a>

            <ul class="main-menu">
                <li>
                    <a href="{{route('home')}}"  class={{ (request()->segment(2) == 'home') ? 'active' : ''}} >{{trans('site/parent.Home')}}</a>
                </li>
                <li>
                    <a href="{{route('about')}}"  class={{ (request()->segment(2) == 'about') ? 'active' : ''}} >{{trans('site/parent.About')}}</a>
                </li>
                <li>
                    <a href="{{route('product')}}" class={{ (request()->segment(2) == 'product') ? 'active' : ''}}>{{trans('site/parent.products')}}</a>
                </li>
                <li>
                    <a href="{{route('offer')}}" class={{ (request()->segment(2) == 'offer') ? 'active' : ''}}>{{trans('site/parent.Campaigns_and_offers')}}</a>
                </li>
                <li>
                    <a href="{{route('news')}}" class={{ (request()->segment(2) == 'news') ? 'active' : ''}}>{{trans('site/parent.News')}}</a>
                </li>
                <li>
                    <a href="{{route('albums')}}" class={{ (request()->segment(2) == 'albums') ? 'active' : ''}}>{{trans('site/parent.Albums')}}</a>
                </li>
                <li>
                    <a href="{{route('contact')}}" class={{ (request()->segment(2) == 'contact') ? 'active' : ''}}>{{trans('site/parent.Contact_us')}}</a>
                </li>
            </ul>
            <div class="input-search d-lg-block d-none">
                <form id="create-form" type="get" action="{{route('search')}}">
                    <input type="search" name="search" id ='search_input' class="form-control" placeholder="{{trans('site/parent.Search')}}">
                    <button type="submit" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.85" height="15.853"
                             viewBox="0 0 15.85 15.853">
                            <path id="Path"
                                  d="M15.111,15.853a.707.707,0,0,1-.5-.224l-2.444-2.443a7.44,7.44,0,1,1,1.019-1.019l2.443,2.443a.678.678,0,0,1,.171.764A.77.77,0,0,1,15.111,15.853ZM7.437,1.44A6,6,0,0,0,3.194,11.683,6,6,0,1,0,11.68,3.2,5.961,5.961,0,0,0,7.437,1.44Z"
                                  fill="#fff" />
                        </svg>
                    </button>

                </form>
            </div>
            <button class="btn-nav" type="button">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
        </div>
    </div>

    <div class="aside-bar-menu">
        <div class="close-menu"><i class="fa fa-times"></i></div>
        <ul>
            <li>
                <a href="{{route('home')}}" >الرئيسية</a>
            </li>
            <li>
                <a href="{{route('about')}}">من نحن</a>
            </li>
            <li>
                <a href="{{route('product')}}">المنتجات</a>
            </li>
            <li>
                <a href="{{route('offer')}}">الحملات والعروض</a>
            </li>
            <li>
                <a href="{{route('news')}}">الأخبار</a>
            </li>
            <li>
                <a href="{{route('albums')}}">الألبومات</a>
            </li>
            <li>
                <a href="{{route('contact')}}">اتصل بنا</a>
            </li>
        </ul>
        <div class="input-search mt-3">
            <input type="text" class="form-control" placeholder="ابحث...">
            <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="15.85" height="15.853" viewBox="0 0 15.85 15.853">
                    <path id="Path"
                          d="M15.111,15.853a.707.707,0,0,1-.5-.224l-2.444-2.443a7.44,7.44,0,1,1,1.019-1.019l2.443,2.443a.678.678,0,0,1,.171.764A.77.77,0,0,1,15.111,15.853ZM7.437,1.44A6,6,0,0,0,3.194,11.683,6,6,0,1,0,11.68,3.2,5.961,5.961,0,0,0,7.437,1.44Z"
                          fill="#fff" />
                </svg>
            </button>
        </div>
    </div>
</header>
<!-- ./header -->
{{--@dd(Session::get('success'))--}}
@if(Session::has('successSweet'))
    <script type="text/javascript">
        new swal({
            icon: 'success',
            title: '{{Session::get('successSweet')}}',
            showConfirmButton: false,
            timer: 1500
        }).then((value) => {
            //location.reload();
        }).catch(swal.noop);
    </script>
@endif

@if(Session::has('error'))
    <script type="text/javascript">
        new swal({
            icon: 'error',
            title: '{{Session::get('error')}}',
            showConfirmButton: false,
            timer: 1500
        }).then((value) => {
            //location.reload();
        }).catch(swal.noop);
    </script>
@endif

@if(Session::has('info'))
    <script type="text/javascript">
        new swal({
            icon: 'info',
            title: '{{Session::get('info')}}',
            showConfirmButton: false,
            timer: 1500
        }).then((value) => {
            //location.reload();
        }).catch(swal.noop);
    </script>
@endif

@if ($message = session('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


{{--@if ($message = session('error'))--}}
{{--    <div class="alert alert-danger alert-block">--}}
{{--        <button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--        <strong>{{ $message }}</strong>--}}
{{--    </div>--}}
{{--@endif--}}


{{--@if ($message = session('warning'))--}}
{{--    <div class="alert alert-warning alert-block">--}}
{{--        <button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--        <strong>{{ $message }}</strong>--}}
{{--    </div>--}}
{{--@endif--}}


{{--@if ($message = session('info'))--}}
{{--    <div class="alert alert-info alert-block">--}}
{{--        <button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--        <strong>{{ $message }}</strong>--}}
{{--    </div>--}}
{{--@endif--}}

@auth
@if(auth()->user()->email_verified_at == null)
    <div class="alert alert-danger" role="alert">
        الرجاء تفعيل البريد الالكتروني <a href="" class="alert-link-verified">اضغط هنا</a>.
    </div>
@endif
@endauth

@yield('contact')

<!-- footer -->
<div class="main-footer">
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                        <a href="index.html">
                            <img src="images/Logo.svg" alt="" srcset="" loading="lazy">
                        </a>
                        <div class="socail-media mx-lg-5 mx-0 ml-lg-0 ml-5">

                            <a href="http://" target="_blank" rel="noopener noreferrer">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="16.277" height="16.277"
                                             viewBox="0 0 16.277 16.277">
                                            <defs>
                                                <linearGradient id="linear-gradient" x1="0.084" y1="0.916" x2="0.916"
                                                                y2="0.084" gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#ffd600" />
                                                    <stop offset="0.5" stop-color="#ff0100" />
                                                    <stop offset="1" stop-color="#d800b9" />
                                                </linearGradient>
                                                <linearGradient id="linear-gradient-2" x1="0.146" y1="0.854" x2="0.854"
                                                                y2="0.146" gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#ff6400" />
                                                    <stop offset="0.5" stop-color="#ff0100" />
                                                    <stop offset="1" stop-color="#fd0056" />
                                                </linearGradient>
                                                <linearGradient id="linear-gradient-3" x1="0.146" y1="0.854" x2="0.854"
                                                                y2="0.146" gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#f30072" />
                                                    <stop offset="1" stop-color="#e50097" />
                                                </linearGradient>
                                            </defs>
                                            <g id="instagram" transform="translate(0 0)">
                                                <path id="Path_54" data-name="Path 54"
                                                      d="M16.228,4.783a5.975,5.975,0,0,0-.378-1.976,3.989,3.989,0,0,0-.939-1.442A3.99,3.99,0,0,0,13.469.427,5.974,5.974,0,0,0,11.494.049C10.626.009,10.349,0,8.138,0S5.651.009,4.783.049A5.976,5.976,0,0,0,2.807.427a3.989,3.989,0,0,0-1.442.939A3.989,3.989,0,0,0,.427,2.807,5.974,5.974,0,0,0,.049,4.783C.009,5.651,0,5.928,0,8.138s.009,2.488.049,3.356a5.973,5.973,0,0,0,.378,1.976,3.988,3.988,0,0,0,.939,1.441,3.988,3.988,0,0,0,1.442.939,5.972,5.972,0,0,0,1.976.378c.868.04,1.145.049,3.355.049s2.488-.009,3.355-.049a5.972,5.972,0,0,0,1.976-.378,4.161,4.161,0,0,0,2.38-2.38,5.973,5.973,0,0,0,.378-1.976c.039-.868.049-1.145.049-3.355s-.009-2.488-.049-3.355Zm-1.465,6.644a4.5,4.5,0,0,1-.28,1.511,2.7,2.7,0,0,1-1.545,1.545,4.5,4.5,0,0,1-1.511.28c-.858.039-1.115.047-3.289.047S5.708,14.8,4.85,14.763a4.5,4.5,0,0,1-1.511-.28,2.522,2.522,0,0,1-.936-.609,2.521,2.521,0,0,1-.609-.936,4.5,4.5,0,0,1-.28-1.511c-.039-.858-.047-1.116-.047-3.289s.008-2.431.047-3.289a4.506,4.506,0,0,1,.28-1.511A2.523,2.523,0,0,1,2.4,2.4a2.52,2.52,0,0,1,.936-.609,4.5,4.5,0,0,1,1.511-.28c.858-.039,1.116-.047,3.289-.047h0c2.173,0,2.431.008,3.289.048a4.5,4.5,0,0,1,1.511.28,2.523,2.523,0,0,1,.936.609,2.52,2.52,0,0,1,.609.936,4.5,4.5,0,0,1,.28,1.511c.039.858.047,1.116.047,3.289s-.008,2.431-.047,3.289Zm0,0"
                                                      fill="url(#linear-gradient)" />
                                                <path id="Path_55" data-name="Path 55"
                                                      d="M128.718,124.539a4.179,4.179,0,1,0,4.179,4.179A4.179,4.179,0,0,0,128.718,124.539Zm0,6.892a2.713,2.713,0,1,1,2.713-2.713A2.713,2.713,0,0,1,128.718,131.431Zm0,0"
                                                      transform="translate(-120.58 -120.58)"
                                                      fill="url(#linear-gradient-2)" />
                                                <path id="Path_56" data-name="Path 56"
                                                      d="M363.883,89.6a.977.977,0,1,1-.977-.977A.977.977,0,0,1,363.883,89.6Zm0,0"
                                                      transform="translate(-350.424 -85.808)"
                                                      fill="url(#linear-gradient-3)" />
                                            </g>
                                        </svg>
                                    </span>
                            </a>
                            <a href="http://" target="_blank" rel="noopener noreferrer">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.922" height="11.973"
                                             viewBox="0 0 16.922 11.973">
                                            <path id="youtube"
                                                  d="M.363,13.629A2.146,2.146,0,0,0,1.835,15.12c1.738.473,11.481.475,13.246,0a2.154,2.154,0,0,0,1.472-1.492,24.483,24.483,0,0,0-.021-8.416l.021.138a2.146,2.146,0,0,0-1.472-1.492c-1.715-.466-11.483-.483-13.246,0A2.155,2.155,0,0,0,.363,5.35a22.807,22.807,0,0,0,0,8.278Zm6.4-1.566V6.924L11.18,9.5Z"
                                                  transform="translate(0.015 -3.503)" fill="#e53935" />
                                        </svg>
                                    </span>
                            </a>
                            <a href="http://" target="_blank" rel="noopener noreferrer">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.445" height="13.362"
                                             viewBox="0 0 16.445 13.362">
                                            <g id="Brand" transform="translate(-1.777 -3.319)">
                                                <path id="twitter"
                                                      d="M16.445,49.582a7.029,7.029,0,0,1-1.943.532,3.352,3.352,0,0,0,1.483-1.863,6.738,6.738,0,0,1-2.138.816,3.371,3.371,0,0,0-5.832,2.305,3.472,3.472,0,0,0,.078.769,9.543,9.543,0,0,1-6.949-3.526,3.372,3.372,0,0,0,1.036,4.506,3.33,3.33,0,0,1-1.523-.415v.037a3.387,3.387,0,0,0,2.7,3.313,3.365,3.365,0,0,1-.884.111,2.981,2.981,0,0,1-.638-.058,3.4,3.4,0,0,0,3.15,2.349A6.774,6.774,0,0,1,.807,59.9,6.314,6.314,0,0,1,0,59.849a9.491,9.491,0,0,0,5.172,1.513,9.53,9.53,0,0,0,9.6-9.594c0-.149-.005-.293-.012-.436A6.726,6.726,0,0,0,16.445,49.582Z"
                                                      transform="translate(1.777 -44.681)" fill="#03a9f4" />
                                            </g>
                                        </svg>

                                    </span>
                            </a>
                            <a href="http://" target="_blank" rel="noopener noreferrer">
                                    <span>
                                        <svg id="Iconspace_User_1_25px" data-name="Iconspace_User 1_25px"
                                             xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             viewBox="0 0 20 20">
                                            <path id="Path" d="M0,0H20V20H0Z" fill="none" />
                                            <path id="Path-2" data-name="Path" d="M0,0H20V20H0Z" fill="none" />
                                            <g id="facebook" transform="translate(1.6 1.6)">
                                                <path id="Path-3" data-name="Path"
                                                      d="M15.876,0H.924A.924.924,0,0,0,0,.924V15.876a.924.924,0,0,0,.924.924H8.971V10.29H6.787V7.77H8.971V5.88A3.058,3.058,0,0,1,12.23,2.52a17.018,17.018,0,0,1,1.957.1V4.889H12.852c-1.058,0-1.26.5-1.26,1.235V7.745h2.52l-.328,2.52H11.592V16.8h4.284a.924.924,0,0,0,.924-.924V.924A.924.924,0,0,0,15.876,0Z"
                                                      transform="translate(0)" fill="#4267b2" />
                                            </g>
                                        </svg>
                                    </span>
                            </a>

                        </div>
                    </div>
                    <p class="footer__description">
                        {{trans('site/parent.almdina')}}
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-6 order-lg-1 order-1">
                            <a href="{{route('home')}}" class="url-footer active">{{trans('site/parent.Home')}}</a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 order-lg-2 order-6">
                            <a href="{{route('offer')}}" class="url-footer">{{trans('site/parent.Campaigns_and_offers')}}</a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 order-lg-3 order-4">
                            <a href="{{route('show-jobs')}}" class="url-footer">{{trans('site/parent.jobs')}}</a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 order-lg-4 order-3">
                            <a href="{{route('about')}}" class="url-footer">{{trans('site/parent.About')}}</a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 order-lg-5 order-7">
                            <a href="{{route('news')}}" class="url-footer">{{trans('site/parent.News')}}</a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 order-lg-6 order-8">
                            <a href="{{route('contact')}}" class="url-footer">{{trans('site/parent.Contact_us')}}</a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 order-lg-7 order-5">
                            <a href="{{route('product')}}" class="url-footer">{{trans('site/parent.products')}}</a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 order-lg-8 order-2">
                            <a href="{{route('albums')}}" class="url-footer">{{trans('site/parent.Albums')}}</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </footer>
    <div class="footer-2">
        <div class="text-center">
            جميع الحقوق محفوظة © 2021
        </div>
    </div>
</div>

<!-- ./footer -->
<button onclick="topFunction()" id="myBtn" title="Go to top">
    <svg xmlns="http://www.w3.org/2000/svg" width="19.126" height="21.339" viewBox="0 0 19.126 21.339">
        <g id="Group_52977" data-name="Group 52977" transform="translate(-1260.577 -4492.763)">
            <path id="Path_21782" data-name="Path 21782" d="M1260,4501.855l8.856-8.855,8.856,8.855"
                  transform="translate(1.284 1.177)" fill="none" stroke="#fff" stroke-miterlimit="10"
                  stroke-width="2" />
            <path id="Path_21783" data-name="Path 21783" d="M1268,4493v19.925" transform="translate(2.139 1.177)"
                  fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2" />
        </g>
    </svg>
</button>
<a href="http://" class="whatsapp" target="_blank" rel="noopener noreferrer">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
        <g id="whatsapp" transform="translate(-18633 -6474)">
            <circle id="Ellipse" cx="25" cy="25" r="25" transform="translate(18633 6474)" fill="#25d366" />
            <g id="Whatapp" transform="translate(18645.75 6486.942)">
                <path id="Path_29874" data-name="Path 29874"
                      d="M20.753,3.5A11.953,11.953,0,0,0,1.945,17.923L.25,24.115l6.335-1.662a11.937,11.937,0,0,0,5.71,1.455H12.3A11.955,11.955,0,0,0,20.753,3.5ZM12.3,21.89h0a9.92,9.92,0,0,1-5.055-1.384l-.363-.215-3.759.986,1-3.665-.236-.376A9.932,9.932,0,1,1,12.3,21.89Zm5.448-7.439c-.3-.15-1.767-.872-2.04-.971s-.473-.149-.672.15-.771.971-.946,1.171-.348.224-.647.075a8.155,8.155,0,0,1-2.4-1.482,9.007,9.007,0,0,1-1.661-2.068c-.174-.3,0-.445.131-.609a8.446,8.446,0,0,0,.746-1.021.549.549,0,0,0-.025-.523c-.074-.149-.672-1.619-.92-2.217-.243-.582-.489-.5-.672-.513s-.373-.01-.572-.01a1.1,1.1,0,0,0-.8.374A3.349,3.349,0,0,0,6.228,9.3a5.808,5.808,0,0,0,1.219,3.089,13.309,13.309,0,0,0,5.1,4.508,17.091,17.091,0,0,0,1.7.629,4.093,4.093,0,0,0,1.881.118,3.076,3.076,0,0,0,2.015-1.42,2.5,2.5,0,0,0,.174-1.42c-.074-.125-.274-.2-.572-.349Zm0,0"
                      fill="#fff" fill-rule="evenodd" />
            </g>
        </g>
    </svg>
</a>
<div class="side-overlay"></div>
</body>
<script src="{{asset('site/js/jquery.min.js')}}"></script>
<script src="{{asset('site/js/popper.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('site/js/wow.min.js')}}"></script>
<script src="{{asset('site/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('site/js/main.js')}}"></script>
{{--<script src="{{asset('cms/assets/js/pages/features/miscellaneous/toastr.js')}}"></script>--}}
<script src="{{asset('js/axios.js')}}"></script>
<script src="{{asset('cms/assets/js/pages/features/miscellaneous/sweetalert2.js')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

{{--<script>--}}
{{--    // // var words = ['المدينة','المدينه']--}}
{{--    // // for (let index = 0; index < words.length; index++) {--}}
{{--    // //     $('.title')[0].innerHTML = $('.title')[0].innerHTML.replace(words[index],'<span style="color:var(--green)">'+words[index]+'</span>');--}}
{{--    // // }--}}
{{--    // $(window).on('load',function(){--}}
{{--    //     $('#loadOverlay').fadeOut();--}}
{{--    //     $('html,body').css('overflow','');--}}
{{--    // });--}}
{{--</script>--}}

{{--<script>--}}
{{--    $(document).on('submit','#create-form',function(e){--}}
{{--        e.preventDefault();--}}
{{--         var search = $('#search_input').val();--}}
{{--        $.ajax({--}}
{{--            type: 'get',--}}
{{--            url: "{{ route('search') }}",--}}
{{--            data: {--}}
{{--                'search': search,--}}
{{--            },--}}
{{--            success: function (data) {--}}
{{--                console.log(response);--}}

{{--            }--}}
{{--        });--}}

{{--    });--}}
{{--</script>--}}
<script>
    $(document).on('click', '.alert-link-verified', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({

            url: "{{route('verification.send')}}",
            type: 'post',
            data: {

            },
            success: function (data) {
                Swal.fire({
                    icon: 'success',
                    title: 'تم ارسال رسالة التفعيل على الايميل',
                    showConfirmButton: false,
                    timer: 1500
                })
            },

        })
    });

</script>





@yield('script')


</html>
