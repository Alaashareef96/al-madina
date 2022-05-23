@extends('cms.parent')

@section('content')
<div class="flex-row-fluid ml-lg-8">
    <!--begin::Card-->
    <div class="card card-custom card-stretch">
        <!--begin::Header-->
        <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
                <h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
                <span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
            </div>
            <div class="card-toolbar">
                <button type="button" onclick="performEdit()" class="btn btn-success mr-2">Save Changes</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Form-->

            <!--begin::Body-->
            <div class="card-body">
                <div class="row">
                    <label class="col-xl-3"></label>

                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Name</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" id="name" type="text"
                            value="{{$user->name}}" />
                    </div>
                </div>
                <div class="row">
                    <label class="col-xl-3"></label>

                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" id="email" class="form-control form-control-lg form-control-solid"
                                value="{{$user->email}}" placeholder="Email" />
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Body-->
        </form>
        <!--end::Form-->
    </div>
</div>
@endsection


@section('scripts')
    <script>
     function performEdit(){
      axios.put('/cms/admin/update-profile',{

        name:document.getElementById('name').value,
        email:document.getElementById('email').value,
      }).then(function (response) {
    // handle success
      console.log(response);
      document.getElementById('create-form').reset();
       toastr.success(response.data.message);
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
