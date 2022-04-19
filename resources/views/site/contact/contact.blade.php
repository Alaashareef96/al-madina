@extends('site.parent')

@section('titel','Contact')

@section('styl')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
@endsection

@section('contact')
    <div class="contact_us bubbles">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol  class="breadcrumb official ">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">اتصل بنا</li>
                </ol>

            </nav>
            <div id="map"></div>

            <div class="info_contact_us">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex flex-lg-nowrap flex-wrap  mt-lg-0 mt-2 align-items-start">
                            <h2 class="info_contact_us_title address">العنوان:</h2>
                            <p class="info_contact_us_p context">غزة الشجاعية – شارع الكرامة (الخط الشرقي)
                                .شمال مستشفى الوفاء سابقا</p>
                        </div>
                        <div class="d-flex flex-wrap mt-lg-0 mt-2">
                            <h2 class="info_contact_us_title address">تابعنا على شبكاتنا الاجتماعية:</h2>
                            <div class="socail-media ">

                                <a href="http://" target="_blank" rel="noopener noreferrer">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                             width="16.277" height="16.277" viewBox="0 0 16.277 16.277">
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
                                                      transform="translate(-120.58 -120.58)" fill="url(#linear-gradient-2)" />
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
                    <div class="col-lg-3  mt-lg-0 mt-2">
                        <div class="d-flex align-items-center">
                            <h2 class="info_contact_us_title">ايميل:</h2>
                            <p class="info_contact_us_p"> madina@info.com </p>
                        </div>
                        <div class="d-flex align-items-center">
                            <h2 class="info_contact_us_title">محمول:</h2>
                            <p class="info_contact_us_p"> 0592622227 </p>
                        </div>
                        <div class="d-flex align-items-center">
                            <h2 class="info_contact_us_title">واتساب:</h2>
                            <p class="info_contact_us_p"> 0592622227 </p>
                        </div>
                    </div>
                    <div class="col-lg-3  mt-lg-0 mt-2">
                        <div class="d-flex align-items-center">
                            <h2 class="info_contact_us_title">مدير المبيعات:</h2>
                            <p class="info_contact_us_p"> 0599413411 </p>
                        </div>
                        <div class="d-flex align-items-center">
                            <h2 class="info_contact_us_title">متابعة العملاء:</h2>
                            <p class="info_contact_us_p"> 0594402022 </p>
                        </div>
                        <div class="d-flex align-items-center">
                            <h2 class="info_contact_us_title">موزع الجملة:</h2>
                            <p class="info_contact_us_p"> 0597918484 </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="contact-with-bg">



            <div class="container">
                <h2 class="main-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    اتصل بنا
                </h2>
                <div class="form">
                    <form id="create-form-contact">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="gender" class="col-form-label">نوع الرسالة:</label>
                                    <div class="custom-select-main">
                                        <select name="type" id="type" class="form-control custom-input">
                                            <option value="1">اختر نوع الرسالة</option>
                                            <option value="complaint">شكوى</option>
                                            <option value="enquiry">استفسار</option>
                                        </select>
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                    <span class="type" style="color:red"  ></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name" class="col-form-label">الاسم كاملا:</label>
                                    <input type="text" name="name" class="form-control custom-input" id="name" placeholder="أدخل الاسم كاملا">
                                    <span class="name" style="color:red"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email" class="col-form-label">الإيميل:</label>
                                    <input type="email" class="form-control custom-input" name="email" id="email" placeholder="أدخل الإيميل">
                                    <span class="email" style="color:red"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="phone" class="col-form-label">رقم المحمول:</label>
                                    <input type="text" class="form-control custom-input" name="phone" id="phone" placeholder="أدخل رقم المحمول">
                                    <span class="phone" style="color:red"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">الرسالة:</label>
                                    <textarea name="comment" class="form-control custom-input" id="comment" cols="20" rows="7" placeholder="اكتب رسالتك هنا..."></textarea>
                                </div>
                                <span class="comment" style="color:red"></span>
                            </div>
                            <div class="col-lg-6 mx-auto">
                                <button  type="button" onclick="store()"  class="btn btn-primary custom-botton" >
                                    ارسال الرسالة
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="content-map" hidden>
        <div class="d-flex align-items-center mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                <g id="Group_52587" data-name="Group 52587" transform="translate(-941.5 -316)">
                    <rect id="Rectangle_12" data-name="Rectangle 12" width="24" height="24" rx="12" transform="translate(942 316.5)" fill="#f3f3f3" stroke="#ebeaee" stroke-width="1"/>
                    <g id="Iconly_Light_Profile" data-name="Iconly/Light/Profile" transform="translate(948.5 321.521)">
                        <g id="Profile" transform="translate(0 0)">
                            <circle id="Ellipse_736" cx="3.469" cy="3.469" r="3.469" transform="translate(2.034)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.3"/>
                            <path id="Path_33945" d="M0,2.19a1.608,1.608,0,0,1,.16-.7A2.935,2.935,0,0,1,2.207.309,12.189,12.189,0,0,1,3.908.07a18.191,18.191,0,0,1,3.184,0,12.329,12.329,0,0,1,1.7.239A2.824,2.824,0,0,1,10.84,1.485a1.648,1.648,0,0,1,0,1.416,2.8,2.8,0,0,1-2.047,1.17,11.412,11.412,0,0,1-1.7.246,18.749,18.749,0,0,1-2.592.04,2.952,2.952,0,0,1-.592-.04,11.2,11.2,0,0,1-1.695-.246A2.81,2.81,0,0,1,.16,2.9,1.655,1.655,0,0,1,0,2.19Z" transform="translate(0 9.574)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.3"/>
                        </g>
                    </g>
                </g>
            </svg>
            <p class="info-map">موزع محافظة الشمال</p>
        </div>
        <div class="d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                <g id="Group_52588" data-name="Group 52588" transform="translate(-941.5 -316)">
                    <rect id="Rectangle_12" data-name="Rectangle 12" width="24" height="24" rx="12" transform="translate(942 316.5)" fill="#f3f3f3" stroke="#ebeaee" stroke-width="1"/>
                    <g id="vuesax_linear_mobile" data-name="vuesax/linear/mobile" transform="translate(836 -60.5)">
                        <g id="mobile" transform="translate(112 382)">
                            <path id="Vector" d="M12,3.75v7.5c0,3-.75,3.75-3.75,3.75H3.75C.75,15,0,14.25,0,11.25V3.75C0,.75.75,0,3.75,0h4.5C11.25,0,12,.75,12,3.75Z" transform="translate(0 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"/>
                            <path id="Vector-2" data-name="Vector" d="M3,0H0" transform="translate(4.499 2.627)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"/>
                            <path id="Vector-3" data-name="Vector" d="M2.327,1.164A1.164,1.164,0,1,1,1.164,0,1.164,1.164,0,0,1,2.327,1.164Z" transform="translate(4.836 10.496)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"/>
                        </g>
                    </g>
                </g>
            </svg>

            <a href="tel:0597274044" class="info-map">0597274044</a>
        </div>
    </div>
    <div class="marker-icon" hidden></div>
    <div class="modal custom-modal success fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                    <p>تم ارسال طلبك بنجاح, وسيتم التواصل معك في أقرب وقت
                        .نتمنى لك حظا موفقا</p>
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
        // This example displays a marker at the center of Australia.
        // When the user clicks the marker, an info window opens.
        var locations = [
            [31.50140790874212, 34.48693864808004, 4],
        ];
        function initMap() {
            // 31.50140790874212, 34.48693864808004
            const main = { lat: 31.50140790874212, lng: 34.48693864808004 };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: main,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
            });
            const contentString = $('.content-map').html();
            // const infowindow = new google.maps.InfoWindow({
            //     content: contentString,
            // });
            // const marker = new google.maps.Marker({
            //     position: uluru,
            //     map,
            //     title: "Uluru (Ayers Rock)",
            // });

            // marker.addListener("click", () => {
            //     infowindow.open({
            //     anchor: marker,
            //     map,
            //     shouldFocus: true,
            //     });
            // });
            var infowindow = new google.maps.InfoWindow();

            var marker, i;

            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][0], locations[i][1]),
                    map: map,
                    icon:'../images/Oval.png',
                });

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(contentString);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }

        }
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnSjxcc93CfspNFGfT7xX1KCVvtAvDneA&callback=initMap&v=weekly"
        async
    ></script>
    <script>
        function store() {

            let formData = new FormData($('#create-form-contact')[0]);
            axios.post('/al-madina/save-contact', formData, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                }
            }).then(function (response) {
                console.log(response);
                document.getElementById('create-form-contact').reset();
                $('.bd-example-modal-lg').modal('show');

            }).catch(function (error) {
                console.log(error.response.data.message);
                // if(error.response.data.message == false) {
                //     // console.log(error.response.data.message);
                //     $('.bd-example-modal-lg-false').modal('show');
                // }
                $('.name').text('');
                $('.email').text('');
                $('.phone').text('');
                $('.comment').text('');
                $('.type').text('');

                if(error.response.data.message.name){
                    $('.name').text(error.response.data.message.name[0]);
                }
                if(error.response.data.message.email) {
                    $('.email').text(error.response.data.message.email[0]);

                }   if(error.response.data.message.phone) {
                    $('.phone').text(error.response.data.message.phone[0]);
                }
                if(error.response.data.message.comment) {
                    $('.comment').text(error.response.data.message.comment[0]);

                } if(error.response.data.message.type) {
                    $('.type').text(error.response.data.message.type[0]);
                }


            });

        }


    </script>

@endsection


