@extends('site.parent')

@section('titel','Home')

@section('styl')

@endsection

@section('contact')
        <!-- banner -->
        <div class="owl-carousel owl-theme owl-1  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
            <div class="banner">
                <img src="{{asset('site/images/1.png')}}" class="img-fluid">
            </div>
            <div class="banner">
                <img src="{{asset('site/images/1.png')}}" class="img-fluid">
            </div>
            <div class="banner">
                <img src="{{asset('site/images/1.png')}}" class="img-fluid">
            </div>
            <div class="banner">
                <img src="{{asset('site/images/1.png')}}" class="img-fluid">
            </div>
            <div class="banner">
                <img src="{{asset('site/images/1.png')}}" class="img-fluid">
            </div>
        </div>
        <!-- ./banner -->

        <!-- about us -->
        <div class="about-us bg ">
            <div class="container">
                <h2 class="main-title wow fadeInUp " data-wow-duration="1s" data-wow-delay="0.1s">
                    من نحن ؟
                </h2>
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="title about-title wow fadeInUp " data-wow-duration="1s" data-wow-delay="0.2s">
                            شركة المدينة للمشروبات الخفيفة
                        </h1>
                        <div class="paragraph wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            ،شركة مساهمه محدودة هي إحدى الشركات الرائدة في مجال الصناعة
                            الغذائية والتي تأسست في العام 2003 برأس مال فلسطيني خالص
                            وتخصص عمل الشركة في مجال إنتاج المشروبات الغازية والمياه
                            المعدنية على المستوى المحلي. تتنوع أصناف المشروبات الغازية تحت
                            مسمى فينتانا وفيتال وسافانا والمياه المعدنية باسم جوي (مياه شرب
                            (نقيه وصحية ومعقمه ومستخرجه من بئر جوفي
                        </div>
                        <div class="col-lg-3 mb-lg-0 mb-4">
                            <a href="about.html" target="_blank" rel="noopener noreferrer"
                                class="btn btn-primary custom-botton wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay="0.4s">
                                اقرأ المزيد
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <span class="shape-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                                <circle id="Oval_Copy_2" data-name="Oval Copy 2" cx="13" cy="13" r="13" fill="#fff6dd" />
                            </svg>
                        </span>
                        <a href="https://www.youtube.com/embed/9_5wHw6l11o" data-fancybox>
                            <div class="video">
                                <figure class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                    <img src="{{asset('site/images/2.png')}}" class="img-fluid">
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
                    العلامات التجارية
                </h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mx-auto mt-lg-0 mt-4 wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay="0.2s">
                        <img src="{{asset('site/images/Vital.png')}}" alt="" srcset="" loading="lazy" class="border-raduis img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-6 mx-auto mt-lg-0 mt-4 wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay="0.3s">
                        <img src="{{asset('site/images/Ventana.png')}}" alt="" srcset="" loading="lazy" class="border-raduis img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-6 mx-auto mt-lg-0 mt-4 wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay="0.4s">
                        <img src="{{asset('site/images/Joy.png')}}" alt="" srcset="" loading="lazy" class="border-raduis img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <!-- ./our-brands -->

        <!-- manger-word -->
        <div class="manger-word">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <figure class="card-photo wow zoomIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <img src="{{asset('site/images/manger.png')}}" class="img-fluid" alt="" srcset="" loading="lazy">
                        </figure>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="mt-5">
                            <h2 class="title  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">كلمة مدير الشركة
                            </h2>
                            <p class="paragraph  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                استطاعت شركة المدينة للمشروبات الخفيفة من تحقيق النجاح حيث أصبحت من كبرى الشركات
                                في مجالها في السوق الفلسطينية وأضحت منتجاتها تحظي برضي الشريحة العريضة من
                                .المستهلكين مما أعطي الشركة الفرصة بتوسيع مساهمتها في السوق المحلي خلال فتره وجيزة
                                تسعي الشركة إلى توسيع منتجاتها وفتح أفاق جديدة للتصدير للخارج، وتعتمد الشركة في إنتاجها
                                على تحقيق الجودة العالية وفق أحدث تكنولوجيا التصنيع في العالم. وبأيدي وعقول فلسطينية
                                .قادرة وكفؤة، ولدي الشركة خطط مستقبليه لدخول الأسواق المحلية بمنتجات متعددة أخري
                            </p>
                            <div class="info-manger  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                <p class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">أ. خالد محمد عبدالله
                                </p>
                                <span class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">مدير الشركة</span>
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
                    <div class="col-lg-3 col-md-6">
                        <a href="http://">
                            <div class="card product-card  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                <figure class="card-img-top">
                                    <img src="{{asset('site/images/cola.png')}}" alt="Card image cap">
                                    <span>‏330 مل</span>
                                </figure>
                                <div class="card-body">
                                    <h5 class="card-title">فينتانا (مشروبات غازية) </h5>
                                    <p class="card-text"> مشروب شعير غازي نكهه
                                        طبيعية</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="http://">
                            <div class="card product-card  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                                <figure class="card-img-top">
                                    <img src="{{asset('site/images/cola-2.png')}}" alt="Card image cap">
                                    <span>‏1.5 لتر</span>
                                </figure>
                                <div class="card-body">
                                    <h5 class="card-title">فيتال (مشروبات غازية) </h5>
                                    <p class="card-text"> مشروب غازي بطعم كيوي والليمون</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="http://">
                            <div class="card product-card  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                <figure class="card-img-top">
                                    <img src="{{asset('site/images/cola-3.png')}}" alt="Card image cap">
                                    <span>330 مل</span>
                                </figure>
                                <div class="card-body">
                                    <h5 class="card-title">فينتانا (مشروبات غازية) </h5>
                                    <p class="card-text"> مشروب غازي بطعم الفواكه</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="http://">
                            <div class="card product-card  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.35s">
                                <figure class="card-img-top">
                                    <img src="{{asset('site/images/cola-4.png')}}" alt="Card image cap">
                                    <span>‏1 لتر</span>
                                </figure>
                                <div class="card-body">
                                    <h5 class="card-title">فينتانا (مشروبات غازية) </h5>
                                    <p class="card-text"> مشروب غازي بطعم الكولا</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="http://">
                            <div class="card product-card  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                <figure class="card-img-top">
                                    <img src="{{asset('site/images/cola-5.png')}}" alt="Card image cap">
                                    <span>‏1.5 لتر</span>
                                </figure>
                                <div class="card-body">
                                    <h5 class="card-title">فينتانا (مشروبات غازية) </h5>
                                    <p class="card-text"> مشروب شعير غازي بطعم
                                        الأناناس</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="http://">
                            <div class="card product-card  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.45s">
                                <figure class="card-img-top">
                                    <img src="{{asset('site/images/cola-6.png')}}" alt="Card image cap">
                                    <span>‏1.5 لتر</span>
                                </figure>
                                <div class="card-body">
                                    <h5 class="card-title">فينتانا (مشروبات غازية) </h5>
                                    <p class="card-text"> مشروب شعير غازي بطعم
                                        الأناناس</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="http://">
                            <div class="card product-card  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                <figure class="card-img-top">
                                    <img src="{{asset('site/images/cola-7.png')}}" alt="Card image cap">
                                    <span>‏1.5 لتر</span>
                                </figure>
                                <div class="card-body">
                                    <h5 class="card-title">فينتانا (مشروبات غازية) </h5>
                                    <p class="card-text"> مشروب شعير غازي بطعم
                                        الأناناس</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="http://">
                            <div class="card product-card  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.55s">
                                <figure class="card-img-top">
                                    <img src="{{asset('site/images/cola-8.png')}}" alt="Card image cap">
                                    <span>‏330 مل</span>
                                </figure>
                                <div class="card-body">
                                    <h5 class="card-title">فينتانا (مشروبات غازية) </h5>
                                    <p class="card-text"> مشروب شعير غازي بطعم
                                        الأناناس</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mx-auto">
                        <a href="#" target="_blank" rel="noopener noreferrer"
                            class="btn btn-primary custom-botton wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            عرض جميع المنتجات
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
                    ماذا قالوا عنا؟
                </h2>
                <div class="owl-carousel owl-theme owl-2  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="card people_rate_card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="card-img-top">
                            <div class="user-info">
                                <figure>
                                    <img src="{{asset('site/images/avatar1.png')}}" alt="Card image cap">
                                </figure>
                                <div>
                                    <p>رامي صالحة</p>
                                    <span>مدير الادارة</span>
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
                            <p class="card-text"> شركة المدينة نشهد لها بالتميز والحضور
                                القوي لمنتجاتها في السوق رغم الدمار الذي
                                .لحق بالمصنع في أيام العدوان الإسرائيلي</p>
                        </div>
                    </div>
                    <div class="card people_rate_card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="card-img-top">

                            <div class="user-info">
                                <figure>
                                    <img src="{{asset('site/images/avatar1.png')}}" alt="Card image cap">
                                </figure>
                                <div>
                                    <p>شيماء درويش</p>
                                    <span>مهندسة برمجيات</span>
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
                            <p class="card-text"> والله حلو ما توقعت في بغزة هيك مصنع
                                وشي مرتب الصراحة,, الأولى تشجيع المنتج
                                .الوطني أفضل من الاستيراد</p>
                        </div>
                    </div>
                    <div class="card people_rate_card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="card-img-top">

                            <div class="user-info">
                                <figure>
                                    <img src="{{asset('site/images/avatar1.png')}}" alt="Card image cap">
                                </figure>
                                <div>
                                    <p>مهند أحمد</p>
                                    <span>مدرس ثانوي</span>
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
                            <p class="card-text"> شركة المدينة نشهد لها بالتميز والحضور
                                القوي لمنتجاتها في السوق رغم الدمار الذي
                                .لحق بالمصنع في أيام العدوان الإسرائيلي</p>
                        </div>
                    </div>
                    <div class="card people_rate_card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="card-img-top">

                            <div class="user-info">
                                <figure>
                                    <img src="{{asset('site/images/avatar1.png')}}" alt="Card image cap">
                                </figure>
                                <div>
                                    <p>مهند أحمد</p>
                                    <span>مدرس ثانوي</span>
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
                            <p class="card-text"> شركة المدينة نشهد لها بالتميز والحضور
                                القوي لمنتجاتها في السوق رغم الدمار الذي
                                .لحق بالمصنع في أيام العدوان الإسرائيلي</p>
                        </div>
                    </div>
                    <div class="card people_rate_card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="card-img-top">

                            <div class="user-info">
                                <figure>
                                    <img src="{{asset('site/images/avatar1.png')}}" alt="Card image cap">
                                </figure>
                                <div>
                                    <p>مهند أحمد</p>
                                    <span>مدرس ثانوي</span>
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
                            <p class="card-text"> شركة المدينة نشهد لها بالتميز والحضور
                                القوي لمنتجاتها في السوق رغم الدمار الذي
                                .لحق بالمصنع في أيام العدوان الإسرائيلي</p>
                        </div>
                    </div>
                    <div class="card people_rate_card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="card-img-top">

                            <div class="user-info">
                                <figure>
                                    <img src="{{asset('site/images/avatar1.png')}}" alt="Card image cap">
                                </figure>
                                <div>
                                    <p>مهند أحمد</p>
                                    <span>مدرس ثانوي</span>
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
                            <p class="card-text"> شركة المدينة نشهد لها بالتميز والحضور
                                القوي لمنتجاتها في السوق رغم الدمار الذي
                                .لحق بالمصنع في أيام العدوان الإسرائيلي</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./people rate -->
        <!-- offers -->
        <div class="offers bg">
            <div class="container">
                <div class="offer-bg">
                    <h2 class="main-title">
                        من الحملات والعروض
                    </h2>
                    <div class="owl-carousel owl-theme owl-3  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <div class="card-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.15s">
                                <figure>
                                    <img src="{{asset('site/images/Blog Photo-2.png')}}" alt="" srcset="" loading="lazy">
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


                                        <span>10/10/ 2015</span>
                                    </div>
                                    <h2> شركة المدينة للمشروبات الخفيفة
                                        فينتانا/ فيتال / سافانا</h2>
                                    <p> شركة المدينة للمشروبات الخفيفة - هي من
                                        شركة فلسطينية متخصصة في انتاج أفضل
                                        ...المشروبات الغازية و المياه المعدنية</p>
                                </div>
                            </div>
                        </a>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <div class="card-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.15s">
                                <figure>
                                    <img src="{{asset('site/images/Blog Photo-2.png')}}" alt="" srcset="" loading="lazy">
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


                                        <span>10/10/ 2015</span>
                                    </div>
                                    <h2> شركة المدينة للمشروبات الخفيفة
                                        فينتانا/ فيتال / سافانا</h2>
                                    <p> شركة المدينة للمشروبات الخفيفة - هي من
                                        شركة فلسطينية متخصصة في انتاج أفضل
                                        ...المشروبات الغازية و المياه المعدنية</p>
                                </div>
                            </div>
                        </a>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <div class="card-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.15s">
                                <figure>
                                    <img src="{{asset('site/images/Blog Photo.png')}}" alt="" srcset="" loading="lazy">
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


                                        <span>10/10/ 2015</span>
                                    </div>
                                    <h2> شركة المدينة للمشروبات الخفيفة
                                        فينتانا/ فيتال / سافانا</h2>
                                    <p> شركة المدينة للمشروبات الخفيفة - هي من
                                        شركة فلسطينية متخصصة في انتاج أفضل
                                        ...المشروبات الغازية و المياه المعدنية</p>
                                </div>
                            </div>
                        </a>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <div class="card-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.15s">
                                <figure>
                                    <img src="{{asset('site/images/Blog Photo-3.png')}}" alt="" srcset="" loading="lazy">
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


                                        <span>10/10/ 2015</span>
                                    </div>
                                    <h2> شركة المدينة للمشروبات الخفيفة
                                        فينتانا/ فيتال / سافانا</h2>
                                    <p> شركة المدينة للمشروبات الخفيفة - هي من
                                        شركة فلسطينية متخصصة في انتاج أفضل
                                        ...المشروبات الغازية و المياه المعدنية</p>
                                </div>
                            </div>
                        </a>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <div class="card-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.15s">
                                <figure>
                                    <img src="{{asset('site/images/Blog Photo-2.png')}}" alt="" srcset="" loading="lazy">
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


                                        <span>10/10/ 2015</span>
                                    </div>
                                    <h2> شركة المدينة للمشروبات الخفيفة
                                        فينتانا/ فيتال / سافانا</h2>
                                    <p> شركة المدينة للمشروبات الخفيفة - هي من
                                        شركة فلسطينية متخصصة في انتاج أفضل
                                        ...المشروبات الغازية و المياه المعدنية</p>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>
            </div>
        </div>
        <!-- ./offers -->
        <!-- Albums -->
        <div class="albums">
            <div class="container">
                <h2 class="main-title">
                    من ألبوم الصور
                </h2>
                <!-- <div class="row">
                    <div class="col-lg-4">
                        <a href="http://">
                            <div class="alubms__photo wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                                <img src="images/album0.png" alt="" class="img-fluid" srcset="" loading="lazy">
                                <div class="text">
                                    <p class="title">فينتانا (مشروبات غازية) </p>
                                    <p class="sub_title">استمتع بالطعم المنعش</p>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <a href="http://">
                                    <div class="alubms__photo wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                        <img src="images/album2.png" alt="" class="img-fluid" srcset="" loading="lazy">
                                        <div class="text">
                                            <p class="title">جوي (مياه شرب نقية)</p>
                                            <p class="sub_title">مياه شرب صحية</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="http://">
                                    <div class="alubms__photo wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <img src="images/album3.png" alt="" class="img-fluid" srcset="" loading="lazy">
                                        <div class="text">
                                            <p class="title">سافانا (مشروبات غازية) </p>
                                            <p class="sub_title">استمتع بالطعم المنعش</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <a href="#">
                            <div class="alubms__photo wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                <img src="images/album1.png" alt="" class="img-fluid" srcset="" loading="lazy">
                                <div class="text">
                                    <p class="title">فيتال (مشروبات غازية) </p>
                                    <p class="sub_title">فيتال دايما على البال</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <a href="albums.html">
                            <div class="home-album wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                                <img src="images/album-1-home.png" alt="" class="img-fluid" srcset="" loading="lazy">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="albums.html">
                            <div class="home-album wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                                <img src="images/album-2-home.png" alt="" class="img-fluid" srcset="" loading="lazy">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="albums.html">
                            <div class="home-album wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                                <img src="images/album-3-home.png" alt="" class="img-fluid" srcset="" loading="lazy">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="albums.html">
                            <div class="home-album wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                                <img src="images/album-4-home.png" alt="" class="img-fluid" srcset="" loading="lazy">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="albums.html">
                            <div class="home-album wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                                <img src="images/album-5-home.png" alt="" class="img-fluid" srcset="" loading="lazy">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="albums.html">
                            <div class="home-album wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                                <img src="images/album-6-home.png" alt="" class="img-fluid" srcset="" loading="lazy">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./Albums -->
        <!-- partainers -->
        <div class="partainers">
            <div class="container">
                <h2 class="main-title">
                    شركاؤنا في النجاح
                </h2>
                <div class="partainers__conatent">
                    <div class="owl-carousel owl-theme owl-partainers  wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay="0.1s">
                        <div class="partainers__conatent__img">
                            <img src="images/jawal.png" alt="" srcset="" loading="lazy">
                        </div>
                        <div class="partainers__conatent__img">
                            <img src="images/hadara.png" alt="" srcset="" loading="lazy">
                        </div>
                        <div class="partainers__conatent__img">
                            <img src="images/slack.png" alt="" srcset="" loading="lazy">
                        </div>
                        <div class="partainers__conatent__img">
                            <img src="images/behance.png" alt="" srcset="" loading="lazy">
                        </div>
                        <div class="partainers__conatent__img">
                            <img src="images/kharabish.png" alt="" srcset="" loading="lazy">
                        </div>
                        <div class="partainers__conatent__img">
                            <img src="images/jawal.png" alt="" srcset="" loading="lazy">
                        </div>
                        <div class="partainers__conatent__img">
                            <img src="images/hadara.png" alt="" srcset="" loading="lazy">
                        </div>
                        <div class="partainers__conatent__img">
                            <img src="images/slack.png" alt="" srcset="" loading="lazy">
                        </div>
                        <div class="partainers__conatent__img">
                            <img src="images/behance.png" alt="" srcset="" loading="lazy">
                        </div>
                        <div class="partainers__conatent__img">
                            <img src="images/kharabish.png" alt="" srcset="" loading="lazy">
                        </div>
                        <div class="partainers__conatent__img">
                            <img src="images/jawal.png" alt="" srcset="" loading="lazy">
                        </div>
                        <div class="partainers__conatent__img">
                            <img src="images/hadara.png" alt="" srcset="" loading="lazy">
                        </div>
                        <div class="partainers__conatent__img">
                            <img src="images/slack.png" alt="" srcset="" loading="lazy">
                        </div>
                        <div class="partainers__conatent__img">
                            <img src="images/behance.png" alt="" srcset="" loading="lazy">
                        </div>
                        <div class="partainers__conatent__img">
                            <img src="images/kharabish.png" alt="" srcset="" loading="lazy">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ./partainers -->
@endsection


@section('script')


@endsection


