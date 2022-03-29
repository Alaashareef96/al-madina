@extends('cms.parent')

@section('page-name','Create Jobs')
@section('main-page','Content Management')
@section('sub-page','Jobs')
@section('page-name-small','Create Jobs')

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

                    <h3 class="text-dark font-weight-bold mb-10">Terms</h3>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Terms (ar):</label>
                        <div class="col-6">
                            <div class="tagify-item">
                                <select class="js-example-basic-single" name="terms[ar][]" multiple>

                                </select>
                            </div>
                    </div>
                    </div>


                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Terms (en):</label>
                        <div class="col-6">
                            <div class="tagify-item">
                                <select class="js-example-basic-single_2" name="terms[en][]" multiple>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>

                    <h3 class="text-dark font-weight-bold mb-10">Start Date</h3>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Start Date:</label>
                        <div class="col-3">
                            <input name="start_date" type="date" class="form-control" id="example-date-input" placeholder="Enter start_date" />
                            <span class="form-text text-muted">Please enter start_date</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>

                    <h3 class="text-dark font-weight-bold mb-10">Expiry Date</h3>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Expiry Date:</label>
                        <div class="col-3">
                            <input name="expiry_date" type="date" class="form-control" id="example-date-input" placeholder="Enter expiry_date" />
                            <span class="form-text text-muted">Please enter expiry_date</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>

                    <h3 class="text-dark font-weight-bold mb-10">Status</h3>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Visible</label>
                        <div class="col-3">
                            <span class="switch switch-outline switch-icon switch-success">
                                <label>
                                    <input type="checkbox" id="status" name="status">
                                    <span></span>
                                </label>
                            </span>
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

<script src="{{asset('cms/assets/js/select2.js')}}"></script>

<script>
     function store() {
         let formData = new FormData($('#create-form')[0]);
             axios.post('/cms/admin/jobs', formData, {
                 headers: {
                     'Content-Type': 'application/json',
                     'Accept': 'application/json',
                 }
             }).then(function (response) {
                 console.log(response);
                 toastr.success(response.data.message);
                 window.location.href = '/cms/admin/jobs';
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
