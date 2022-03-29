@extends('cms.parent')

@section('page-name','Create Category')
@section('main-page','Content Management')
@section('sub-page','Categories')
@section('page-name-small','Create Category')

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

                    <h3 class="text-dark font-weight-bold mb-10">Basic Info</h3>

                    <div class="form-group row mt-4">
                        <label for="name" class="col-3 col-form-label">Name (Ar):</label>
                        <div class="col-6">
                            <input name="name[ar]" type="text" class="form-control" id="name" placeholder="Please enter your name" />
                            <span class="form-text text-muted">Please enter arabic name</span>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Name (En):</label>
                        <div class="col-6">
                            <input name="name[en]" type="text" class="form-control" id="name_en" placeholder="Enter english name" />
                            <span class="form-text text-muted">Please enter english name</span>
                        </div>
                    </div>

                    <div class="separator separator-dashed my-10"></div>

{{--                    <div class="form-group row">--}}
{{--                        <label class="col-3 col-form-label">Inline radios</label>--}}
{{--                        <div class="col-9 col-form-label">--}}
{{--                            <div class="radio-inline">--}}
{{--                                <label class="radio">--}}
{{--                                    <input type="radio" name="type" value="1"/>--}}
{{--                                    <span></span>--}}
{{--                                    Main Category--}}
{{--                                </label>--}}
{{--                                <label class="radio">--}}
{{--                                    <input type="radio" name="type" value="2"/>--}}
{{--                                    <span></span>--}}
{{--                                    Sub Category--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <span class="form-text text-muted">Some help text goes here</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="form-group row hidden" id="cats_list" >
                        <label class="col-3 col-form-label">Category Nmae:<span class="text-danger">*</span></label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="dropdown bootstrap-select form-control dropup">
                                <select class="form-control selectpicker" data-size="7"  name="type" id="parent_id"
                                        title="Choose one of the following..." tabindex="null" data-live-search="true">

                                        <option value="Brand">Brand</option>
                                        <option value="Size">Size</option>
                                        <option value="Taste">Taste</option>

                                </select>
                            </div>
                            <span class="form-text text-muted">Please select Category Nmae</span>
                        </div>
                    </div>
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
    <script>
        $('input:radio[name="type"]').change(
            function(){
                if (this.checked && this.value == '2') {  // 1 if main cat - 2 if sub cat
                    $('#cats_list').removeClass('hidden');

                }else{
                    $('#cats_list').addClass('hidden');
                }
            });
    </script>
    <script>
     function store(){
        let formData = new FormData($('#create-form')[0]);
        axios.post('/cms/admin/categories', formData, {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            }
        }).then(function (response) {
            // handle success
            console.log(response);
            // document.getElementById('create-form').reset();
            toastr.success(response.data.message);
            window.location.href = '/cms/admin/categories';
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
