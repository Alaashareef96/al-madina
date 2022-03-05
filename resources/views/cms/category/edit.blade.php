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
                                <input name="name[ar]" type="text" class="form-control" id="name" value="{{$categories->getTranslation('name', 'ar')}}" placeholder="Please enter your name" />
                                <span class="form-text text-muted">Please enter arabic name</span>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label class="col-3 col-form-label">Name (En):</label>
                            <div class="col-6">
                                <input name="name[en]" type="text" class="form-control" id="name_en" value="{{$categories->getTranslation('name', 'en')}}" placeholder="Enter english name" />
                                <span class="form-text text-muted">Please enter english name</span>
                            </div>
                        </div>

                        <div class="separator separator-dashed my-10"></div>

                        <div class="form-group row hidden" id="cats_list" >
                            <label class="col-3 col-form-label">Category Nmae:<span class="text-danger">*</span></label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <div class="dropdown bootstrap-select form-control dropup">
                                    <select class="form-control selectpicker" data-size="7"  name="parent_id" id="parent_id"
                                            title="Choose one of the following..." tabindex="null" data-live-search="true">

                                        <option value="Brand"@if($categories->type == 'Brand') selected @endif>Brand</option>
                                        <option value="Size"@if($categories->type == 'Size') selected @endif>Size</option>
                                        <option value="Taste"@if($categories->type == 'Taste') selected @endif>Taste</option>

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
                                <button type="button" onclick="update('{{$categories->id}}')" class="btn btn-primary mr-2">Submit</button>
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
        function update(id){
            let formData = new FormData($('#create-form')[0]);
            formData.append('_method','PUT');
            axios.post('/cms/admin/categories/'+id, formData).then(function (response) {
                // handle success
                console.log(response);
                // document.getElementById('create-form').reset();
                toastr.success(response.data.message);
                window.location.href = '/cms/admin/categories';
            }).catch(function (error) {
                // handle error
                console.log(error);
                toastr.error(error.response.data.message);
            });
        }

    </script>
@endsection
