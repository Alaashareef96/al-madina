@extends('cms.parent')

@section('page-name','Create TheySaid')
@section('main-page','Content Management')
@section('sub-page','TheySaid')
@section('page-name-small','Create TheySaid')

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
                        <label class="col-3 col-form-label">Image:<span class="text-danger">*</span></label>
                        <div class="form-group">
                            <label for="title">Choose Image</label>
                            <input type="file" id="image" name="image" accept="image/*" onchange="previewFile(this);" /><br/>
                        </p>
                        <img id="previewImg" src={{asset('cms/assets/media/users/blank.png')}} width="100px" height="100px" alt="Placeholder">
                        <p>
                          </div>
                    </div>
                    <h3 class="text-dark font-weight-bold mb-10">Basic Info</h3>

                    <div class="form-group row mt-4">
                        <label for="name" class="col-3 col-form-label">Name (Ar):</label>
                        <div class="col-6">
                            <input name="name[ar]" type="text" class="form-control" id="name" placeholder="Please enter your name" />
                            <span class="form-text text-muted">Please enter arabic name</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <input name="type" type="hidden" class="form-control" id="type" value="create" placeholder="Please enter your name" />

                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Name (En):</label>
                        <div class="col-6">
                            <input name="name[en]" type="text" class="form-control" id="name_en" placeholder="Enter english name" />
                            <span class="form-text text-muted">Please enter english name</span>
                        </div>
                    </div>

                    <div class="separator separator-dashed my-10"></div>
                    <div class="form-group row mt-4">
                        <label for="name" class="col-3 col-form-label">Category (Ar):</label>
                        <div class="col-6">
                            <input name="category[ar]" type="text" class="form-control" id="category" placeholder="Please enter your category" />
                            <span class="form-text text-muted">Please enter arabic category</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Category (En):</label>
                        <div class="col-6">
                            <input name="category[en]" type="text" class="form-control" id="category_en" placeholder="Enter english category" />
                            <span class="form-text text-muted">Please enter english category</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Details (Ar):</label>
                        <textarea class="form-control" name="details[ar]" id="details" rows="3" placeholder="Enter ..."></textarea>
                    </div>

                    <div class="form-group">
                        <label>Details (En):</label>
                        <textarea class="form-control" name="details[en]" id="details_en" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-3">

                        </div>
                        <div class="col-9">
                            <button type="button" onclick="store()" class="btn btn-primary mr-2">Submit</button>
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
     function store(){
        let formData = new FormData($('#create-form')[0]);
        axios.post('/cms/admin/they-said', formData, {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            }
        }).then(function (response) {
            // handle success
            console.log(response);
            // document.getElementById('create-form').reset();
            toastr.success(response.data.message);
            window.location.href = '/cms/admin/they-said';
        }).catch(function (error) {
            console.log( error.response.data.message);
            let messages = '';
            for (const [key, value] of Object.entries(error.response.data.message)) {
                messages+='-'+value+'</br>';
            }
            toastr.error(messages);
        });
     }

    </script>
@endsection
