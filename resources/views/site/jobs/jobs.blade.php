@extends('site.parent')

@section('titel','Jobs')

@section('styl')

@endsection

@section('contact')
    <div class="jobs bubbles">
        <div class="jobs__top">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol  class="breadcrumb official ">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">الرئيسية</a></li>
                        <li class="breadcrumb-item active" aria-current="page">الوظائف</li>
                    </ol>
                </nav>
                <h1>التوظيف في شركة المدينة للمشروبات الخفيفة</h1>
                <h2>نحن في شركة المدينة نسعى لبناء فريق عمل يمتاز بالاحترافية والكفاءة والإخلاص والتعاون لتقديم أفضل قيمة</h2>
            </div>
        </div>

        <div class="content">
            <div class="container">
                <div class="top">
                    <h3>جميع الوظائف</h3>
                    <div class="nav-search d-flex justify-content-center align-items-center">
                        <p class="word-search">اعرض حسب:</p>
                        <select name="search_by"  id="sort-select">
                            <option value="desc" {{ request()->sort == 'desc' ? 'selected':'' }}>الأحدث</option>
                            <option value="asc" {{ request()->sort == 'asc' ? 'selected':'' }}>الأقدم</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    @foreach($jobs as $job)
                    <div class="col-md-6">
                        <div class="job-card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">

                            <div class="roles end" >
                                <h4>{{$job->name}}</h4>
                                <div class="d-flex align-items-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.9" height="17.5" viewBox="0 0 15.9 17.5">
                                        <g id="Group_52415" data-name="Group 52415" transform="translate(-1199.636 -537.75)">
                                            <g id="Calendar" transform="translate(1200.386 538.5)">
                                                <path id="Line_200" d="M0,.473H14.259" transform="translate(0.074 5.451)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Line_201" d="M.459.473H.466" transform="translate(10.295 8.575)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Line_202" d="M.459.473H.466" transform="translate(6.745 8.575)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Line_203" d="M.459.473H.466" transform="translate(3.188 8.575)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Line_204" d="M.459.473H.466" transform="translate(10.295 11.684)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Line_205" d="M.459.473H.466" transform="translate(6.745 11.684)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Line_206" d="M.459.473H.466" transform="translate(3.188 11.684)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Line_207" d="M.463,0V2.633" transform="translate(9.972 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Line_208" d="M.463,0V2.633" transform="translate(3.509 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Path" d="M10.591,0H3.817C1.467,0,0,1.309,0,3.714v7.24a3.475,3.475,0,0,0,3.817,3.783h6.766c2.357,0,3.817-1.316,3.817-3.722v-7.3C14.407,1.309,12.947,0,10.591,0Z" transform="translate(0 1.263)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                            </g>
                                        </g>
                                    </svg>

                                    <p class="first">تبدأ الوظيفة في تاريخ</p>
                                    <p class="date">{{$job->start_date}}</p>
                                </div>
                                <div class="d-flex align-items-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.9" height="17.5" viewBox="0 0 15.9 17.5">
                                        <g id="Group_52415" data-name="Group 52415" transform="translate(-1199.636 -537.75)">
                                            <g id="Calendar" transform="translate(1200.386 538.5)">
                                                <path id="Line_200" d="M0,.473H14.259" transform="translate(0.074 5.451)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Line_201" d="M.459.473H.466" transform="translate(10.295 8.575)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Line_202" d="M.459.473H.466" transform="translate(6.745 8.575)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Line_203" d="M.459.473H.466" transform="translate(3.188 8.575)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Line_204" d="M.459.473H.466" transform="translate(10.295 11.684)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Line_205" d="M.459.473H.466" transform="translate(6.745 11.684)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Line_206" d="M.459.473H.466" transform="translate(3.188 11.684)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Line_207" d="M.463,0V2.633" transform="translate(9.972 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Line_208" d="M.463,0V2.633" transform="translate(3.509 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                                <path id="Path" d="M10.591,0H3.817C1.467,0,0,1.309,0,3.714v7.24a3.475,3.475,0,0,0,3.817,3.783h6.766c2.357,0,3.817-1.316,3.817-3.722v-7.3C14.407,1.309,12.947,0,10.591,0Z" transform="translate(0 1.263)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                            </g>
                                        </g>
                                    </svg>

                                    <p class="first">تنتهي الوظيفة في تاريخ</p>
                                    <p class="date">{{$job->expiry_date}}</p>
                                </div>
                            </div>
                            <a href="{{route('jobs-details',$job->id)}}"
                               class="btn btn-primary custom-botton wow fadeInUp" data-wow-duration="1s"
                               data-wow-delay="0.4s">
                                تفاصيل الوظيفة
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

@endsection


@section('script')
            <script>
                $(document).on('change','#sort-select',function (){

                var sort = $(this).val();
                window.location.href = '{{ route('show-jobs') }}'+'?sort=' + sort
                });
            </script>
@endsection


