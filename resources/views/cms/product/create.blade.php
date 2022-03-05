@extends('cms.parent')

@section('page-name','Create Team')
@section('main-page','Content Management')
@section('sub-page','Team')
@section('page-name-small','Create Team')

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

                    <div class="separator separator-dashed my-10"></div>

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
                    <h3 class="text-dark font-weight-bold mb-10">Category</h3>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Brand Name:</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" data-size="7"  name="brand_id"
                                    title="Choose one of the following..." tabindex="null" data-live-search="true">
                                @foreach ($brand as $brandName)
                                    <option value="{{$brandName->id}}">{{$brandName->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Size Name:</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" data-size="7"  name="size_id"
                                    title="Choose one of the following..." tabindex="null" data-live-search="true">
                                @foreach ($size as $sizeName)
                                    <option value="{{$sizeName->id}}">{{$sizeName->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Taste Name:</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" data-size="7"  name="taste_id"
                                    title="Choose one of the following..." tabindex="null" data-live-search="true">
                                @foreach ($taste as $tasteName)
                                    <option value="{{$tasteName->id}}">{{$tasteName->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="separator separator-dashed my-10"></div>
                    <h3 class="text-dark font-weight-bold mb-10">Details</h3>
                    <div class="form-group">
                        <label>Details (Ar):</label>
                        <textarea class="form-control" name="details[ar]" id="details" rows="3" placeholder="Enter ..."></textarea>
                    </div>


                    <div class="form-group">
                        <label>Details (En):</label>
                        <textarea class="form-control" name="details[en]" id="details_en" rows="3" placeholder="Enter ..."></textarea>
                    </div>

                    <div class="separator separator-dashed my-10"></div>

                    <h3 class="text-dark font-weight-bold mb-10">Product components</h3>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Calories:</label>
                        <div class="col-6">
                            <input name="calories" type="text" class="form-control"  placeholder="Enter english calories" />
                            <span class="form-text text-muted">Please enter english calories</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Fats:</label>
                        <div class="col-6">
                            <input name="fats" type="text" class="form-control"  placeholder="Enter english fats" />
                            <span class="form-text text-muted">Please enter english fats</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Protein:</label>
                        <div class="col-6">
                            <input name="protein" type="text" class="form-control"  placeholder="Enter english protein" />
                            <span class="form-text text-muted">Please enter english protein</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Carbohydrate:</label>
                        <div class="col-6">
                            <input name="carbohydrate" type="text" class="form-control"  placeholder="Enter english carbohydrate" />
                            <span class="form-text text-muted">Please enter english carbohydrate</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Vitamin:</label>
                        <div class="col-6">
                            <input name="vitamin" type="text" class="form-control"  placeholder="Enter english vitamin" />
                            <span class="form-text text-muted">Please enter english vitamin</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>

                    <h3 class="text-dark font-weight-bold mb-10">Price</h3>

                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Price:</label>
                        <div class="col-6">
                            <input name="price" type="text" class="form-control"  placeholder="Enter english price" />
                            <span class="form-text text-muted">Please enter english price</span>
                        </div>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{asset('cms/assets/js/pages/crud/forms/widgets/tagify.js')}}"></script>
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>


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
        axios.post('/cms/admin/products', formData, {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            }
        }).then(function (response) {
            // handle success
            console.log(response);
            // document.getElementById('create-form').reset();
            toastr.success(response.data.message);
            window.location.href = '/cms/admin/products';
        }).catch(function (error) {
            // handle error
            console.log(error);
            toastr.error(error.response.data.message);
        });
    }
    </script>

@endsection
