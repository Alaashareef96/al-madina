<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
	{{-- <base href="../../../../"> --}}
	<meta charset="utf-8" />
	<title> Login | Al-Madina Site</title>
	<meta name="description" content="Login page example" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	{{-- <link rel="canonical" href="https://keenthemes.com/metronic" /> --}}
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Custom Styles(used by this page)-->
	<link href="{{asset('cms/assets/css/pages/login/classic/login-4.css')}}" rel="stylesheet" type="text/css" />
	<!--end::Page Custom Styles-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="{{asset('cms/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('cms/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('cms/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<link href="{{asset('cms/assets/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('cms/assets/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('cms/assets/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('cms/assets/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="{{asset('cms/assets/media/logos/favicon.ico')}}" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
	class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
		<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
			<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
				style="background-image: url({{asset('cms/assets/media/bg/bg-3.jpg')}});">
				<div class="login-form text-center p-7 position-relative overflow-hidden">
					<!--begin::Login Header-->
					<div class="d-flex flex-center mb-15">
						<a href="#">
							<img src="{{asset('assets/media/logos/logo-letter-13.png')}}" class="max-h-75px" alt="" />
						</a>
					</div>
					<!--end::Login Header-->
					<!--begin::Login Sign in form-->
					<div class="login-signin">
						<div class="mb-20">
							<h3>Sign In To User</h3>
							<div class="text-muted font-weight-bold">Enter your details to login to your account:</div>
						</div>
						<form class="form" id="kt_login_signin_form">
							<div class="form-group mb-5">
								<input class="form-control h-auto form-control-solid py-4 px-8" type="text"
									placeholder="Email" id="email" name="username" autocomplete="off" />
							</div>
							<div class="form-group mb-5">
								<input class="form-control h-auto form-control-solid py-4 px-8" type="password"
									placeholder="Password" id="password" name="password" />
							</div>
							<div class="form-group d-flex flex-wrap justify-content-between align-items-center">
								<div class="checkbox-inline">
									<label class="checkbox m-0 text-muted">
										<input type="checkbox" id="remember" name="remember" />
										<span></span>Remember me</label>
								</div>
								<a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary">Forget
									Password ?</a>
							</div>
							{{-- <button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Sign In</button> --}}
							<button class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4"
								onclick="login()">Sign
								In</button>

{{--                            <a href="{{route('redirect',['service'=>'facebook'])}}" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4"--}}
{{--                                   >Sign In with facebook</a>--}}
                            <a href="{{route('otp.create')}}" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4"
                            >Sign In with Mobile</a>
						</form>

						<div class="mt-10">

							<a href="javascript:;" id="kt_login_signup"
								class="text-muted text-hover-primary font-weight-bold">Sign Up</a>
						</div>

					</div>
					<!--end::Login Sign in form-->
					<!--begin::Login Sign up form-->

					<div class="login-signup">
						<div class="mb-20">
							<h3>Works Registration</h3>
							<div class="text-muted font-weight-bold">Enter your details to activate your guide account
							</div>
						</div>
                        <form id="create-form">
                            @csrf
							<div class="row">
								<div class="form-group mb-5 col-lg-12">
									<input class="form-control h-auto form-control-solid py-4 px-8" type="text"
										placeholder="Your full name" id="name" name="name"/>
								</div>
							</div>
							<div class="form-group mb-5">
								<input class="form-control h-auto form-control-solid py-4 px-8" type="text"
									placeholder="Email" id="email" name="email"  autocomplete="off" />
							</div>

							<div class="form-group mb-5">
								<input class="form-control h-auto form-control-solid py-4 px-8" type="password"
									placeholder="password" id="password" name="password" autocomplete="off" />
							</div>
{{--							<div class="form-group mb-5">--}}
{{--								<input class="form-control h-auto form-control-solid py-4 px-8" type="password"--}}
{{--									placeholder="Verify Password" id="password_confirmation" name="Verify Password" autocomplete="off" />--}}
{{--							</div>--}}

                            <div class="form-group mb-5">
                                    <div class="custom-select-main">
                                        <select name="gender" id="gender" class="form-control custom-input">
                                            <option value="1">اختر نوع الجنس</option>
                                            <option value="male">ذكر</option>
                                            <option value="female">أنثى</option>
                                        </select>
{{--                                        <i class="fa fa-angle-down" aria-hidden="true"></i>--}}
                                    </div>
                            </div>

                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="date"
                                       placeholder="dob" id="dob" name="dob"  autocomplete="off" />
                            </div>
                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="text"
                                       placeholder="Mobile" id="mobile" name="mobile"/>
                            </div>


							<div class="form-group d-flex flex-wrap flex-center mt-10">
								<button type="button" onclick="register()"
									class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Sign Up</button>
								<button id="kt_login_signup_cancel"
									class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
							</div>
						</form>
					</div>


					<!--end::Login Sign up form-->
					<!--begin::Login forgot password form-->
					<div class="login-forgot">
						<div class="mb-20">
							<h3>Forgotten Password ?</h3>
							<div class="text-muted font-weight-bold">Enter your email to reset your password</div>
						</div>
						<form class="form">
							<div class="form-group mb-10">
								<input class="form-control form-control-solid h-auto py-4 px-8" type="text"
									placeholder="Email" id="reset_email" name="email" autocomplete="off" />
							</div>
							<div class="form-group d-flex flex-wrap flex-center mt-10">
								<button type="button" onclick="performForgotPassword()"
									class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Request</button>
								<button id="kt_login_forgot_cancel"
									class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
							</div>
						</form>
					</div>
					<!--end::Login forgot password form-->
				</div>
			</div>
		</div>
		<!--end::Login-->
	</div>
	<!--end::Main-->
	{{-- <script>
		var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
	</script> --}}
	<!--begin::Global Config(global config for global JS scripts)-->
	<script>
		var KTAppSettings = { " breakpoints": { "sm" : 576, "md" : 768, "lg" : 992, "xl" : 1200, "xxl" : 1400 }, "colors" :
								{ "theme" : { "base" : { "white" : "#ffffff" , "primary" : "#3699FF" , "secondary"
								: "#E5EAEE" , "success" : "#1BC5BD" , "info" : "#8950FC" , "warning" : "#FFA800"
								, "danger" : "#F64E60" , "light" : "#E4E6EF" , "dark" : "#181C32" }, "light" : { "white"
								: "#ffffff" , "primary" : "#E1F0FF" , "secondary" : "#EBEDF3" , "success" : "#C9F7F5"
								, "info" : "#EEE5FF" , "warning" : "#FFF4DE" , "danger" : "#FFE2E5" , "light"
								: "#F3F6F9" , "dark" : "#D6D6E0" }, "inverse" : { "white" : "#ffffff" , "primary"
								: "#ffffff" , "secondary" : "#3F4254" , "success" : "#ffffff" , "info" : "#ffffff"
								, "warning" : "#ffffff" , "danger" : "#ffffff" , "light" : "#464E5F" , "dark"
								: "#ffffff" } }, "gray" : { "gray-100" : "#F3F6F9" , "gray-200" : "#EBEDF3" , "gray-300"
								: "#E4E6EF" , "gray-400" : "#D1D3E0" , "gray-500" : "#B5B5C3" , "gray-600" : "#7E8299"
								, "gray-700" : "#5E6278" , "gray-800" : "#3F4254" , "gray-900" : "#181C32" }
								}, "font-family" : "Poppins" };
	</script>
	<!--end::Global Config-->
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="{{asset('cms/assets/plugins/global/plugins.bundle.js')}}"></script>
	<script src="{{asset('cms/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
	<script src="{{asset('cms/assets/js/scripts.bundle.js')}}"></script>
	<!--end::Global Theme Bundle-->
	<!--begin::Page Scripts(used by this page)-->
	<script src="{{asset('cms/assets/js/pages/custom/login/login-general.js?n=1')}}"></script>
	<!--end::Page Scripts-->

	<script src="{{asset('cms/assets/js/pages/features/miscellaneous/toastr.js')}}">
	</script>
	<script src="{{asset('js/axios.js')}}"></script>

	<script>
		function login(){
	      axios.post('/al-madina/loginUser', {
	        email: document.getElementById('email').value,
	        password: document.getElementById('password').value,
	        remember: document.getElementById('remember').checked,

	        // guard: guard
	      }).then(function (response) {
	          @if(url()->previous())
                  window.location.href = "{{url()->previous()}}";
              @else
                  window.location.href = '/al-madina/home';
               @endif

	      })
	        .catch(function (error) {
	          toastr.error(error.response.data.message)
	      });
	    }
	</script>

    <script>
        function register() {
            let formData = new FormData($('#create-form')[0]);
            axios.post('/al-madina/register', formData, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                }
            }).then(function (response) {
                console.log(response);
                toastr.success(response.data.message);
                window.location.href = '/al-madina/loginUser';
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

    <script>
        function performForgotPassword(){
            axios.post('/forgot-password-user', {
                email: document.getElementById('reset_email').value,
            }).then(function (response) {
                toastr.success(response.data.message)
            }).catch(function (error) {
                toastr.error(error.response.data.message)
            });
        }
    </script>
</body>
<!--end::Body-->

</html>
