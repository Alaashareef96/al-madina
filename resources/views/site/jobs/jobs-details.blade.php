@extends('site.parent')

@section('titel','jobs-details')



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
                <h2>نحن في شركة المدينة نسعى لبناء فريق عمل يمتاز بالاحترافية والكفاءة والإخلاص والتعاون لتقديم أفضل
                    قيمة</h2>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <h3 class="wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.1s">شروط التقديم للوظيفة :</h3>
                <?php $i = 0; ?>
                @foreach($jobs->terms as $terms_job)
                <div class="roles-jobs">
                    <p class="wow fadeInUp" data-wow-duration="1s"
                       data-wow-delay="0.2s">
                        <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                        <span>{{$terms_job}}</span>
                    </p>
                </div>
                @endforeach
                <div class="mt-5 d-flex flex-wrap">
                    <div class="column-table">
                        <p class="head">المسمى الوظيفي</p>
                        <p class="body">{{$jobs->name}}</p>
                    </div>
                    <div class="column-table">
                        <p class="head">تاريخ بداية التقديم </p>
                        <p class="body">{{$jobs->start_date}}</p>
                    </div>
                    <div class="column-table">
                        <p class="head">تاريخ نهاية التقديم  </p>
                        <p class="body">{{$jobs->expiry_date}}</p>
                    </div>
                    <div class="column-table">
                        <p class="head">الحالة</p>
                        <p class="body">{{$jobs->visibility}}</p>
                    </div>
                    <div class="column-table">
                        <p class="head">نموذج التسجيل </p>
                        <p class="body">
                            @if($jobs->status == 1)
                            <a href="{{route('request-jobs',$jobs->id)}}"
                               class="btn btn-info custom-botton">
                                تقديم الان
                            </a>
                            @else
                                <a
                                   class="btn btn-danger">
                                    {{$jobs->visibility}}
                                </a>
                                @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('script')


@endsection


