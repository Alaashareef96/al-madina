<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\DeleteImageController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\JobsRequestController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\NotificationsController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SuccessPartnerController;
use App\Http\Controllers\Admin\TheySaidController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Site\AboutSiteController;
use App\Http\Controllers\Site\AlbumsSiteController;
use App\Http\Controllers\Site\AuthSiteController;
use App\Http\Controllers\Site\CartSiteController;
use App\Http\Controllers\Site\CashSiteController;
use App\Http\Controllers\Site\CheckoutSiteController;
use App\Http\Controllers\Site\ContactSiteController;
use App\Http\Controllers\Site\FacebookSiteController;
use App\Http\Controllers\Site\FavouriteSiteController;
use App\Http\Controllers\Site\HomeSiteController;
use App\Http\Controllers\Site\JobsSiteController;
use App\Http\Controllers\Site\NewsSiteController;
use App\Http\Controllers\Site\OfferSiteController;
use App\Http\Controllers\Site\OrderSiteController;
use App\Http\Controllers\Site\PaymentPayPalSiteController;
use App\Http\Controllers\Site\PaymentStripSiteController;
use App\Http\Controllers\Site\ProductSiteController;
use App\Http\Controllers\Site\ProfileUserSiteController;
use App\Http\Controllers\Site\SearchSiteController;
use App\Http\Controllers\Site\SocialController;
use App\Http\Controllers\Admin\UsersController;
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
Route::prefix('email')->middleware('auth:web')->group(function () {
    Route::get('verify', [VerifyEmailController::class, 'notice'])->name('verification.notice');
    Route::post('verification-notification', [VerifyEmailController::class, 'send'])->middleware(['throttle:6,1'])->name('verification.send');
    Route::get('verify/{id}/{hash}', [VerifyEmailController::class, 'verify'])->middleware(['signed'])->name('verification.verify');
});
//
//Route::middleware('guest:admin')->group(function () {
//    // Route::get('/forgot-password', [ResetPasswordController::class, 'requestPasswordReset'])->name('password.request');
//    Route::post('/forgot-password', [ResetPasswordController::class, 'sendResetEmail'])->name('password.email');
//    Route::get('/password-reset/{token}', [ResetPasswordController::class, 'resetPassword'])->name('password.reset');
//    Route::post('/reset-password', [ResetPasswordController::class, 'updatePassword'])->name('password.update');
//});


Route::prefix('cms/admin')->middleware('auth:admin')->group(function(){
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


    Route::resource('products', ProductController::class);

    Route::resource('coupons', CouponController::class);

    Route::resource('offers', OfferController::class);

    Route::get('/delete/{id}', [DeleteImageController::class, 'delete'])->name('delete');

    Route::resource('news', NewsController::class);
    Route::get('/show-comment', [NewsController::class, 'showComment'])->name('show-comment');
    Route::get('/delete-comment/{id}', [NewsController::class, 'deleteComment'])->name('delete-comment');
    Route::get('/status-comment', [NewsController::class, 'status'])->name('status-comment');

    Route::resource('albums', AlbumController::class);

    Route::resource('jobs', JobController::class);

    Route::get('/show-jobsRequest', [JobsRequestController::class, 'index'])->name('show-jobsRequest');
    Route::get('/delete-jobsRequest/{id}', [JobsRequestController::class, 'delete'])->name('delete-jobsRequest');
    Route::get('/show-details-request-jobs/{id}', [JobsRequestController::class, 'showDetails'])->name('show-details-request-jobs');

    Route::resource('slider', SliderController::class);

    Route::resource('brand', BrandController::class);

    Route::resource('they-said', TheySaidController::class);

    Route::resource('success-partners', SuccessPartnerController::class);

    Route::get('/users', [UsersController::class, 'index'])->name('users');
    Route::get('/status-user', [UsersController::class, 'status'])->name('status-user');
    Route::get('/delete-user/{id}', [UsersController::class, 'deleteUser'])->name('delete-user');

    Route::resource('cities', CityController::class);

    Route::prefix('orders')->group(function(){

        Route::get('/all/orders', [OrderController::class, 'AllOrders'])->name('all-orders');

        Route::get('/details/{order_id}', [OrderController::class, 'OrdersDetails'])->name('order.details');

//        Route::get('/confirmed/orders', [OrderController::class, 'ConfirmedOrders'])->name('confirmed-orders');
//
//        Route::get('/processing/orders', [OrderController::class, 'ProcessingOrders'])->name('processing-orders');
//
//        Route::get('/picked/orders', [OrderController::class, 'PickedOrders'])->name('picked-orders');
//
//        Route::get('/shipped/orders', [OrderController::class, 'ShippedOrders'])->name('shipped-orders');
//
//        Route::get('/delivered/orders', [OrderController::class, 'DeliveredOrders'])->name('delivered-orders');
//
//        Route::get('/cancel/orders', [OrderController::class, 'CancelOrders'])->name('cancel-orders');

        Route::get('/pending/confirm/{order_id}', [OrderController::class, 'PendingToConfirm'])->name('pending-confirm');

        Route::get('/confirm/processing/{order_id}', [OrderController::class, 'ConfirmToProcessing'])->name('confirm.processing');

        Route::get('/processing/picked/{order_id}', [OrderController::class, 'ProcessingToPicked'])->name('processing.picked');

        Route::get('/picked/shipped/{order_id}', [OrderController::class, 'PickedToShipped'])->name('picked.shipped');

        Route::get('/shipped/delivered/{order_id}', [OrderController::class, 'ShippedToDelivered'])->name('shipped.delivered');

        Route::get('/return/request', [OrderController::class, 'ReturnRequest'])->name('return.request');

        Route::get('/return/approve/{order_id}', [OrderController::class, 'ReturnRequestApprove'])->name('return.approve');

        Route::get('/all/request', [OrderController::class, 'ReturnAllRequest'])->name('return.all.request');

    });

    Route::prefix('reports')->group(function(){

        Route::view('/view','cms/report/report_view')->name('all-reports');

        Route::post('/search/by/date', [ReportController::class, 'ReportByDate'])->name('search-by-date');

        Route::post('/search/by/month', [ReportController::class, 'ReportByMonth'])->name('search-by-month');

        Route::post('/search/by/year', [ReportController::class, 'ReportByYear'])->name('search-by-year');

    });

    Route::resource('seo', SeoController::class);

    Route::view('notifications','cms.notifications.index')->name('notifications');

    Route::delete('notifications/{id}', [NotificationsController::class,'destroy']);

    Route::get('notifications/{id}', [NotificationsController::class,'markRead'])->name('notifications.read');


    Route::get('logout', [AuthController::class,'logout'])->name('auth.logout');
});

//********************************************************* SITE **************************************************************************************************************


Route::middleware('guest:web')->group(function () {

    Route::post('/forgot-password-user', [AuthSiteController::class, 'sendResetEmail'])->name('site.password.email.user');
    Route::get('/reset-password/{token}', [AuthSiteController::class, 'resetPassword'])->name('site.password.reset.user');
    Route::post('/reset-password-user', [AuthSiteController::class, 'updatePassword'])->name('site.password.update.user');

});


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

    Route::prefix('news')->group(function() {
        Route::get('/', [NewsSiteController::class, 'index'])->name('news');
        Route::get('details/{id}', [NewsSiteController::class, 'newsDetails'])->name('news-details');
        Route::post('comment', [NewsSiteController::class, 'newsComment'])->name('news-comment')->middleware(['auth:web', 'verified']);
    });

    Route::get('/albums', [AlbumsSiteController::class, 'index'])->name('albums');

    Route::get('/contact', [ContactSiteController::class, 'index'])->name('contact');
    Route::post('/save-contact', [ContactSiteController::class, 'save'])->name('save-contact');

    Route::get('/show-jobs', [JobsSiteController::class, 'index'])->name('show-jobs');
    Route::get('/jobs-details/{id}', [JobsSiteController::class, 'jobsDetails'])->name('jobs-details');
    Route::get('/request-jobs/{id}', [JobsSiteController::class, 'jobsRequest'])->name('request-jobs');
    Route::post('/save-request-jobs', [JobsSiteController::class, 'saveJobsRequest'])->name('save-request-jobs');


    Route::get('/search', [SearchSiteController::class, 'index'])->name('search');

    Route::post('search-product', [SearchSiteController::class, 'SearchProduct'])->name('search-product');

    Route::prefix('favourite')->middleware(['auth:web', 'verified'])->group(function() {
        Route::post('/', [FavouriteSiteController::class, 'storfavourite'])->name('favourite');
        Route::get('show', [FavouriteSiteController::class, 'index'])->name('favourite-show');
        Route::delete('delete/{id}', [FavouriteSiteController::class, 'destroy'])->name('favourite-delete');
    });

    Route::prefix('cart')->group(function() {
        Route::get('/', [CartSiteController::class, 'getCart'])->name('site.cart.index');
        Route::post('add', [CartSiteController::class, 'AddToCart'])->name('site.cart.add');
        Route::delete('remove/{rowId}', [CartSiteController::class, 'RemoveCartProduct'])->name('site.cart.remove');
        Route::get('increment/{rowId}', [CartSiteController::class, 'CartIncrement'])->name('site.cart.increment');
        Route::get('decrement/{rowId}', [CartSiteController::class, 'CartDecrement'])->name('site.cart.decrement');
        Route::get('change', [CartSiteController::class, 'CartChange'])->name('site.cart.change');
    });

    Route::prefix('coupon')->middleware(['auth:web', 'verified'])->group(function() {
        Route::post('apply', [CartSiteController::class, 'CouponApply'])->name('site.cart.coupon');
        Route::get('calculation', [CartSiteController::class, 'CouponCalculation'])->name('site.cart.couponcalculation');
        Route::get('remove', [CartSiteController::class, 'CouponRemove'])->name('site.cart.couponremove');
    });

    Route::prefix('checkout')->middleware(['auth:web', 'verified'])->group(function() {
        Route::get('/', [CheckoutSiteController::class, 'CheckoutCreate'])->name('site.checkout');
        Route::post('store', [CheckoutSiteController::class, 'CheckoutStore'])->name('site.checkout.store');


    });
        Route::post('/checkout/payment', [PaymentPayPalSiteController::class, 'checkout_now'])->name('checkout.payment');
        Route::get('/checkout/{order_id}/cancelled', [PaymentPayPalSiteController::class, 'cancelled'])->name('checkout.cancel');
        Route::get('/checkout/{order_id}/completed', [PaymentPayPalSiteController::class, 'completed'])->name('checkout.complete');
        Route::get('/checkout/webhook/{order?}/{env?}', [PaymentPayPalSiteController::class, 'webhook'])->name('checkout.webhook.ipn');

    Route::post('/stripe/order', [PaymentStripSiteController::class, 'StripeOrder'])->name('site.stripe.order')->middleware(['auth:web','verified']);
    Route::post('/cash/order', [CashSiteController::class, 'CashOrder'])->name('site.cash.order')->middleware(['auth:web','verified']);

    Route::middleware(['auth:web','verified'])->group(function() {
        Route::get('/show/orders', [OrderSiteController::class, 'MyOrders'])->name('site.MyOrders');
        Route::get('/return/order/list', [OrderSiteController::class, 'ReturnOrderList'])->name('site.return.order.list');
        Route::get('/cancel/orders', [OrderSiteController::class, 'CancelOrders'])->name('site.cancel.orders');
        Route::get('/order_details/{order_id}', [OrderSiteController::class, 'OrderDetails'])->name('site.OrdersDetails');
        Route::get('/invoice_download/{order_id}', [OrderSiteController::class, 'InvoiceDownload'])->name('site.invoiceDownload');
        Route::put('/return/order/{order_id}', [OrderSiteController::class, 'ReturnOrder'])->name('site.return.order');
        Route::post('/order/tracking', [OrderSiteController::class, 'OrderTraking'])->name('site.order.tracking');
    });

    Route::prefix('profile/user')->middleware('auth:web')->group(function(){
        Route::view('/',  'site/profile/profile')->name('site.profile');
        Route::view('edit-profile','site/profile/edit-profile' )->name('site.edit-profile');
        Route::put('update-profile', [ProfileUserSiteController::class,'updateProfile'])->name('site.update-profile');
        Route::view('edit-password','site/profile/edit-password')->name('site.edit-password');
    });


    Route::get('logout', [AuthSiteController::class,'logoutUser'])->name('auth.logout.user');


});
