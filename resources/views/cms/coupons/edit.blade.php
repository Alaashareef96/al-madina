@extends('cms.parent')

@section('page-name','Edit Coupon')
@section('main-page','Content Management')
@section('sub-page','Coupons')
@section('page-name-small','Edit Coupon')


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
                            <label for="name" class="col-3 col-form-label">Name:</label>
                            <div class="col-6">
                                <input name="name" type="text" class="form-control" id="name" value="{{$coupon->name}}" placeholder="Please enter your name" />

                                <span class="form-text text-muted">Please enter name</span>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>

                        <h3 class="text-dark font-weight-bold mb-10">Discount</h3>
                        <div class="form-group row mt-4">
                            <label for="name" class="col-3 col-form-label">Discount:</label>
                            <div class="col-6">
                                <input name="discount" type="text" class="form-control" value="{{$coupon->discount}}" id="discount" placeholder="Please enter your discount" />

                                <span class="form-text text-muted">Please enter discount</span>
                            </div>
                        </div>

                        <div class="separator separator-dashed my-10"></div>
                        <h3 class="text-dark font-weight-bold mb-10">Quantity</h3>
                        <div class="form-group row mt-4">
                            <label for="name" class="col-3 col-form-label">Quantity:</label>
                            <div class="col-6">
                                <input name="qty" type="text" class="form-control" id="qty" value="{{$coupon->qty}}" placeholder="Please enter your quantity" />

                                <span class="form-text text-muted">Please enter quantity</span>
                            </div>
                        </div>

                        <h3 class="text-dark font-weight-bold mb-10">Date</h3>
                        <div class="form-group row mt-4">
                            <label class="col-3 col-form-label">Date:</label>
                            <div class="col-3">
                                <input name="date" type="date" value="{{$coupon->date}}" class="form-control" id="example-date-input" placeholder="Enter date" />
                                <span class="form-text text-muted">Please enter date</span>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>

                        <h3 class="text-dark font-weight-bold mb-10">Status</h3>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Visible</label>
                            <div class="col-3">
                            <span class="switch switch-outline switch-icon switch-success">
                                <label>
                                    <input type="checkbox" id="status" name="status"
                                           @if($coupon->status == 1) checked @endif>
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
                                <button type="button" onclick="update('{{$coupon->id}}')"class="btn btn-primary mr-2">Submit</button>
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

            axios.post('/cms/admin/coupons/'+id, formData).then(function (response) {
                // handle success
                console.log(response);
                toastr.success(response.data.message);
                window.location.href = '/cms/admin/coupons';
            }).catch(function (error) {
                let messages = '';
                if(typeof  error.response.data.message == 'string'){
                    toastr.error(error.response.data.message);
                }else{
                    for (const [key, value] of Object.entries(error.response.data.message)) {
                        messages+='-'+value+'</br>';
                    }
                    toastr.error(messages);
                }

            });
        }

    </script>

@endsection
