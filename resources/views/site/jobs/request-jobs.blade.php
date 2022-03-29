@extends('site.parent')

@section('titel','Request-jobs')


@section('contact')

    <div class="request_job bubbles">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol  class="breadcrumb official ">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="{{route('show-jobs')}}">الوظائف</a></li>
                    <li class="breadcrumb-item active" aria-current="page">تقديم طلب توظيف</li>
                </ol>
            </nav>
            <div class="form">
                <h1>نموذج التقديم للوظيفة</h1>
                <form id="create-form-request">
                    @csrf
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

                        <p>رفع صورة شخصية</p>
                        <input type="file" name="image" id="upload-image" hidden >
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text"  name="job_id" value="{{$id}}" hidden>
                                <label for="recipient-name" class="col-form-label">الاسم كاملا:</label>
                                <input type="text" name="name" class="form-control custom-input" id="recipient-name" placeholder="أدخل الاسم كاملا">
                                <span class="name" style="color:red"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="gender" class="col-form-label">الجنس:</label>
                                <div class="custom-select-main">
                                    <select name="gender" id="gender" class="form-control custom-input">
                                        <option value="1">اختر نوع الجنس</option>
                                        <option value="male">ذكر</option>
                                        <option value="female">أنثى</option>
                                    </select>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </div>
                                <span class="gender" style="color:red"></span>
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
                                <label for="address" class="col-form-label">عنوان السكن:</label>
                                <input type="text" class="form-control custom-input" id="address" name="address" placeholder="أدخل عنوان السكن">
                                <span class="address" style="color:red"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone" class="col-form-label">رقم المحمول:</label>
                                <input type="text" class="form-control custom-input" name="phone" id="phone" placeholder="أدخل رقم المحمول">
                                <span class="phone" style="color:red"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="dob" class="col-form-label">تاريخ الميلاد:</label>
                                <input type="date" class="form-control custom-input" name="dob" id="dob" placeholder="ادخل تاريخ الميلاد">
                                <span class="dob" style="color:red"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="status" class="col-form-label">الحالة الاجتماعية:</label>
                                <div class="custom-select-main">
                                    <select name="status" id="status" class="form-control custom-input">
                                        <option value="1">اختر الحالة الاجتماعية</option>
                                        <option value="single">اعزب/عزباء</option>
                                        <option value="married">متزوج/ة</option>
                                        <option value="widower">ارمل/ة</option>
                                        <option value="absolute">مطلق/ة</option>
                                    </select>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </div>
                                <span class="status" style="color:red"></span>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="study" class="col-form-label">المؤهلات:</label>
                                <input type="text" class="form-control custom-input" name="study" id="study" placeholder="ادخل المؤهلات العلمية">
                                <span class="study" style="color:red"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="cv" class="col-form-label">السيرة الذاتية:</label>
                                <input type="file" class="put-file cv-input" name="cv" hidden>
                                <div class="upload-file">
                                    <input readonly type="text" class="form-control custom-input cv-lable"  id="upload-file" placeholder="ارفق السيرة الذاتية">
                                    <div class="text-upload">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20.538" viewBox="0 0 20 20.538">
                                            <g id="Upload" transform="translate(-0.021 20.56) rotate(-90)">
                                                <path id="Stroke_1" data-name="Stroke 1" d="M12.244,4.618V3.685A3.685,3.685,0,0,0,8.559,0H3.684A3.685,3.685,0,0,0,0,3.685v11.13A3.685,3.685,0,0,0,3.684,18.5H8.569a3.675,3.675,0,0,0,3.675-3.674v-.943" transform="translate(0.772 0.771)" fill="none" stroke="#8ec641" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Stroke_3" data-name="Stroke 3" d="M12.041.5H0" transform="translate(7.768 9.521)" fill="none" stroke="#8ec641" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Stroke_5" data-name="Stroke 5" d="M0,0,2.928,2.915,0,5.831" transform="translate(16.881 7.106)" fill="none" stroke="#8ec641" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                            </g>
                                        </svg>
                                        <span>ارفع ملف</span>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="university" class="col-form-label">الشهادة الجامعية: </label>
                                <small>(يمكنك رفع أكثر من صورة)</small>
                                <input type="file" class="put-file university-input" name="university[]" id="fUpload" multiple  hidden >
                                <div class="upload-file">
                                    <input readonly  type="text" class="form-control custom-input university-lable"  id="upload-file-university"  placeholder="أرفق الشهادة الجامعية" multiple>
                                    <div class="text-upload">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20.538" viewBox="0 0 20 20.538">
                                            <g id="Upload" transform="translate(-0.021 20.56) rotate(-90)">
                                                <path id="Stroke_1" data-name="Stroke 1" d="M12.244,4.618V3.685A3.685,3.685,0,0,0,8.559,0H3.684A3.685,3.685,0,0,0,0,3.685v11.13A3.685,3.685,0,0,0,3.684,18.5H8.569a3.675,3.675,0,0,0,3.675-3.674v-.943" transform="translate(0.772 0.771)" fill="none" stroke="#8ec641" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Stroke_3" data-name="Stroke 3" d="M12.041.5H0" transform="translate(7.768 9.521)" fill="none" stroke="#8ec641" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Stroke_5" data-name="Stroke 5" d="M0,0,2.928,2.915,0,5.831" transform="translate(16.881 7.106)" fill="none" stroke="#8ec641" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                            </g>
                                        </svg>
                                        <span>ارفع صورة</span>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="col-lg-6 mx-auto">
                            <button  type="button" onclick="store()"  class="btn btn-primary custom-botton" >
                                تقديم الطلب
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
        function store() {
            let formData = new FormData($('#create-form-request')[0]);

            axios.post('/al-madina/save-request-jobs', formData, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                }
            }).then(function (response) {
                console.log(response);
                // window.location.reload();
                document.getElementById('create-form-request').reset();
                $('.bd-example-modal-lg').modal('show');

            }).catch(function (error) {
                console.log(error.response.data.message);
                $('.name').text('');
                $('.gender').text('');
                $('.email').text('');
                $('.address').text('');
                $('.phone').text('');
                $('.dob').text('');
                $('.status').text('');
                $('.study').text('');


                if(error.response.data.message.name){
                    $('.name').text(error.response.data.message.name[0]);
                }
                if(error.response.data.message.gender) {
                    $('.gender').text(error.response.data.message.gender[0]);
                }
                if(error.response.data.message.email) {
                    $('.email').text(error.response.data.message.email[0]);
                }
                if(error.response.data.message.address) {
                    $('.address').text(error.response.data.message.address[0]);
                }
                if(error.response.data.message.phone) {
                    $('.phone').text(error.response.data.message.phone[0]);
                }
                if(error.response.data.message.dob) {
                    $('.dob').text(error.response.data.message.dob[0]);
                }
                if(error.response.data.message.status) {
                    $('.status').text(error.response.data.message.status[0]);
                }
                if(error.response.data.message.study) {
                    $('.study').text(error.response.data.message.study[0]);
                }


            });

        }
    </script>

    <script>
        $(document).on('change','.cv-input',function() {
            $('.cv-lable').attr("placeholder",$(this).val());
        })

    </script>

    <script>
        $(document).on('change','.university-input',function() {
            var fp = $("#fUpload");
            var lg = fp[0].files.length;
            $('.university-lable').attr("placeholder",lg + '  ملفات');
            // alert(lg);
        })

    </script>



@endsection


