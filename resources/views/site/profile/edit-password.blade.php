@extends('site.parent')

@section('titel','الصفحة الشخصية')

@section('style')
    <style>
        .block-aa {
            display: block;
            width: 100%;
            border: none;
            border-radius: 12px;
            background-color: #25d366;
            padding: 15px 28px;
            font-size: 14px;
            cursor: pointer;
            text-align: center;
            color: white;
        }
        .block-aa:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
@endsection

@section('contact')


        <div class="container">
<br> <br>
        <section style="background-color: #eee;">
                <div class="container py-5">

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="{{asset('cms/assets/media/users/blank.png')}}" alt="avatar"
                                         class="rounded-circle img-fluid" style="width: 150px;">
                                    <h5 class="my-3" id="name-main">{{Auth::user()->name}}</h5>
                                    <p class="text-muted mb-1" id="email-main" >{{Auth::user()->email}}</p>
                                    <p class="text-muted mb-4" id="mobile-main">{{Auth::user()->mobile}}</p>
                                    <div class="d-flex justify-content-center mb-2">
                                        <a href="{{route('auth.logout.user')}}" type="button" class="btn btn-primary">Logout</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4 mb-lg-0">
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush rounded-3">
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <a href="{{route('site.edit-profile')}}" type="button" class="block-aa">تعديل الحساب</a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <a href="{{route('site.edit-password')}}" type="button" class="block-aa">تعديل كلمة المرور</a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <a href="{{route('site.MyOrders')}}" type="button" class="block-aa">قائمة الطلبات</a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <a href="{{route('site.return.order.list')}}" type="button" class="block-aa">قائمة الطلبات المرجعة</a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <a href="{{route('site.cancel.orders')}}" type="button" class="block-aa">قائمة الطلبات الملغية</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
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

                    </div>
                </div>
            </section>

        </div>

@endsection


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


