<div class="modal custom-modal custom-modal-product fade product_details" id="product_details"  tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">

<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h2>{{trans('site/product.Product_details')}}</h2>
            <form>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card product-card ">
                            <figure class="card-img-top">
                                <img src="{{url(Storage::url($show->image->url_image ?? ''))}}" alt="Card image cap">
                                <span >{{$show->size->name ?? ''}}</span>
                            </figure>
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <div class="title">
                            {{$show->brand->name ?? ''}}
                        </div>
                        <div class="subtitle" >
                              {{$show->name}}
                        </div>

                        <div class="mokawenat">
                            <h5>{{trans('site/product.Product_components')}}</h5>
                            <p>{{$show->details}}</p>
                        </div>
                        <div class="value">
                            <h5>{{trans('site/product.Nutritional_value')}}</h5>
                            <ul>
                                <li>
                                    <span class="type">{{trans('site/product.power')}}</span>
                                    <span class="number">{{$show->calories}}</span>
                                </li>
                                <li>
                                    <span class="type">{{trans('site/product.fats')}} </span>
                                    <span class="number">{{$show->fats}}</span>
                                </li>
                                <li>
                                    <span class="type">{{trans('site/product.proteins')}}</span>
                                    <span class="number">{{$show->protein}}</span>
                                </li>
                                <li>
                                    <span class="type">{{trans('site/product.carbohydrate')}}</span>
                                    <span class="number">{{$show->carbohydrate}}</span>
                                </li>
                                <li>
                                    <span class="type">{{trans('site/product.vitamin')}}</span>
                                    <span class="number">{{$show->vitamin}}</span>
                                </li>
                            </ul>
                        </div>
                        @if($show->discount_price == NULL)
                        <div class="d-flex price">
                            <h5>{{trans('site/product.price')}} </h5>
                            <p>{{$show->price}} {{trans('site/product.shekel')}}</p>
                        </div>
                        @else
                            <div class="d-flex price">
                                <h5>{{trans('site/product.price')}} </h5>
{{--                                <p>{{$show->price}} {{trans('site/product.shekel')}}</p>--}}
                                <del style="color: #808080">{{$show->price ?? ''}} {{trans('site/product.shekel')}}</del>
                                <span class="type">
                            </div>
                        <div class="d-flex price">
                            <h5>سعر الخصم :</h5>
                            <p>{{$show->discount_price ?? ''}} {{trans('site/product.shekel')}}</p>
                                <h5>نسبة الخصم :</h5>
                                @php
                                    $amount = $show->price - $show->discount_price;
                                    $discount = ($amount/$show->price) * 100;
                                @endphp
                                <p style="color: red">{{round($discount)}}%</p>
                        </div>
                        @endif
                    </div>


                </div>
            </form>
        </div>

    </div>
</div>
</div>
