@extends('site.parent')

@section('titel','offers')

@section('styl')

@endsection

@section('contact')
    <div class="offers-page offers bubbles">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol  class="breadcrumb official ">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">الحملات والعروض</li>
                </ol>
            </nav>
            <div class="row">
                @foreach($offers as $offer)
                <div class="col-lg-6">

                    <div class="card-1 offers-card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.15s">
                        <a href="{{route('offer-details',$offer->id)}}">
                            <figure>
                                <img src="{{url(Storage::url($offer->img->url_image ?? ''))}}" alt="" srcset="" loading="lazy">
                            </figure>
                        </a>
                        <div class="body-card">
                            <div class="calender">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                                        <g id="Group_52415" data-name="Group 52415" transform="translate(-1191.5 -530)">
                                            <rect id="Rectangle_12" data-name="Rectangle 12" width="24" height="24"
                                                  rx="12" transform="translate(1192 530.5)" fill="#fff" stroke="#ebeaee"
                                                  stroke-width="1" />
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
                                                      stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.1" />
                                                <path id="Line_208" d="M.463,0V2.263" transform="translate(2.951 0)"
                                                      fill="none" stroke="#000" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.1" />
                                                <path id="Path"
                                                      d="M9.1,0H3.28A2.958,2.958,0,0,0,0,3.192V9.414a2.987,2.987,0,0,0,3.28,3.251H9.1a2.96,2.96,0,0,0,3.28-3.2V3.192A2.948,2.948,0,0,0,9.1,0Z"
                                                      transform="translate(0 1.086)" fill="none" stroke="#000"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.1" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span>{{$offer->created_at}}</span>
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
                                        <a href="http://localhost:5500/offers.html#" title="copylink" class="copylink">
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
                            <a href="{{route('offer-details',$offer->id)}}">
                                <h2>{{$offer->name}}</h2>
                                <p>{{ \Illuminate\Support\Str::limit($offer->details, 200, $end='...') }}</p>
                            </a>

                        </div>
                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection


@section('script')


@endsection


