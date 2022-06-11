@extends('site.profile.profile')

@section('titel','تعديل الحساب')


@push('contact')

    <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <form class="form" id="create-form-update">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="col-xl-12 col-lg-12 col-form-label">Name</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="name" id="name" value="{{Auth::user()->name}}" class="form-control custom-input">
                                            <span class="name" style="color:red"></span>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="col-xl-12 col-lg-12 col-form-label">Email Address</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" id="email" name="email"  class="form-control custom-input">
                                            <span class="email" style="color:red"></span>
                                        </div>
                                    </div>
                                        <br>
                                    <div class="row">
                                            <div class="col-sm-3">
                                                <label class="col-xl-12 col-lg-12 col-form-label">Mobile</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="mobile" name="mobile" value="{{Auth::user()->mobile}}" class="form-control custom-input">
                                                <span class="mobile" style="color:red"></span>
                                            </div>
                                        </div>
                                        <hr>

                                    <div class="row">
                                        <div class="col-lg-3 mx-auto">
                                            <button  type="button" onclick="store()"  class="btn btn-primary custom-botton" >
                                                حفظ
                                            </button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

@endpush


@section('script')
    <script>
    function store(){
    axios.put('/al-madina/profile/user/update-profile',{

    name:document.getElementById('name').value,
    email:document.getElementById('email').value,
    mobile:document.getElementById('mobile').value,
    }).then(function (response) {
        Swal.fire({
            icon: 'success',
            title: 'تم  التعديل بنجاح ',
            showConfirmButton: false,
            timer: 1500
        })
        $('#name').html(response.data.name);
        $('#name-main').html(response.data.name);
        // $('#email').html(response.data.email);
        $('#email-main').html(response.data.email);
        $('#mobile').html(response.data.mobile);
        $('#mobile-main').html(response.data.mobile);

    }).catch(function (error) {
        console.log(error.response.data.message);
        $('.name').text('');
        $('.email').text('');
        $('.mobile').text('');
        if(error.response.data.message.name){
            $('.name').text(error.response.data.message.name[0]);
        }
        if(error.response.data.message.email){
            $('.email').text(error.response.data.message.email[0]);
        }
        if(error.response.data.message.mobile){
            $('.mobile').text(error.response.data.message.mobile[0]);
        }
    });
    }

    </script>
@endsection


