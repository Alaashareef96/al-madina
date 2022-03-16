@extends('cms.parent')

@section('page-name','Create About')
@section('main-page','Content Management')
@section('sub-page','About')
@section('page-name-small','Create About')

@section('styles')
    <link href="{{asset('cms/assets/css/_select2.scss')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <!--begin::Container-->
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Horizontal Form Layout</h3>
                </div>
                <!--begin::Form-->
                <form id="create-form">
                    @csrf
                    <div class="card-body">

                        <h3 class="text-dark font-weight-bold mb-10">Image Cover</h3>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Image Cover :<span class="text-danger">*</span></label>
                            <div class="form-group">
                                <label for="title">Choose Image Cover</label>
                                <input type="file" id="image" name="image" accept="image/*" onchange="previewFile(this);" /><br/>
                                </p>
                                <img id="previewImg" src="{{url(Storage::url($offer->img->url_image))}}" width="100px" height="100px" alt="Placeholder">
                                <p>
                            </div>
                        </div>

                        <h3 class="text-dark font-weight-bold mb-10">Images</h3>
                        <div class="form-group">
                            <label for="title">Choose Image</label>
                            <input type="file" id="files" name="files[]"   accept="image/*" multiple/><br/>
                            <div class="row">
                                <div id="frames" ></div>
                                @foreach ($offer->images as $img )
                                    @if($img->url_images != null)
                                    <div class="col-md-2"> <button type="button" data-id="{{$img->id}}" class="delete_image mt-3 btn btn-danger btn-sm font-weight-bold btn-pill">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <img class="image-to-delete-{{$img->id}} img-circle mt-3 img-bordered-sm" width="100" height="100"src="{{url(Storage::url($img->url_images))}}">

                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <h3 class="text-dark font-weight-bold mb-10">Video</h3>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Video:<span class="text-danger">*</span></label>
                            <div class="form-group">
                                <label for="title">Choose Video</label>
                                <input type="file" id="video" name="video" accept="video/*" /><br/>
                                <video id="vid" src="{{url(Storage::url($offer->img->url_video))}}" width="200" height="150" controls></video>

                            </div>
                        </div>
                        <h3 class="text-dark font-weight-bold mb-10">Basic Info</h3>

                        <div class="form-group row mt-4">
                            <label for="name" class="col-3 col-form-label">Name (Ar):</label>
                            <div class="col-6">
                                <input name="name[ar]" type="text" class="form-control" id="name" value="{{$offer->getTranslation('name', 'ar')}}" placeholder="Please enter your name" />

                                <span class="form-text text-muted">Please enter arabic name</span>
                            </div>

{{--                            <div class="col-6">--}}
{{--                                <input name="type" type="hidden" class="form-control" id="type" value="create" placeholder="Please enter your name" />--}}
{{--                            </div>--}}

                        </div>
                        <div class="form-group row mt-4">
                            <label class="col-3 col-form-label">Name (En):</label>
                            <div class="col-6">
                                <input name="name[en]" type="text" class="form-control" id="name_en" value="{{$offer->getTranslation('name', 'en')}}" placeholder="Enter english name" />
                                <span class="form-text text-muted">Please enter english name</span>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <h3 class="text-dark font-weight-bold mb-10">Details</h3>
                        <div class="form-group">
                            <label>Details (Ar):</label>
                            <textarea class="form-control" name="details[ar]" id="details" rows="3"  placeholder="Enter ...">{{$offer->getTranslation('details', 'ar')}}</textarea>
                        </div>


                        <div class="form-group">
                            <label>Details (En):</label>
                            <textarea class="form-control" name="details[en]" id="details_en" rows="3" placeholder="Enter ...">{{$offer->getTranslation('details', 'en')}}</textarea>
                        </div>
                        <div class="separator separator-dashed my-10"></div>

                        <h3 class="text-dark font-weight-bold mb-10">Terms</h3>
                        <div class="form-group row mt-4">
                            <label class="col-3 col-form-label">Terms (ar):</label>
                            <div class="col-6">
                                <div class="tagify-item">
                                    <select class="js-example-basic-single" name="terms[ar][]" multiple>
                                        @foreach ($offer->getTranslation('terms', 'ar') as $term)
                                            <option value="{{$term}}" selected>{{$term}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row mt-4">
                            <label class="col-3 col-form-label">Terms (en):</label>
                            <div class="col-6">
                                <div class="tagify-item">
                                    <select class="js-example-basic-single_2" name="terms[en][]" multiple>
                                        @foreach ($offer->getTranslation('terms', 'en') as $term)
                                            <option value="{{$term}}" selected>{{$term}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>

                        <div class="separator separator-dashed my-10"></div>

                        <h3 class="text-dark font-weight-bold mb-10">Subscription</h3>
                        <div class="form-group">
                            <label>Subscription (Ar):</label>
                            <textarea class="form-control" name="subscription[ar]" id="subscription" rows="3" placeholder="Enter ...">{{$offer->getTranslation('subscription', 'ar')}}</textarea>
                        </div>


                        <div class="form-group">
                            <label>Subscription (En):</label>
                            <textarea class="form-control" name="subscription[en]" id="subscription" rows="3" placeholder="Enter ...">{{$offer->getTranslation('subscription', 'en')}}</textarea>
                        </div>
                        <div class="separator separator-dashed my-10"></div>

                        <h3 class="text-dark font-weight-bold mb-10">Expiry Date</h3>
                        <div class="form-group row mt-4">
                            <label class="col-3 col-form-label">Expiry Date:</label>
                            <div class="col-3">
                                <input name="expiry_date" type="date" class="form-control" id="example-date-input" value="{{$offer->expiry_date}}" placeholder="Enter expiry_date" />
                                <span class="form-text text-muted">Please enter expiry_date</span>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-3">

                            </div>
                        <div class="col-9">
                            <button type="button" onclick="update('{{$offer->id}}')" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
</div>
<!--end::Container-->
@endsection
@section('scripts')
<script src="{{asset('cms/assets/js/pages/crud/file-upload/image-input.js')}}"></script>
<script src="{{asset('cms/assets/js/select2.js')}}"></script>
<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];

        if(file){
            var reader = new FileReader();
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
</script>

<script>
    $(document).ready(function(){
        $('#files').change(function(){
            $("#frames").html('');
            for (var i = 0; i < $(this)[0].files.length; i++) {
                $("#frames").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" width="100px" height="100px"/>');
            }
        });
    });
</script>

<script>
    const input = document.getElementById('video');
    const video = document.getElementById('vid');
    const videoSource = document.createElement('source');

    input.addEventListener('change', function() {
      const files = this.files || [];

      if (!files.length) return;

      const reader = new FileReader();

      reader.onload = function (e) {
        videoSource.setAttribute('src', e.target.result);
        video.appendChild(videoSource);
        video.load();
        video.play();
      };

      reader.onprogress = function (e) {
        console.log('progress: ', Math.round((e.loaded * 100) / e.total));
      };

      reader.readAsDataURL(files[0]);
    });
    </script>
    <script>
     function update(id){
        let formData = new FormData($('#create-form')[0]);
         formData.append('_method','PUT');

        axios.post('/cms/admin/offers/'+id, formData).then(function (response) {
            // handle success
            console.log(response);
            // document.getElementById('create-form').reset();
            toastr.success(response.data.message);
            window.location.href = '/cms/admin/offers';
        }).catch(function (error) {
            // handle error
            console.log(error);
            toastr.error(error.response.data.message);
        });
    }

    </script>

<script>
    $(document).on('click','.delete_image',function (){
        var element = $(this);
        var id = element.data('id');
        console.log('/cms/admin/delete/'+id);
        axios.get('/cms/admin/delete/'+id).then( function (response){

            console.log(response);
            element.remove();
            $('.image-to-delete-'+id).remove();


        }).catch(function (error) {
            console.log(error);

        });
    })
    // function delete_img(id){
    //     axios.get('/cms/admin/delete/'+id, {
    //
    //         console.log(response);
    //         toastr.success(response.data.message);
    //
    //     }).catch(function (error) {
    //         console.log(error);
    //         toastr.error(error.response.data.message);
    //     });
    // }
</script>

<script>
    $(".js-example-basic-single").select2({
        tags: true,
        tokenSeparators: [',', '  '],
        width: '100%'
    });
</script>

<script>
    $(".js-example-basic-single_2").select2({
        tags: true,
        tokenSeparators: [',', '  '],
        width: '100%'
    });
</script>
@endsection
