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
                                    <h5 class="my-3">{{Auth::user()->name}}</h5>
                                    <p class="text-muted mb-1">{{Auth::user()->email}}</p>
                                    <p class="text-muted mb-4">{{Auth::user()->mobile}}</p>
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


                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>

@endsection


@section('script')

@endsection


