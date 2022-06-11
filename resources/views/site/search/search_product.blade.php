{{--<ul>--}}
{{--    @foreach($products as $product)--}}
{{--        <li> <img src="{{url(Storage::url($product->image->url_image ?? ''))}}" style="width: 30px; height: 30px;"> {{$product->name}}  </li>--}}
{{--    @endforeach--}}

{{--</ul>--}}
<style>

    body {
        background-color: #eee
    }
    .card {
        background-color: #fff;
        padding: 0px;
        border: none
    }
    .input-box {
        position: relative
    }
    .input-box i {
        position: absolute;
        right: 13px;
        top: 15px;
        color: #ced4da
    }
    .form-control {
        height: 50px;
        background-color: #eeeeee69
    }
    .form-control:focus {
        background-color: #eeeeee69;
        box-shadow: none;
        border-color: #eee
    }
    .list {
        padding-top: 20px;
        padding-bottom: 10px;
        display: flex;
        align-items: center
    }
    .border-bottom {
        border-bottom: 2px solid #eee
    }
    .list i {
        font-size: 19px;
        color: red
    }
    .list small {
        color: #dedddd
    }
</style>

@if($products -> isEmpty())
    <h6 class="text-center text-danger">Product Not Found </h6>

@else

    <div class="card">


        @foreach($products as $product)
            <a href="#" class="product-link" data-id="{{ $product->id }}">
                <div class="list border-bottom">  <img src="{{url(Storage::url($product->image->url_image ?? ''))}}" style="width: 30px; height: 30px;">

                    <div class="d-flex flex-column ml-3" style="margin-left: 10px;"> <span>{{ $product->name }} </span> <small> ${{ $product->price }}</small> </div>
                </div>
            </a>
        @endforeach

    </div>
{{--    <div class="container mt-5">--}}
{{--        <div class="row d-flex justify-content-center ">--}}
{{--            <div class="col-md-6">--}}
{{--              --}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <script>
        $(document).on('click','.product-link',function (){
            var id = $(this).data('id');
            $.ajax({
                url: "{{ route('show-product') }}",
                type: "get",
                data: {
                    id : id
                },
                success: function (data) {
                    $('.modal-container').html(data.view);
                    $('#product_details').modal('show');
                },

            });
        })
        $(document).on('click','.close',function (){
            // $('#product_details').remove();
            $('#product_details').modal('hide');
        })
    </script>

@endif
