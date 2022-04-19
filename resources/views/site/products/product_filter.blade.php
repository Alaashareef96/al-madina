
@forelse($products as $product)
    <div class="col-lg-4 col-md-6">
        <div class="position-relative">
        <a href="#" class="product-link" data-id="{{ $product->id }}">

        </div>

            <div class="card product-card  wow fadeInUp" data-target=".product_details" data-wow-duration="1s" data-wow-delay="0.2s">
                <figure class="card-img-top">
                    <img src="{{url(Storage::url($product->image->url_image ?? ''))}}" alt="Card image cap">
                    <span >{{$product->size->name}}</span>


                </figure>
                <div class="card-body">
                    <h5 class="card-title">{{$product->brand->name}}</h5>
                    <p class="card-text"> {{$product->name}}
                        {{trans('site/product.taste')}} {{$product->taste->name}}</p>
                </div>
            </div>
        </a>
        <div class="favourite">

          @if($user = Auth::user())
              @if(in_array($product->id,$user->products->pluck('id')->toArray()))
                    <a class="wishlist active" data-id="{{$product->id}}">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </a>
                @else
                    <a class="wishlist"  data-id="{{$product->id}}">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </a>
                @endif

            @else
                <a class="wishlist" data-id="{{$product->id}}">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                </a>
            @endif

        </div>

        <div class="catr-add">
                    <a class="catrs" data-id="{{$product->id}}">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    </a>


        </div>
    </div>

@empty
@endforelse



