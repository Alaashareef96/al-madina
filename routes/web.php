<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DeleteImageController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Site\AboutSiteController;
use App\Http\Controllers\Site\AlbumsSiteController;
use App\Http\Controllers\Site\ContactSiteController;
use App\Http\Controllers\Site\HomeSiteController;
use App\Http\Controllers\Site\NewsSiteController;
use App\Http\Controllers\Site\OfferSiteController;
use App\Http\Controllers\Site\ProductSiteController;
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

Route::prefix('cms/admin')->middleware('auth:admin')->group(function(){
    Route::get('/change-lang/{language}', [DashboardController::class, 'changeLanguage'])->name('dashboard.change-language');
    Route::get('/', [DashboardController::class, 'showDashboard'])->name('dashboard');

    // Route::get('edit-password', [AuthController::class,'editPassword'])->name('auth.edit-password');
    // Route::put('update-password', [AuthController::class,'updatePassword'])->name('auth.update-password');

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

    Route::resource('offers', OfferController::class);

    Route::get('/delete/{id}', [DeleteImageController::class, 'delete'])->name('delete');

    Route::resource('news', NewsController::class);
    Route::get('/show-comment', [NewsSiteController::class, 'showComment'])->name('show-comment');
    Route::get('/delete-comment/{id}', [NewsSiteController::class, 'deleteComment'])->name('delete-comment');
    Route::get('/status-comment', [NewsSiteController::class, 'status'])->name('status-comment');

    Route::resource('albums', AlbumController::class);


    Route::get('logout', [AuthController::class,'logout'])->name('auth.logout');
});

//****************************SITE*****************************



Route::prefix('al-madina')->group(function(){

    Route::get('/change-lang-user/{language}', [DashboardController::class, 'changeLanguage'])->name('dashboard.change-language-user');
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
    Route::post('/news-comment', [NewsSiteController::class, 'newsComment'])->name('news-comment');

    Route::get('/albums', [AlbumsSiteController::class, 'index'])->name('albums');

    Route::get('/contact', [ContactSiteController::class, 'index'])->name('contact');
    Route::post('/save-contact', [ContactSiteController::class, 'save'])->name('save-contact');




});
