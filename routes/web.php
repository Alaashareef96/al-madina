<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
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

    Route::resource('team', TeamController::class);


    // Route::resource('categories', CategoryController::class);

    // Route::resource('subcategories', SubCategoryController::class);
    
    Route::get('logout', [AuthController::class,'logout'])->name('auth.logout');
});