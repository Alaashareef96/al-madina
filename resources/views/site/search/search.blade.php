@extends('site.parent')

@section('titel','Search')

@section('styl')

@endsection

@section('contact')

    <div class="search">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol  class="breadcrumb official ">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">نتائج البحث</li>
                </ol>
            </nav>
            <div class="nav-search">
                <div>
                    <span class="number-of-search-result">{{$data_count}} نتائج </span>
                    <span class="result"> توافق بحثك عن {{$search}} </span>
                </div>
                <div>
                    <span class="word-search">اعرض حسب:</span>
                    <select name="search_by" id="sort_by">
                        <option value="desc"@if($order == 'desc') selected @endif >الأحدث</option>
                        <option value="asc" @if($order == 'asc') selected @endif >الأقدم</option>
                    </select>
                </div>
            </div>
            <div class="row">
                @foreach($offers as $offer)
                <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                    <div class="card-search wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <figure>
                            <img src="{{url(Storage::url($offer->img->url_image ?? ''))}}" alt="">
                        </figure>
                        <div class="body-search px-lg-3">
                            <div class="date">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                                        <g id="Group_52415" data-name="Group 52415" transform="translate(-1191.5 -530)">
                                          <rect id="Rectangle_12" data-name="Rectangle 12" width="24" height="24" rx="12" transform="translate(1192 530.5)" fill="#fff" stroke="#ebeaee" stroke-width="1"/>
                                          <g id="Calendar" transform="translate(1197.844 535.657)">
                                            <path id="Line_200" d="M0,.473H12.255" transform="translate(0.064 4.618)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.1"/>
                                            <path id="Line_201" d="M.459.473H.465" transform="translate(8.783 7.303)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.1"/>
                                            <path id="Line_202" d="M.459.473H.465" transform="translate(5.733 7.303)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.1"/>
                                            <path id="Line_203" d="M.459.473H.465" transform="translate(2.675 7.303)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.1"/>
                                            <path id="Line_204" d="M.459.473H.465" transform="translate(8.783 9.975)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.1"/>
                                            <path id="Line_205" d="M.459.473H.465" transform="translate(5.733 9.975)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.1"/>
                                            <path id="Line_206" d="M.459.473H.465" transform="translate(2.675 9.975)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.1"/>
                                            <path id="Line_207" d="M.463,0V2.263" transform="translate(8.505 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.1"/>
                                            <path id="Line_208" d="M.463,0V2.263" transform="translate(2.951 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.1"/>
                                            <path id="Path" d="M9.1,0H3.28A2.958,2.958,0,0,0,0,3.192V9.414a2.987,2.987,0,0,0,3.28,3.251H9.1a2.96,2.96,0,0,0,3.28-3.2V3.192A2.948,2.948,0,0,0,9.1,0Z" transform="translate(0 1.086)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.1"/>
                                          </g>
                                        </g>
                                      </svg>
                                </span>
                                <span>{{$offer->created_at}}</span>
                            </div>
                            <h2>
                                {{$offer->name}}
                            </h2>
                            <p> {{ \Illuminate\Support\Str::limit($offer->details, 200, $end='...') }}</p>

                        </div>
                        <div class="footer-search">
                            <a href="{{route('offer-details',$offer->id)}}">
                                <svg id="_1._Buttons_5._Round_3._Large_Icon" data-name="1. Buttons / 5. Round / 3. Large / Icon" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                                    <g id="Large">
                                        <g id="Group_51747" data-name="Group 51747">
                                            <g id="_Background" data-name="◼️ Background" fill="#fff">
                                                <path d="M 22 43.5 C 19.09729957580566 43.5 16.28169059753418 42.93161010742188 13.63138961791992 41.81063079833984 C 11.07124042510986 40.72777938842773 8.771889686584473 39.1774787902832 6.797210216522217 37.20280075073242 C 4.822519779205322 35.22811126708984 3.272219896316528 32.92876052856445 2.189369916915894 30.36861991882324 C 1.068390011787415 27.71830940246582 0.5 24.90270042419434 0.5 22 C 0.5 19.09729957580566 1.068390011787415 16.28169059753418 2.189369916915894 13.63138961791992 C 3.272219896316528 11.07124042510986 4.822519779205322 8.771889686584473 6.797210216522217 6.797210216522217 C 8.771889686584473 4.822519779205322 11.07124042510986 3.272219896316528 13.63138961791992 2.189369916915894 C 16.28169059753418 1.068390011787415 19.09729957580566 0.5 22 0.5 C 24.90270042419434 0.5 27.71830940246582 1.068390011787415 30.36861991882324 2.189369916915894 C 32.92876052856445 3.272219896316528 35.22811126708984 4.822519779205322 37.20280075073242 6.797210216522217 C 39.1774787902832 8.771889686584473 40.72777938842773 11.07124042510986 41.81063079833984 13.63138961791992 C 42.93161010742188 16.28169059753418 43.5 19.09729957580566 43.5 22 C 43.5 24.90270042419434 42.93161010742188 27.71830940246582 41.81063079833984 30.36861991882324 C 40.72777938842773 32.92876052856445 39.1774787902832 35.22811126708984 37.20280075073242 37.20280075073242 C 35.22811126708984 39.1774787902832 32.92876052856445 40.72777938842773 30.36861991882324 41.81063079833984 C 27.71830940246582 42.93161010742188 24.90270042419434 43.5 22 43.5 Z" stroke="none"/>
                                                <path d="M 22 1 C 19.16457939147949 1 16.41449928283691 1.555099487304688 13.8261604309082 2.649871826171875 C 11.32561111450195 3.707511901855469 9.079681396484375 5.221828460693359 7.150760650634766 7.150760650634766 C 5.221828460693359 9.079681396484375 3.707511901855469 11.32561111450195 2.649871826171875 13.8261604309082 C 1.555099487304688 16.41449928283691 1 19.16457939147949 1 22 C 1 24.83542060852051 1.555099487304688 27.58550071716309 2.649871826171875 30.1738395690918 C 3.707511901855469 32.67438125610352 5.221828460693359 34.92031097412109 7.150760650634766 36.84923934936523 C 9.079681396484375 38.77817153930664 11.32561111450195 40.29248046875 13.8261604309082 41.35012817382812 C 16.41449928283691 42.44490051269531 19.16457939147949 43 22 43 C 24.83542060852051 43 27.58550071716309 42.44490051269531 30.1738395690918 41.35012817382812 C 32.67438125610352 40.29248046875 34.92031097412109 38.77817153930664 36.84923934936523 36.84923934936523 C 38.77817153930664 34.92031097412109 40.29248046875 32.67438125610352 41.35012817382812 30.1738395690918 C 42.44490051269531 27.58550071716309 43 24.83542060852051 43 22 C 43 19.16457939147949 42.44490051269531 16.41449928283691 41.35012817382812 13.8261604309082 C 40.29248046875 11.32561111450195 38.77817153930664 9.079681396484375 36.84923934936523 7.150760650634766 C 34.92031097412109 5.221828460693359 32.67438125610352 3.707511901855469 30.1738395690918 2.649871826171875 C 27.58550071716309 1.555099487304688 24.83542060852051 1 22 1 M 22 0 C 34.15026092529297 0 44 9.8497314453125 44 22 C 44 34.15026092529297 34.15026092529297 44 22 44 C 9.8497314453125 44 0 34.15026092529297 0 22 C 0 9.8497314453125 9.8497314453125 0 22 0 Z" stroke="none" fill="#ebeaee"/>
                                            </g>
                                            <g id="Icon_Glyph_25_Chevron_Right" data-name="Icon/Glyph/25/Chevron/Right" transform="translate(9 9)">
                                                <g id="iconspace_Down_25px">
                                                    <path id="Path" d="M26,0H0V26H26Z" fill="none"/>
                                                    <g id="angle-down" transform="translate(9.229 18.976) rotate(-90)">
                                                        <path id="Path-2" data-name="Path" d="M10.656,6.194a1.04,1.04,0,0,1-1.466,0L5.456,2.512,1.774,6.194A1.041,1.041,0,1,1,.308,4.717L4.717.308a1.04,1.04,0,0,1,1.477,0l4.462,4.41a1.04,1.04,0,0,1,0,1.477Z"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
           @foreach($products as $product)
                <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                    <div class="card-search product-card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <figure>
                            <img src="{{url(Storage::url($product->image->url_image ?? ''))}}" alt="">
                            <span class="size">{{$product->size->name}}</span>
                        </figure>
                        <div class="body-search px-lg-3">

                            <h2>
                                {{$product->brand->name}}
                            </h2>
                            <p>{{$product->name}}
                                بطعم {{$product->taste->name}}</p>

                        </div>

                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection


@section('script')

    <script>
        $(document).on('change','#sort_by',function (){
            sort = $(this).val();

            window.location.href = '{{route('search')}}?search={{ $search }}&sort=' + sort;

        })
    </script>

@endsection


