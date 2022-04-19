@extends('cms.parent')

@section('page-name','Edit Slider')
@section('main-page','Content Management')
@section('sub-page','Slider')
@section('page-name-small','Edit Slider')

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

                        <h3 class="text-dark font-weight-bold mb-10">Image</h3>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Image :<span class="text-danger">*</span></label>
                            <div class="form-group">
                                <label for="title">Choose Image Cover</label>
                                <input type="file" id="image" name="image" accept="image/*" onchange="previewFile(this);" /><br/>
                                </p>
                                <img id="previewImg" src="{{url(Storage::url($slider->img->url_image))}}" width="100px" height="100px" alt="Placeholder">
                                <p>
                            </div>
                        </div>


                        <h3 class="text-dark font-weight-bold mb-10">Basic Info</h3>

                        <div class="form-group row mt-4">
                            <label for="name" class="col-3 col-form-label">URL :</label>
                            <div class="col-6">
                                <input name="url" type="text" class="form-control" id="url" value="{{$slider->url}}" placeholder="Please enter your url" />

                                <span class="form-text text-muted">Please enter url</span>
                            </div>

                        </div>

                        <div class="separator separator-dashed my-10"></div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-3">

                            </div>
                            <div class="col-9">
                                <button type="button" onclick="update('{{$slider->id}}')" class="btn btn-primary mr-2">Submit</button>
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
        function update(id){
            let formData = new FormData($('#create-form')[0]);
            formData.append('_method','PUT');

            axios.post('/cms/admin/slider/'+id, formData).then(function (response) {
                // handle success
                console.log(response);
                // document.getElementById('create-form').reset();
                toastr.success(response.data.message);
                window.location.href = '/cms/admin/slider';
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
@endsection