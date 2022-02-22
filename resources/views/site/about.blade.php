@extends('site.parent')

@section('titel','About')

@section('styl')

@endsection

@section('contact')
    <div class="about bubbles">
        <!-- top -->
        <div class="top">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                        <li class="breadcrumb-item active" aria-current="page">من نحن</li>
                    </ol>
                </nav>
                <figure class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <img src="" alt="" srcset="" loading="lazy">
                </figure>
            </div>
        </div>
        <!-- ./top -->
        <!-- .content -->
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                            {{$about->name}}
                        </h1>
                        <div class="paragraph mb-lg-0 mb-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            استطاعت شركة المدينة للمشروبات الخفيفة من تحقيق النجاح حيث
                            أصبحت من كبرى الشركات في مجالها في السوق الفلسطينية
                            وأضحت منتجاتها تحظي برضي الشريحة العريضة من المستهلكين مما
                            أعطي الشركة الفرصة بتوسيع مساهمتها في السوق المحلي خلال
                            فتره وجيزة تسعي الشركة إلى توسيع منتجاتها وفتح أفاق جديدة
                            للتصدير للخارج، وتعتمد الشركة في إنتاجها على تحقيق الجودة العالية
                            وفق أحدث تكنولوجيا التصنيع في العالم. وبأيدي وعقول فلسطينية
                            قادرة وكفؤة، ولدي الشركة خطط مستقبلية لدخول الأسواق المحلية
                            .بمنتجات متعددة أخري
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <a href="https://www.youtube.com/embed/9_5wHw6l11o" data-fancybox>
                            <div class="video">
                                <figure class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                    <img src="{{asset('site/images/about-2.png')}}" class="img-fluid">
                                    <div class="play">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </div>
                                </figure>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="about__content">
                <div class="about__content__top">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                            <g id="Group_52377" data-name="Group 52377" transform="translate(-1063.5 -1425)">
                                <rect id="Rectangle" width="60" height="60" rx="30" transform="translate(1063.5 1425)"
                                      fill="#def3ff" />
                                <g id="Iconly_Two-tone_Message" data-name="Iconly/Two-tone/Message"
                                   transform="translate(1079.25 1441.625)">
                                    <g id="Message" transform="translate(2.25 3.375)">
                                        <path id="Path_445" d="M14.119,0,8.8,4.286a2.774,2.774,0,0,1-3.427,0L0,0"
                                              transform="translate(4.935 6.94)" fill="none" stroke="#80bfff"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                              stroke-width="2.2" />
                                        <path id="Rectangle_511"
                                              d="M6.1,0H17.866a6.186,6.186,0,0,1,4.468,1.985,6.261,6.261,0,0,1,1.655,4.623v8.147a6.261,6.261,0,0,1-1.655,4.623,6.186,6.186,0,0,1-4.468,1.985H6.1C2.456,21.361,0,18.4,0,14.754V6.607C0,2.965,2.456,0,6.1,0Z"
                                              transform="translate(0 0)" fill="none" stroke="#004890"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                              stroke-width="2.2" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">الرسالة:</p>
                </div>
                <div class="body wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <p> النهوض بالاقتصاد الفلسطيني وذلك بإنتاج أفضل المنتجات وبالجودة العالمية بالإضافة إلى تنويع
                        المنتجات لتلبي حاجة السوق المحلي ذلك بالتعاون مع
                        مؤسسات القطاع الخاص والمؤسسات الاجتماعية.</p>
                </div>
            </div>
            <div class="about__content mt-4">
                <div class="about__content__top">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                            <g id="Group_52377" data-name="Group 52377" transform="translate(-1063.5 -1425)">
                                <rect id="Rectangle" width="60" height="60" rx="30" transform="translate(1063.5 1425)"
                                      fill="#f0fbe2" />
                                <g id="Iconly_Two-tone_Show" data-name="Iconly/Two-tone/Show"
                                   transform="translate(1078.75 1440.776)">
                                    <g id="Show" transform="translate(2.75 4.751)">
                                        <path id="Stroke_1" data-name="Stroke 1"
                                              d="M8.2,4.1A4.1,4.1,0,1,1,4.1,0,4.1,4.1,0,0,1,8.2,4.1Z"
                                              transform="translate(7.899 5.371)" fill="none" stroke="#c4e29b"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                              stroke-width="2.2" />
                                        <path id="Stroke_3" data-name="Stroke 3"
                                              d="M12,18.946c4.94,0,9.459-3.552,12-9.473C21.456,3.552,16.938,0,12,0H12C7.062,0,2.544,3.552,0,9.473c2.544,5.921,7.062,9.473,12,9.473Z"
                                              transform="translate(0 0)" fill="none" stroke="#8ec641"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                              stroke-width="2.2" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.35s">الأهداف:</p>
                </div>
                <div class="body wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    <p> تهدف الشركة إلى تطوير الاقتصاد الوطني من خلال توفير منتجات غذائية عالية الجودة لتحل محل المنتجات
                        الواردة للسوق المحلي ويتأتى ذلك من خلال
                        الاعتماد على تشغيل عدد من الخبراء والمختصين والعاملين داخل الشركة و خارجها من ذوي الخبرة
                        والكفاءة العالية في مجال التصنيع الغذائي وبالذات
                        المشروبات كما و إنها سعت ومنذ البداية إلي الارتقاء بالمنتج الوطني ليصل إلي الجودة العالمية، وذلك
                        بتوفير المواد الخام ذات الجودة العالية والمميزة
                        وتسعى الشركة وباستمرار لخلق البدائل المحلية ما أمكن وتحسين الإنتاج والارتقاء بجودته مما يقلل
                        الاعتماد على الخارج.
                        كما وهناك الهدف الاجتماعي حيث تؤثر الشركة وتتأثر بمجريات الأحداث علي الساحة الفلسطينية حيث تقوم
                        الشركة بمساعدة الأطفال الفلسطينيين،
                        وقد نفذت الشركة العديد من المشاريع الداعمة للمجتمع الفلسطيني من خلال دراسة الاحتياجات الملحة
                        وتقديم العون والمساعدة في الوقت المناسب.</p>
                </div>
            </div>
            <div class="about__content mt-4">
                <div class="about__content__top">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                            <g id="Group_52377" data-name="Group 52377" transform="translate(-1063.5 -1425)">
                                <rect id="Rectangle" width="60" height="60" rx="30" transform="translate(1063.5 1425)"
                                      fill="#f0fbe2" />
                                <g id="Iconly_Two-tone_3_User" data-name="Iconly/Two-tone/3 User"
                                   transform="translate(1079.812 1441.77)">
                                    <g id="_3_User" data-name="3 User" transform="translate(1.688 4.188)">
                                        <path id="Stroke_1" data-name="Stroke 1" d="M0,6.79A3.395,3.395,0,1,0,0,0"
                                              transform="translate(18.614 1.102)" fill="none" stroke="#c4e29b"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                              stroke-width="2.2" />
                                        <path id="Stroke_3" data-name="Stroke 3"
                                              d="M0,0A11.041,11.041,0,0,1,1.665.241a2.735,2.735,0,0,1,2,1.145,1.616,1.616,0,0,1,0,1.386,2.763,2.763,0,0,1-2,1.151"
                                              transform="translate(20.175 11.581)" fill="none" stroke="#8ec641"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                              stroke-width="2.2" />
                                        <path id="Stroke_5" data-name="Stroke 5" d="M3.4,6.79A3.395,3.395,0,1,1,3.4,0"
                                              transform="translate(1.99 1.102)" fill="none" stroke="#c4e29b"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                              stroke-width="2.2" />
                                        <path id="Stroke_7" data-name="Stroke 7"
                                              d="M3.824,0A11.041,11.041,0,0,0,2.16.241a2.731,2.731,0,0,0-2,1.145,1.609,1.609,0,0,0,0,1.386,2.759,2.759,0,0,0,2,1.151"
                                              transform="translate(0 11.581)" fill="none" stroke="#8ec641"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                              stroke-width="2.2" />
                                        <path id="Stroke_9" data-name="Stroke 9"
                                              d="M7.045,0c3.8,0,7.045.575,7.045,2.876s-3.224,2.9-7.045,2.9C3.245,5.772,0,5.2,0,2.9S3.224,0,7.045,0Z"
                                              transform="translate(4.949 12.313)" fill="none" stroke="#8ec641"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                              stroke-width="2.2" />
                                        <path id="Stroke_11" data-name="Stroke 11"
                                              d="M4.515,9.031A4.515,4.515,0,1,1,9.03,4.515,4.5,4.5,0,0,1,4.515,9.031Z"
                                              transform="translate(7.48 0)" fill="none" stroke="#c4e29b"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                              stroke-width="2.2" />
                                    </g>
                                </g>
                            </g>
                        </svg>

                    </span>
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.45s">المساهمة الاجتماعية:</p>
                </div>
                <div class="body wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <p> تقوم الشركة بتشجيع الطاقات الخلاقة المبدعة القادرة علي إنشاء اقتصاد وطني مستقل قادر علي تنمية
                        وتطوير السوق المحلي ويقلل ما أمكن من
                        الاعتماد علي الاستيراد من الأسواق الخارجية ، ونحن نؤمن بأننا قادرون علي استغلال مواردنا المتاحة
                        رغم الصعاب لتقوية أركان المجتمع الفلسطيني
                        اقتصاديا واجتماعيا ، وقد قمنا بدعم مشاريع دعم الطالب الفلسطيني بالإضافة إلي مساهمتنا في تعزيز
                        قدرة الطبقات الفقيرة علي العيش بكرامة
                        وذلك بتقديم يد العون للمحتاجين ، ولكن مع هذا فتركيزنا علي الطفل الفلسطيني الذي هو عماد المستقبل
                        حيث تركزت مساعدتنا الاجتماعية والإنسانية
                        للأطفال في مجال التعليم والصحة ونسعى أن نقدم المزيد في المستقبل إنشاء الله.</p>
                </div>
            </div>
        </div>
        <div class="our-team">

            <div class="note">
                <div class="container">
                    <h2 class="main-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        فريق العمل
                    </h2>
                    <p class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">يتشكل مجلس الإدارة
                        لشركة المدينة للمشروبات الخفيفة من عدد من رجال الأعمال الفلسطيني يعملون علي اختيار أفضل الطاقات
                        والكفاءات للعمل بالشركة ويعمل الآن ما
                        يقارب من 120 موظفا و عاملا ، يعملون من أجل تطوير منتجات الشركة وإيصالها إلي المستهلكين في أفضل
                        صورة، وتقدم شركة المدينة للعاملين كل ما يحتاجونه في
                        سبيل تطويرهم وتعزيز مكانتهم المهنية باستمرار كي يواكبوا كل جديد وكل حديث في مجال الصناعة و
                        الإدارة وغيرها من وسائل التطوير.</p>
                </div>
            </div>
            <div class="members">
                <div class="container">
                    <h2 class="main-title-secondary wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        أعضاء الفريق
                    </h2>
                    <div class="owl-carousel owl-theme owl-team  wow fadeInUp" data-wow-duration="1s"
                         data-wow-delay="0.1s">
                        <div class="card people_rate_card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="card-img-top column">
                                <div class="user-info column img-size">
                                    <figure>
                                        <img src="images/member1.png" alt="Card image cap">
                                    </figure>
                                    <div class="text-center">
                                        <p>عبدالرحمن السلطان</p>
                                        <span>مدير الادارة</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card people_rate_card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="card-img-top column">

                                <div class="user-info column img-size">
                                    <figure>
                                        <img src="images/member2.png" alt="Card image cap">
                                    </figure>
                                    <div class="text-center">
                                        <p>محمد عبدالله</p>
                                        <span>مهندس برمجيات</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card people_rate_card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="card-img-top column">

                                <div class="user-info column img-size">
                                    <figure>
                                        <img src="images/member3.png" alt="Card image cap">
                                    </figure>
                                    <div class="text-center">
                                        <p>عبدالرحيم المطيري</p>
                                        <span>مدرس ثانوي</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card people_rate_card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="card-img-top column">

                                <div class="user-info column img-size">
                                    <figure>
                                        <img src="images/member4.png" alt="Card image cap">
                                    </figure>
                                    <div class="text-center">
                                        <p>عبدالكريم الخطيب</p>
                                        <span>مصمم جرافيك</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card people_rate_card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="card-img-top column">

                                <div class="user-info column img-size">
                                    <figure>
                                        <img src="images/avatar1.png" alt="Card image cap">
                                    </figure>
                                    <div class="text-center">
                                        <p>مهند أحمد</p>
                                        <span>مدرس ثانوي</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card people_rate_card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="card-img-top column">

                                <div class="user-info column img-size">
                                    <figure>
                                        <img src="images/avatar1.png" alt="Card image cap">
                                    </figure>
                                    <div class="text-center">
                                        <p>مهند أحمد</p>
                                        <span>مدرس ثانوي</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- .content -->

    </div>

@endsection


@section('script')
    <script>
        var words = ['المدينة','المدينه']
        for (let index = 0; index < words.length; index++) {
            $('.title')[0].innerHTML = $('.title')[0].innerHTML.replace(words[index],'<span style="color:var(--green)">'+words[index]+'</span>');
        }
    </script>

@endsection


