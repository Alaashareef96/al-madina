@extends('site.parent')

@section('titel','New-details')

@section('styl')

@endsection

@section('contact')
    <div class="offers-details bubbles">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol  class="breadcrumb official ">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="{{route('news')}}">الأخبار والنشاطات</a></li>
                    <li class="breadcrumb-item active" aria-current="page">تفاصيل الخبر</li>
                </ol>
            </nav>
            <!-- banner -->
            <div class="owl-carousel owl-theme owl-1  wow zoomIn" data-wow-duration="1s" data-wow-delay="0.1s">
                @foreach($news->images as $image)
                    @if($image->url_images  != null)
                <div class="banner">
                    <img src="{{url(Storage::url($image->url_images ?? ''))}}" class="img-fluid">
                </div>
                    @endif
                        @endforeach
            </div>
            <!-- ./banner -->

            <div class="subject-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                <h1>{{$news->name}}</h1>
                <div class="links">
                    <span>مشاركة</span>
                    <a href="#" title="twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.445" height="13.362"
                             viewBox="0 0 16.445 13.362">
                            <g id="Brand" transform="translate(-1.777 -3.318)">
                                <path id="twitter"
                                      d="M16.445,49.582a7.029,7.029,0,0,1-1.943.532,3.352,3.352,0,0,0,1.483-1.863,6.738,6.738,0,0,1-2.138.816,3.371,3.371,0,0,0-5.832,2.305,3.472,3.472,0,0,0,.078.769,9.543,9.543,0,0,1-6.949-3.526,3.372,3.372,0,0,0,1.036,4.506,3.33,3.33,0,0,1-1.523-.415v.037a3.387,3.387,0,0,0,2.7,3.313,3.365,3.365,0,0,1-.884.111,2.981,2.981,0,0,1-.638-.058,3.4,3.4,0,0,0,3.15,2.349A6.774,6.774,0,0,1,.807,59.9,6.314,6.314,0,0,1,0,59.849a9.491,9.491,0,0,0,5.172,1.513,9.53,9.53,0,0,0,9.6-9.594c0-.149-.005-.293-.012-.436A6.726,6.726,0,0,0,16.445,49.582Z"
                                      transform="translate(1.777 -44.681)" fill="#03a9f4" />
                            </g>
                        </svg>
                    </a>
                    <a href="#" title="facebook">
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
                    </a>
                    <a href="#" title="linkedin">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17"
                             height="17" viewBox="0 0 17 17">
                            <image id="linkedin" width="17" height="17"
                                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAMAAADDpiTIAAAAA3NCSVQICAjb4U/gAAAACXBIWXMAABKNAAASjQEphQ1dAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAvFQTFRF////AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3dPNe8AAAAPp0Uk5TAAECAwQFBgcICQoLDA0ODxAREhMU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" />
                        </svg>
                    </a>
                    <a href="http://localhost:5500/offers.html#" title="copylink" class="main-copylink">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.593" height="19.593"
                             viewBox="0 0 19.593 19.593">
                            <g id="vuesax_linear_link-2" data-name="vuesax/linear/link-2"
                               transform="translate(-110.246 -254.161)">
                                <g id="link-2">
                                    <path id="Vector" d="M9.814,0a5.749,5.749,0,1,1-8.13,0"
                                          transform="translate(111.246 262.94)" fill="none" stroke="#8ec641"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    <path id="Vector-2" data-name="Vector" d="M1.755,10.249a6,6,0,1,1,8.49,0"
                                          transform="translate(116.835 255.161)" fill="none" stroke="#8ec641"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="calender wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33">
                    <g id="Group_52415" data-name="Group 52415" transform="translate(-1191.086 -530)">
                        <rect id="Rectangle_12" data-name="Rectangle 12" width="32" height="32" rx="16"
                              transform="translate(1191.586 530.5)" fill="#fff" stroke="#ebeaee" stroke-width="1" />
                        <g id="Calendar" transform="translate(1200.386 538.5)">
                            <path id="Line_200" d="M0,.473H14.259" transform="translate(0.074 5.451)" fill="none"
                                  stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                  stroke-width="1.5" />
                            <path id="Line_201" d="M.459.473H.466" transform="translate(10.295 8.575)" fill="none"
                                  stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                  stroke-width="1.5" />
                            <path id="Line_202" d="M.459.473H.466" transform="translate(6.745 8.575)" fill="none"
                                  stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                  stroke-width="1.5" />
                            <path id="Line_203" d="M.459.473H.466" transform="translate(3.188 8.575)" fill="none"
                                  stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                  stroke-width="1.5" />
                            <path id="Line_204" d="M.459.473H.466" transform="translate(10.295 11.684)" fill="none"
                                  stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                  stroke-width="1.5" />
                            <path id="Line_205" d="M.459.473H.466" transform="translate(6.745 11.684)" fill="none"
                                  stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                  stroke-width="1.5" />
                            <path id="Line_206" d="M.459.473H.466" transform="translate(3.188 11.684)" fill="none"
                                  stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                  stroke-width="1.5" />
                            <path id="Line_207" d="M.463,0V2.633" transform="translate(9.972 0)" fill="none"
                                  stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                  stroke-width="1.5" />
                            <path id="Line_208" d="M.463,0V2.633" transform="translate(3.509 0)" fill="none"
                                  stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                  stroke-width="1.5" />
                            <path id="Path"
                                  d="M10.591,0H3.817C1.467,0,0,1.309,0,3.714v7.24a3.475,3.475,0,0,0,3.817,3.783h6.766c2.357,0,3.817-1.316,3.817-3.722v-7.3C14.407,1.309,12.947,0,10.591,0Z"
                                  transform="translate(0 1.263)" fill="none" stroke="#000" stroke-linecap="round"
                                  stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                        </g>
                    </g>
                </svg>

                <span>‏15 نوفمبر, 2021</span>
            </div>
            <div class="bg-text-details">

                <div class="row">
                    <div class="col-lg-6">
                        <p> {{$news->details}}</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-us">
                            <a href="{{url(Storage::url($news->img->url_video ?? ''))}}" data-fancybox>
                                <div class="video">
                                    <figure class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                        <img src="{{url(Storage::url($news->img->url_image ?? ''))}}" class="img-fluid">
                                        <div class="play">
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </div>
                                    </figure>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
{{--                <p class="mt-2"> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص--}}
{{--                    العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من--}}
{{--                    النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق, إذا كنت تحتاج إلى عدد أكبر من الفقرات--}}
{{--                    يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد--}}
{{--                    .النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص</p>--}}
{{--                <p>--}}
{{--                    ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً، دور مولد النص--}}
{{--                    العربى أن يوفر على المصمم عناء البحث عن نص--}}
{{--                    بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق, هذا النص يمكن أن يتم تركيبه على--}}
{{--                    أي تصميم دون مشكلة فلن يبدو وكأنه نص--}}
{{--                    .منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم لأنه مازال نصاً بديلاً ومؤقتا--}}
{{--                </p>--}}

            </div>
            <div class="comments bg-text-details with-bg mt-5">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33">
                            <g id="Group_52795" data-name="Group 52795" transform="translate(-1191.086 -530)">
                                <rect id="Rectangle_12" data-name="Rectangle 12" width="32" height="32" rx="16" transform="translate(1191.586 530.5)" fill="#fff" stroke="#ebeaee" stroke-width="1"/>
                                <g id="Chat" transform="translate(1199.586 538.5)">
                                    <path id="Combined_Shape" data-name="Combined Shape" d="M7.268.933a.935.935,0,1,1,.935.935A.935.935,0,0,1,7.268.933Zm-3.634,0a.935.935,0,1,1,.935.935A.935.935,0,0,1,3.635.933ZM0,.933a.935.935,0,1,1,.935.935A.935.935,0,0,1,0,.933Z" transform="translate(3.621 7.244)"/>
                                    <path id="Stroke_7" data-name="Stroke 7" d="M8.016,0A8,8,0,0,0,0,8.012a8.467,8.467,0,0,0,1.08,4,.84.84,0,0,1,.056.722L.6,14.526a.5.5,0,0,0,.656.624l1.616-.48a1.357,1.357,0,0,1,1.192.288A8,8,0,1,0,8.016,0Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                </g>
                            </g>
                        </svg>
                        <p class="mb-0 px-2 comments-text">التعليقات</p>
                    </div>
                    <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"
                       class="btn btn-primary custom-botton wow fadeInUp" data-wow-duration="1s"
                       data-wow-delay="0.6s">
                        + أضف تعليقك
                    </a>
                </div>
                @if(count($comments) > 0)
                @foreach($comments as $comment)
                <div class="comment mt-lg-3 mt-5 wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay="0.1s">
                    <div class="user-info">
                        <figure>
                            @if( isset($comment->img) && $comment->img->url_image != null)
                                <img src="{{url(Storage::url($comment->img->url_image))}}" alt="Card image cap">
                                @else
                            <img src="{{asset('cms/assets/media/users/blank.png')}}" alt="Card image cap">
                            @endif
                        </figure>
                        <div class="mt-2">
                            <h6>{{$comment->name}}</h6>
                            <span>{{$comment->create_at}}</span>
                            <p>{{$comment->comment}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

            </div>

        </div>
        <div class="more-items">
            <div class="container">
                <h2 class="main-title">
                    طالع المزيد
                </h2>
                <div class="row">
                    @foreach($newsall as $new)
                    <div class="col-lg-6">
                        <div class="card-1 offers-card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.15s">
                            <a href="{{route('news-details',$new->id)}}">
                                <figure>
                                    <img src="{{url(Storage::url($new->img->url_image ?? ''))}}" alt="" srcset="" loading="lazy">
                                </figure>
                            </a>
                            <div class="body-card">
                                <div class="calender">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                             viewBox="0 0 25 25">
                                            <g id="Group_52415" data-name="Group 52415"
                                               transform="translate(-1191.5 -530)">
                                                <rect id="Rectangle_12" data-name="Rectangle 12" width="24" height="24"
                                                      rx="12" transform="translate(1192 530.5)" fill="#fff"
                                                      stroke="#ebeaee" stroke-width="1" />
                                                <g id="Calendar" transform="translate(1197.844 535.657)">
                                                    <path id="Line_200" d="M0,.473H12.255"
                                                          transform="translate(0.064 4.618)" fill="none" stroke="#000"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.1" />
                                                    <path id="Line_201" d="M.459.473H.465"
                                                          transform="translate(8.783 7.303)" fill="none" stroke="#000"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.1" />
                                                    <path id="Line_202" d="M.459.473H.465"
                                                          transform="translate(5.733 7.303)" fill="none" stroke="#000"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.1" />
                                                    <path id="Line_203" d="M.459.473H.465"
                                                          transform="translate(2.675 7.303)" fill="none" stroke="#000"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.1" />
                                                    <path id="Line_204" d="M.459.473H.465"
                                                          transform="translate(8.783 9.975)" fill="none" stroke="#000"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.1" />
                                                    <path id="Line_205" d="M.459.473H.465"
                                                          transform="translate(5.733 9.975)" fill="none" stroke="#000"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.1" />
                                                    <path id="Line_206" d="M.459.473H.465"
                                                          transform="translate(2.675 9.975)" fill="none" stroke="#000"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.1" />
                                                    <path id="Line_207" d="M.463,0V2.263" transform="translate(8.505 0)"
                                                          fill="none" stroke="#000" stroke-linecap="round"
                                                          stroke-linejoin="round" stroke-miterlimit="10"
                                                          stroke-width="1.1" />
                                                    <path id="Line_208" d="M.463,0V2.263" transform="translate(2.951 0)"
                                                          fill="none" stroke="#000" stroke-linecap="round"
                                                          stroke-linejoin="round" stroke-miterlimit="10"
                                                          stroke-width="1.1" />
                                                    <path id="Path"
                                                          d="M9.1,0H3.28A2.958,2.958,0,0,0,0,3.192V9.414a2.987,2.987,0,0,0,3.28,3.251H9.1a2.96,2.96,0,0,0,3.28-3.2V3.192A2.948,2.948,0,0,0,9.1,0Z"
                                                          transform="translate(0 1.086)" fill="none" stroke="#000"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.1" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span>10/10/ 2015</span>
                                    </div>
                                    <div class="share">
                                        <div class="main">
                                            <p>مشاركة</p>
                                            <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="links">
                                            <a href="#" title="twitter">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.445" height="13.362"
                                                     viewBox="0 0 16.445 13.362">
                                                    <g id="Brand" transform="translate(-1.777 -3.318)">
                                                        <path id="twitter"
                                                              d="M16.445,49.582a7.029,7.029,0,0,1-1.943.532,3.352,3.352,0,0,0,1.483-1.863,6.738,6.738,0,0,1-2.138.816,3.371,3.371,0,0,0-5.832,2.305,3.472,3.472,0,0,0,.078.769,9.543,9.543,0,0,1-6.949-3.526,3.372,3.372,0,0,0,1.036,4.506,3.33,3.33,0,0,1-1.523-.415v.037a3.387,3.387,0,0,0,2.7,3.313,3.365,3.365,0,0,1-.884.111,2.981,2.981,0,0,1-.638-.058,3.4,3.4,0,0,0,3.15,2.349A6.774,6.774,0,0,1,.807,59.9,6.314,6.314,0,0,1,0,59.849a9.491,9.491,0,0,0,5.172,1.513,9.53,9.53,0,0,0,9.6-9.594c0-.149-.005-.293-.012-.436A6.726,6.726,0,0,0,16.445,49.582Z"
                                                              transform="translate(1.777 -44.681)" fill="#03a9f4" />
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="#" title="facebook">
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
                                            </a>
                                            <a href="#" title="linkedin">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17"
                                                     viewBox="0 0 17 17">
                                                    <image id="linkedin" width="17" height="17"
                                                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAMAAADDpiTIAAAAA3NCSVQICAjb4U/gAAAACXBIWXMAABKNAAASjQEphQ1dAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAvFQTFRF////AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3AHe3dPNe8AAAAPp0Uk5TAAECAwQFBgcICQoLDA0ODxAREhMU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" />
                                                </svg>
                                            </a>
                                            <a href="http://localhost:5500/offers.html#" title="copylink"
                                               class="copylink">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.593" height="19.593"
                                                     viewBox="0 0 19.593 19.593">
                                                    <g id="vuesax_linear_link-2" data-name="vuesax/linear/link-2"
                                                       transform="translate(-110.246 -254.161)">
                                                        <g id="link-2">
                                                            <path id="Vector" d="M9.814,0a5.749,5.749,0,1,1-8.13,0"
                                                                  transform="translate(111.246 262.94)" fill="none"
                                                                  stroke="#8ec641" stroke-linecap="round"
                                                                  stroke-linejoin="round" stroke-width="2" />
                                                            <path id="Vector-2" data-name="Vector"
                                                                  d="M1.755,10.249a6,6,0,1,1,8.49,0"
                                                                  transform="translate(116.835 255.161)" fill="none"
                                                                  stroke="#8ec641" stroke-linecap="round"
                                                                  stroke-linejoin="round" stroke-width="2" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <a href="{{route('news-details',$new->id)}}">
                                    <h2>{{$new->name}}</h2>
                                    <p>{{ \Illuminate\Support\Str::limit($new->details, 200, $end='...') }}</p>
                                </a>
                                </a>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>

    <div class="modal custom-modal modal-comment fade bd-example-modal-lg" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h2>اضف تعليقك</h2>
                    <form id="create-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="upload-img">
                                    <figure>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="43" height="38.718" viewBox="0 0 43 38.718">
                                            <g id="Camera" transform="translate(0.75 0.75)">
                                                <path id="Stroke_1" data-name="Stroke 1" d="M32.19,7.264h0a2.08,2.08,0,0,1-1.881-1.191c-.621-1.315-1.41-2.995-1.877-3.909A3.622,3.622,0,0,0,25.077,0c-.026,0-10.128,0-10.154,0a3.624,3.624,0,0,0-3.356,2.162c-.465.915-1.254,2.595-1.875,3.909A2.083,2.083,0,0,1,7.812,7.264h0A7.81,7.81,0,0,0,0,15.074V27.909a7.811,7.811,0,0,0,7.812,7.81H32.19A7.811,7.811,0,0,0,40,27.909V15.074A7.809,7.809,0,0,0,32.19,7.264Z" transform="translate(0.75 0.75)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                                                <path id="Stroke_3" data-name="Stroke 3" d="M0,6.88A6.872,6.872,0,1,0,6.88,0,6.9,6.9,0,0,0,0,6.88Z" transform="translate(13.877 14.593)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                                                <path id="Fill_5" data-name="Fill 5" d="M1.951,4.314a2.345,2.345,0,0,1-.646-.169A2.18,2.18,0,0,1,.61,3.667,2.207,2.207,0,0,1,0,2.163a2.1,2.1,0,0,1,.178-.851,2.2,2.2,0,0,1,.51-.74,2.474,2.474,0,0,1,.658-.42A2.211,2.211,0,0,1,3.685.617a2.08,2.08,0,0,1,.41.565l.049.126a2.106,2.106,0,0,1,.18.855,2.2,2.2,0,0,1-.631,1.525,2.154,2.154,0,0,1-1.317.626l-.215.011Z" transform="translate(29.399 12.101)" fill="#200e32"/>
                                            </g>
                                        </svg>
                                        <img src="" alt="" id="preview" class="d-none img-fluid">
                                    </figure>

                                    <p>رفع صورة شخصية
                                        <span>(اختياري)</span>
                                    </p>

                                    <input type="file" name="image" id="upload-image" hidden>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">الاسم كاملا:</label>
                                    <input type="text" class="form-control custom-input" name="name" id="recipient-name"
                                           placeholder="أدخل الاسم كاملا">
                                    <span class="name"></span>
                                </div>
                                <input type="hidden" class="form-control custom-input" name="news_id" value="{{$news->id}}" id="news_id">

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">الايميل:</label>
                                    <input type="email" class="form-control custom-input" name="email" id="recipient-name"
                                           placeholder="أدخل الإيميل">
                                    <span class="email"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">التعليق:</label>
                                    <textarea name="comment" class="form-control custom-input" name="comment" cols="20" rows="7" placeholder="اكتب تعليقك هنا..."></textarea>
                                    <span class="comment"></span>
                                    <span class="note">
                                        ملاحظة:
                                        <small>سيتم نشر تعليقك بعد موافقة المسؤول</small>
                                    </span>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 mx-auto">
                            <button type="button"  onclick="store()" class="btn btn-primary custom-botton">
                                إضافة التعليق
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal custom-modal success fade bd-example-modal-lg-thanks" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="276.929" height="185.027" viewBox="0 0 276.929 185.027">
                        <g id="Group_52754" data-name="Group 52754" transform="translate(-568.173 -216)">
                            <g id="Group_52753" data-name="Group 52753" transform="translate(654.301 281.027)">
                                <g id="Illustration" transform="translate(0 0)">
                                    <g id="Success">
                                        <g id="maps-and-flags">
                                            <path id="Path_20604" data-name="Path 20604" d="M60,120a60,60,0,1,1,60-60A60.069,60.069,0,0,1,60,120Z" fill="#2ed573"/>
                                            <path id="Path_20605" data-name="Path 20605" d="M87.886,110.6A59.894,59.894,0,0,1,40.62,13.884a59.93,59.93,0,1,0,66.568,93.463A59.5,59.5,0,0,1,87.886,110.6Z" transform="translate(0 -10.594)" fill="#2ed573"/>
                                        </g>
                                        <path id="Path_20811" data-name="Path 20811" d="M199.244,173.958l-32.857,32.857a5.05,5.05,0,0,1-7.147,0l-16.428-16.428a5.054,5.054,0,0,1,7.147-7.147l12.855,12.855L192.1,166.811a5.054,5.054,0,0,1,7.147,7.147Zm0,0" transform="translate(-110.949 -126.888)" fill="#fff"/>
                                    </g>
                                </g>
                            </g>
                            <g id="Illustration-2" data-name="Illustration" transform="translate(568.173 216)">
                                <g id="elements_copy" data-name="elements copy" transform="translate(0 0)">
                                    <path id="Fill_10" data-name="Fill 10" d="M13.252.169C4.57,4.551-2.9,13.967,1.112,24.131,4.556,32.866,15.8,36.707,24.432,34.565c9.093-2.258,13.716-10.93,11.063-19.889C32.663,5.126,22.74-.954,13.034.148c-1.817.207-1.838,3.084,0,2.876a18.415,18.415,0,0,1,18.115,8.915c4.573,7.841,1.649,17.537-7.481,19.852C16.924,33.5,7.987,30.8,4.453,24.5-.614,15.48,7.009,6.534,14.7,2.651c1.651-.835.2-3.315-1.451-2.482" transform="translate(0 102.056)" fill="#b1d7ff"/>
                                    <path id="Fill_131" data-name="Fill 131" d="M15.248,7.624A7.624,7.624,0,1,1,7.624,0a7.624,7.624,0,0,1,7.624,7.624" transform="translate(261.681 112.523)" fill="#eb8807"/>
                                    <path id="Fill_133" data-name="Fill 133" d="M7.353,3.677A3.677,3.677,0,1,1,3.677,0,3.676,3.676,0,0,1,7.353,3.677" transform="translate(219.812 57.57)" fill="#f3f3f3"/>
                                    <path id="Fill_146" data-name="Fill 146" d="M9.7,4.849A4.849,4.849,0,1,1,4.849,0,4.849,4.849,0,0,1,9.7,4.849" transform="translate(44.296 71.924)" fill="#f3f3f3"/>
                                    <path id="Fill_163" data-name="Fill 163" d="M11.638,0l4.116,7.525,7.523,4.115-7.523,4.115-4.116,7.525L7.523,15.755,0,11.64,7.523,7.525,11.638,0" transform="translate(172.71)" fill="#ffde02"/>
                                    <path id="Fill_164" data-name="Fill 164" d="M7.937,0l2.807,5.13,5.13,2.807-5.13,2.805L7.937,15.874,5.132,10.742,0,7.937,5.132,5.13,7.937,0" transform="translate(20.528 33.317)" fill="#ffde02"/>
                                </g>
                                <path id="Fill_116" data-name="Fill 116" d="M10.769,5.7H11.4a5.7,5.7,0,1,0-5.7,5.7,5.7,5.7,0,0,0,5.7-5.7H10.135A4.434,4.434,0,1,1,5.7,1.269,4.44,4.44,0,0,1,10.135,5.7h.635" transform="translate(224.759 152.859)" fill="#adebff"/>
                            </g>
                        </g>
                    </svg>
                    <h3>شكرا لك</h3>
                    <p>تم إضافة تعليقك بنجاح</p>
                    <a href="{{route('home')}}" class="btn btn-primary custom-botton">
                        العودة للرئيسية
                    </a>
                </div>

            </div>
        </div>
    </div>

@endsection


@section('script')
    <script>
        function store() {
            let formData = new FormData($('#create-form')[0]);
            axios.post('/al-madina/news-comment', formData, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                }
            }).then(function (response) {
                console.log(response);
                // Swal.fire(
                //     'Good job!',
                //     'You clicked the button!',
                //     'success'
                // )
                // window.location.reload();
                document.getElementById('create-form').reset();
                $('.bd-example-modal-lg').modal('hide');
                $('.bd-example-modal-lg-thanks').modal('show');

            }).catch(function (error) {
                console.log(error.response.data.message);
                $('.name').text('');
                $('.email').text('');
                $('.comment').text('');

                if(error.response.data.message.name){
                    $('.name').text(error.response.data.message.name[0]);
                }
                if(error.response.data.message.email) {
                    $('.email').text(error.response.data.message.email[0]);
                }
                if(error.response.data.message.comment) {
                    $('.comment').text(error.response.data.message.comment[0]);
                }


            });

        }
    </script>


@endsection


