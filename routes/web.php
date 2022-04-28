<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\DeleteImageController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\JobsRequestController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\SuccessPartnerController;
use App\Http\Controllers\Admin\TheySaidController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Site\AboutSiteController;
use App\Http\Controllers\Site\AlbumsSiteController;
use App\Http\Controllers\Site\AuthSiteController;
use App\Http\Controllers\Site\CartSiteController;
use App\Http\Controllers\Site\ContactSiteController;
use App\Http\Controllers\Site\FacebookSiteController;
use App\Http\Controllers\Site\FavouriteSiteController;
use App\Http\Controllers\Site\HomeSiteController;
use App\Http\Controllers\Site\JobsSiteController;
use App\Http\Controllers\Site\NewsSiteController;
use App\Http\Controllers\Site\OfferSiteController;
use App\Http\Controllers\Site\ProductSiteController;
use App\Http\Controllers\Site\SearchSiteController;
use App\Http\Controllers\Site\SocialController;
use App\Http\Controllers\Site\UsersSiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\RolePermissionController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('cms')->middleware('guest:admin')->group(function(){
    Route::get('login', [AuthController::class,'ShowLogin'])->name('auth.login.view');
    Route::post('login', [AuthController::class,'login'])->name('auth.login');

});
Route::prefix('email')->middleware('auth:admin,web')->group(function () {
    Route::get('verify', [VerifyEmailController::class, 'notice'])->name('verification.notice');
    Route::post('verification-notification', [VerifyEmailController::class, 'send'])->middleware(['throttle:6,1'])->name('verification.send');
    Route::get('verify/{id}/{hash}', [VerifyEmailController::class, 'verify'])->middleware(['signed'])->name('verification.verify');
});

Route::middleware('guest')->group(function () {
    // Route::get('/forgot-password', [ResetPasswordController::class, 'requestPasswordReset'])->name('password.request');
    Route::post('/forgot-password', [ResetPasswordController::class, 'sendResetEmail'])->name('password.email');
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'resetPassword'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'updatePassword'])->name('password.update');
});


Route::prefix('cms/admin')->middleware(['auth:admin','verified'])->group(function(){
    Route::get('/change-lang/{language}', [DashboardController::class, 'changeLanguage'])->name('dashboard.change-language');
    Route::get('/', [DashboardController::class, 'showDashboard'])->name('dashboard');

    Route::get('edit-password', [AuthController::class,'editPassword'])->name('auth.edit-password');
    Route::put('update-password', [AuthController::class,'updatePassword'])->name('auth.update-password');

    Route::get('edit-profile', [AuthController::class,'editProfile'])->name('auth.edit-profile');
    Route::put('update-profile', [AuthController::class,'updateProfile']);

    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);

    Route::put('roles/{role}/permission', [RolePermissionController::class, 'update'])->name('role-permission.update');

    Route::resource('admins', AdminController::class);

    Route::resource('about', AboutController::class);

    Route::get('/show-contact', [ContactSiteController::class, 'showContact'])->name('show-contact');
    Route::get('/delete-contact/{id}', [ContactSiteController::class, 'deleteContact'])->name('delete-contact');

    Route::resource('teams', TeamController::class);

    Route::resource('categories', CategoryController::class);

//    Route::resource('sub-categories', SubCategoryController::class);

    Route::resource('products', ProductController::class);

    Route::resource('coupons', CouponController::class);

    Route::resource('offers', OfferController::class);

    Route::get('/delete/{id}', [DeleteImageController::class, 'delete'])->name('delete');

    Route::resource('news', NewsController::class);
    Route::get('/show-comment', [NewsSiteController::class, 'showComment'])->name('show-comment');
    Route::get('/delete-comment/{id}', [NewsSiteController::class, 'deleteComment'])->name('delete-comment');
    Route::get('/status-comment', [NewsSiteController::class, 'status'])->name('status-comment');

    Route::resource('albums', AlbumController::class);

    Route::resource('jobs', JobController::class);

    Route::get('/show-jobsRequest', [JobsRequestController::class, 'index'])->name('show-jobsRequest');
    Route::get('/delete-jobsRequest/{id}', [JobsRequestController::class, 'delete'])->name('delete-jobsRequest');
    Route::get('/show-details-request-jobs/{id}', [JobsRequestController::class, 'showDetails'])->name('show-details-request-jobs');

    Route::resource('slider', SliderController::class);

    Route::resource('brand', BrandController::class);

    Route::resource('they-said', TheySaidController::class);

    Route::resource('success-partners', SuccessPartnerController::class);

    Route::get('/users', [UsersSiteController::class, 'index'])->name('users');
    Route::get('/status-user', [UsersSiteController::class, 'status'])->name('status-user');
    Route::get('/delete-user/{id}', [UsersSiteController::class, 'deleteUser'])->name('delete-user');


    Route::get('logout', [AuthController::class,'logout'])->name('auth.logout');
});

//****************************SITE*****************************
Route::prefix('al-madina')->middleware('guest:web')->group(function() {
    Route::get('loginUser', [AuthSiteController::class, 'ShowLoginUser'])->name('auth.login.view.user');
    Route::post('register', [AuthSiteController::class, 'register'])->name('auth.register.user');
    Route::post('loginUser', [AuthSiteController::class, 'loginUser'])->name('auth.login.user');

    Route::get('/redirect/{service}', [SocialController::class, 'redirect'])->name('redirect');
    Route::get('/callback/{service}', [SocialController::class, 'callback']);
});

    Route::prefix('al-madina')->group(function(){

    Route::get('/change-lang-user/{language}', [HomeSiteController::class, 'changeLanguageUser'])->name('dashboard.change-language-user');
    Route::get('/home', [HomeSiteController::class, 'index'])->name('home');
    Route::get('/about', [AboutSiteController::class, 'index'])->name('about');

    Route::get('/product', [ProductSiteController::class, 'index'])->name('product');
    Route::get('/show-product', [ProductSiteController::class, 'showProduct'])->name('show-product');
    Route::get('/filter-product', [ProductSiteController::class, 'filterProduct'])->name('filter-product');

    Route::get('/offer', [OfferSiteController::class, 'index'])->name('offer');
    Route::get('/offer-details/{id}', [OfferSiteController::class, 'offerDetails'])->name('offer-details');
    Route::post('/subscribe', [OfferSiteController::class, 'offerSubscribe'])->name('subscribe');

    Route::get('/news', [NewsSiteController::class, 'index'])->name('news');
    Route::get('/news-details/{id}', [NewsSiteController::class, 'newsDetails'])->name('news-details');
    Route::post('/news-comment', [NewsSiteController::class, 'newsComment'])->name('news-comment')->middleware(['auth:web','verified']);

    Route::get('/albums', [AlbumsSiteController::class, 'index'])->name('albums');

    Route::get('/contact', [ContactSiteController::class, 'index'])->name('contact');
    Route::post('/save-contact', [ContactSiteController::class, 'save'])->name('save-contact');

    Route::get('/show-jobs', [JobsSiteController::class, 'index'])->name('show-jobs');
    Route::get('/jobs-details/{id}', [JobsSiteController::class, 'jobsDetails'])->name('jobs-details');
    Route::get('/request-jobs/{id}', [JobsSiteController::class, 'jobsRequest'])->name('request-jobs');
    Route::post('/save-request-jobs', [JobsSiteController::class, 'saveJobsRequest'])->name('save-request-jobs');


    Route::get('/search', [SearchSiteController::class, 'index'])->name('search');

    Route::post('/favourite', [FavouriteSiteController::class, 'storfavourite'])->name('favourite')->middleware(['auth:web','verified']);
    Route::get('/favourite-show', [FavouriteSiteController::class, 'index'])->name('favourite-show')->middleware(['auth:web','verified']);
    Route::delete('/favourite-delete/{id}', [FavouriteSiteController::class, 'destroy'])->name('favourite-delete')->middleware(['auth:web','verified']);

    Route::get('/cart', [CartSiteController::class, 'getCart'])->name('site.cart.index');
    Route::post('/cart/add', [CartSiteController::class, 'AddToCart'])->name('site.cart.add');
    Route::delete('/cart-remove/{rowId}', [CartSiteController::class, 'RemoveCartProduct'])->name('site.cart.remove');
    Route::get('/cart-increment/{rowId}', [CartSiteController::class, 'CartIncrement'])->name('site.cart.increment');
    Route::get('/cart-decrement/{rowId}', [CartSiteController::class, 'CartDecrement'])->name('site.cart.decrement');
    Route::get('/cart-change', [CartSiteController::class, 'CartChange'])->name('site.cart.change');


    Route::post('/coupon-apply', [CartSiteController::class, 'CouponApply'])->name('site.cart.coupon');
    Route::get('/coupon-calculation', [CartSiteController::class, 'CouponCalculation'])->name('site.cart.couponcalculation');
    Route::get('/coupon-remove', [CartSiteController::class, 'CouponRemove'])->name('site.cart.couponremove');

    Route::get('logout', [AuthSiteController::class,'logoutUser'])->name('auth.logout.user');


});
