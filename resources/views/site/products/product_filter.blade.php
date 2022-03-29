
@forelse($products as $product)
    <div class="col-lg-4 col-md-6">
        <a href="#" class="product-link" data-id="{{ $product->id }}">

            <div class="card product-card  wow fadeInUp" data-target=".product_details" data-wow-duration="1s" data-wow-delay="0.2s">
                <figure class="card-img-top">
                    <img src="{{url(Storage::url($product->image->url_image ?? ''))}}" alt="Card image cap">
                    <span >{{$product->size->name}}</span>
                </figure>
                <div class="card-body">
                    <h5 class="card-title">{{$product->brand->name}}</h5>
                    <p class="card-text"> {{$product->name}}
                        بطعم {{$product->taste->name}}</p>
                </div>
            </div>
        </a>
    </div>
@empty
@endforelse



