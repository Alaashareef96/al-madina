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

                    </div>
                </div>
            </section>

        </div>

@endsection


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


