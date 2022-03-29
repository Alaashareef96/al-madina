@extends('cms.parent')

@section('page-name','Edit Albums')
@section('main-page','Content Management')
@section('sub-page','Album')
@section('page-name-small','Edit Albums')

@section('styles')

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
                        <h3 class="text-dark font-weight-bold mb-10">Cover Video</h3>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Image :<span class="text-danger">*</span></label>
                            <div class="form-group">
                                <label for="title">Choose Image Cover</label>
                                <input type="file" id="image" name="image" accept="image/*" onchange="previewFile(this);" /><br/>
                                </p>
                                <img id="previewImg" src={{url(Storage::url($album->img->url_image ?? ''))}} width="100px" height="100px" alt="Placeholder">
                                <p>
                            </div>
                        </div>

                        <h3 class="text-dark font-weight-bold mb-10">Images</h3>
                        <div class="form-group">
                            <label for="title">Choose Image</label>
                            <input type="file" id="files" name="files[]"   accept="image/*" multiple/><br/>
                            <div class="row">
                                <div id="frames" ></div>
                                @foreach ($album->images as $img )
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
                                <video id="vid" src="{{url(Storage::url($album->video->url_video))}}" width="200" height="150" controls></video>

                            </div>
                        </div>
                        <h3 class="text-dark font-weight-bold mb-10">Basic Info</h3>

                        <div class="form-group row mt-4">
                            <label for="name" class="col-3 col-form-label">Name (Ar):</label>
                            <div class="col-6">
                                <input name="name[ar]" type="text" class="form-control" id="name" value="{{$album->getTranslation('name', 'ar')}}" placeholder="Please enter your name" />

                                <span class="form-text text-muted">Please enter arabic name</span>
                            </div>

{{--                            <div class="col-6">--}}
{{--                                <input name="type" type="hidden" class="form-control" id="type" value="create" placeholder="Please enter your name" />--}}
{{--                            </div>--}}

                        </div>
                        <div class="form-group row mt-4">
                            <label class="col-3 col-form-label">Name (En):</label>
                            <div class="col-6">
                                <input name="name[en]" type="text" class="form-control" id="name_en" value="{{$album->getTranslation('name', 'en')}}" placeholder="Enter english name" />
                                <span class="form-text text-muted">Please enter english name</span>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <h3 class="text-dark font-weight-bold mb-10">Details</h3>
                        <div class="form-group">
                            <label>Details (Ar):</label>
                            <textarea class="form-control" name="details[ar]" id="details" rows="3"  placeholder="Enter ...">{{$album->getTranslation('details', 'ar')}}</textarea>
                        </div>


                        <div class="form-group">
                            <label>Details (En):</label>
                            <textarea class="form-control" name="details[en]" id="details_en" rows="3" placeholder="Enter ...">{{$album->getTranslation('details', 'en')}}</textarea>
                        </div>
                        <div class="separator separator-dashed my-10"></div>

                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-3">

                            </div>
                        <div class="col-9">
                            <button type="button" onclick="update('{{$album->id}}')" class="btn btn-primary mr-2">Submit</button>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


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
     function update(id){
        let formData = new FormData($('#create-form')[0]);
         formData.append('_method','PUT');

        axios.post('/cms/admin/albums/'+id, formData).then(function (response) {
            console.log(response);
            toastr.success(response.data.message);
            window.location.href = '/cms/admin/albums';
        }).catch(function (error) {
            console.log(error);
            let messages = '';
            for (const [key, value] of Object.entries(error.response.data.message)) {
                messages+='-'+value+'</br>';
            }
            toastr.error(messages);
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

</script>

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
@endsection
