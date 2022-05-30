<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CountryStateCityController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\StaffController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\admin\QueryController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\downloadController;
use App\Http\Controllers\admin\FaqsController;
use App\Http\Controllers\admin\Request_meetingController;

use App\Http\Controllers\staff\ProductController as Staff_ProductController;
use App\Http\Controllers\staff\QueryController as Staff_QueryController;
use App\Http\Controllers\staff\CustomerController as Staff_CustomerController;
use App\Http\Controllers\staff\ProfileController as Staff_ProfileContoller;
use App\Http\Controllers\staff\OrderController as Staff_OrderController;
use App\Http\Controllers\staff\downloadController  as Staff_downloadController;
use App\Http\Controllers\staff\FaqsController as Staff_FaqsController;
use App\Http\Controllers\staff\Request_meetingController as Staff_meetingController;

use App\Http\Controllers\customer\NewsController as customer_NewsController;
use App\Http\Controllers\customer\QueryController as Customer_QueryController;
use App\Http\Controllers\customer\ProfileController as Customer_ProfileController;
use App\Http\Controllers\customer\OrderController as customer_OrderController;
use App\Http\Controllers\customer\FaqsController as customer_FaqsController;
use App\Http\Controllers\Request_meetingController as customer_meetingController;
use App\Http\Controllers\customer\AccountsController;
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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard',[HomeController::class,'index' ] )->name('dashboard');


});
Route::get('country-state-city', [CountryStateCityController::class, 'index']);
    Route::post('get-states-by-country', [CountryStateCityController::class, 'getState']);
    Route::post('get-cities-by-state', [CountryStateCityController::class, 'getCity']);
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {

    //admin Route
    Route::resource('products',ProductController::class);
    Route::resource('customers',CustomerController::class);
    Route::resource('staffs',StaffController::class);
    Route::resource('news',NewsController::class);
    Route::resource('queries',QueryController::class);
    Route::resource('orders',OrderController::class);
    Route::resource('profiles',ProfileController::class);
      //download file
    Route::get('admin/download/{file}', [downloadController::class, 'getDownload'])->name('admin.download');
    //Faqs
    Route::resource('faqs',FaqsController::class);
    Route::resource('meetings',Request_meetingController::class);

});
Route::group(['prefix' => 'staff', 'middleware' => ['role:staff']], function() {

    //staff Route
    Route::resource('staff_products',Staff_ProductController::class);
    Route::resource('staff_customers',Staff_CustomerController::class);
    Route::resource('staff_queries',Staff_QueryController::class);
    Route::resource('staff_profiles',Staff_ProfileContoller::class);
    Route::resource('staff_orders',Staff_OrderController::class);
    Route::resource('staff_faqs',Staff_FaqsController::class);
    Route::resource('staff_meetings',Staff_meetingController::class);
      //download file
    Route::get('staff/download/{file}', [Staff_downloadController::class, 'getDownload'])->name('staff.download');

});
Route::group(['prefix' => 'customer', 'middleware' => ['role:customer']], function() {

    //admin Route
    Route::resource('customer_news',customer_NewsController::class);
    Route::resource('customer_queries',Customer_QueryController::class);
    Route::resource('customer_profiles',Customer_ProfileController::class);
    Route::resource('customer_meetings',customer_meetingController::class);

    //Orders
    Route::get('customer/download/{file}', [customer_OrderController::class, 'getDownload'])->name('customer.download');
    Route::get('suggest', [customer_OrderController::class, 'suggest_product'])->name('suggest');
    Route::get('product_detail/{id}', [customer_OrderController::class, 'product_detail'])->name('product.detail');
    Route::get('/market_price', [customer_OrderController::class, 'market_price'])->name('market_price');
    Route::get('/purchase_history', [customer_OrderController::class, 'purchase_history'])->name('purchase_history');
    Route::get('checkout/{id}',[customer_OrderController::class,'checkout'])->name('checkout');
    Route::post('order/store/{id}', [customer_OrderController::class, 'order_store'])->name('order.store');
    Route::get('order/delete/{id}', [customer_OrderController::class, 'order_delete'])->name('order.delete');

    //Faqs

    Route::resource('customer_faqs',customer_FaqsController::class);
    //accounts
    Route::get('link/accounts', [AccountsController::class, 'link_account'])->name('link.account');
    Route::get('consultant', [AccountsController::class, 'consultant'])->name('consultant');
    //stripe
     Route::get('stripe', [customer_OrderController::class, 'stripe']);
    Route::post('stripe', [customer_OrderController::class, 'stripePost'])->name('stripe.post');



});
Route::get('/',[HomeController::class,'login' ] );

require __DIR__.'/auth.php';
