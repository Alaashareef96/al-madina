@extends('site.profile.profile')

@section('titel','تعديل كلمة المرور')

@push('contact')


    <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <form class="form" id="create-form-pass">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="col-xl-12 col-lg-12 col-form-label">Current Password</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" name="current_password" id="current_password" value="" class="form-control custom-input">
                                            <span class="current_password" style="color:red"></span>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="col-xl-12 col-lg-12 col-form-label">New Password</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" id="new_password" name="new_password" value="" class="form-control custom-input">
                                            <span class="new_password" style="color:red"></span>
                                        </div>
                                    </div>
                                        <br>
                                    <div class="row">
                                            <div class="col-sm-3">
                                                <label class="col-xl-12 col-lg-12 col-form-label">Mobile</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" id="new_password_confirmation" name="new_password_confirmation" value="" class="form-control custom-input">
                                                <span class="new_password_confirmation" style="color:red"></span>
                                            </div>
                                        </div>
                                        <hr>

                                    <div class="row">
                                        <div class="col-lg-3 mx-auto">
                                            <button  type="button" onclick="updatePassword()"  class="btn btn-primary custom-botton" >
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
        function updatePassword(){
            axios.put('/cms/admin/update-password',{

                current_password:document.getElementById('current_password').value,
                new_password:document.getElementById('new_password').value,
                new_password_confirmation:document.getElementById('new_password_confirmation').value,
            }).then(function (response) {
                // handle success
                Swal.fire({
                    icon: 'success',
                    title: 'تم  التعديل بنجاح ',
                    showConfirmButton: false,
                    timer: 1500
                })
                console.log(response);
                document.getElementById('create-form-pass').reset();

            }).catch(function (error) {
                console.log(error.response.data.message);
                $('.current_password').text('');
                $('.new_password').text('');
                $('.new_password_confirmation').text('');
                if(error.response.data.message.current_password){
                    $('.current_password').text(error.response.data.message.current_password[0]);
                }
                if(error.response.data.message.new_password){
                    $('.new_password').text(error.response.data.message.new_password[0]);
                }
                if(error.response.data.message.new_password_confirmation){
                    $('.new_password_confirmation').text(error.response.data.message.new_password_confirmation[0]);
                }

            });

        }

    </script>
@endsection


