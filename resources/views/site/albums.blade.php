@extends('site.parent')

@section('titel','Albums')


@section('contact')
    <div class="albums-page bubbles">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol  class="breadcrumb official ">
                    <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">الألبومات</li>
                </ol>
            </nav>
        </div>
        @foreach($albums as $album)
        <div class="album-section wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
            <div class="container">
                <h2>{{$album->name}}</h2>
                <p>{{$album->details}}</p>
                <div class="row">

                    <div class="col-lg-12">
                        <figure class="album-img" data-fancybox="gallery"  href="{{url(Storage::url($album->video->url_video ?? ''))}}">
                            <img src="images/album-1.png" alt="" class="img-fluid" srcset="">
                            <div class="play">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </div>
                        </figure>

                    </div>
                    @php
                      $images=  $album->images->filter(function ($value, $key) {
                                return $value->url_images != null;
                            })
                    @endphp
                    @foreach($images as $image)

                        @if($loop->iteration < 4)
                            @if($image->url_images)
                                <div class="col-lg-4 col-6">
                                    <figure @if(count($images)>3 && $loop->iteration == 3)class="more-imgs"@endif data-fancybox="gallery-{{$album->getKey()}}"  href="{{url(Storage::url($image->url_images ?? ''))}}">
                                        <img src="{{url(Storage::url($image->url_images ?? ''))}}" alt="" class="img-fluid" srcset="">
                                        @if(count($images)>3 && $loop->iteration == 3)
                                        <span>+{{count($images) - 3}}</span>
                                            @endif
                                    </figure>
                                </div>
                            @endif

                            @else

                            @push('more-image')

                            @if($image->url_images)
                                    <img src="{{url(Storage::url($image->url_images ?? ''))}}" alt="" class="img-fluid" srcset="" data-fancybox="gallery-{{$album->getKey()}}" >
                                @endif

                            @endpush
                        @endif

                    @endforeach
                    <div style="display:none;">
                        @stack('more-image')
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection


@section('script')


@endsection


