<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\StaffController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\admin\QueryController;
use App\Http\Controllers\admin\ProfileController;

use App\Http\Controllers\staff\ProductController as Staff_ProductController;
use App\Http\Controllers\staff\QueryController as Staff_QueryController;
use App\Http\Controllers\staff\CustomerController as Staff_CustomerController;
use App\Http\Controllers\staff\ProfileController as Staff_ProfileContoller;
use App\Http\Controllers\staff\OrderController as Staff_OrderController;

use App\Http\Controllers\customer\NewsController as customer_NewsController;
use App\Http\Controllers\customer\QueryController as Customer_QueryController;
use App\Http\Controllers\customer\ProfileController as Customer_ProfileController;
use App\Http\Controllers\customer\OrderController as customer_OrderController;
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
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {

    //admin Route
    Route::resource('products',ProductController::class);
    Route::resource('customers',CustomerController::class);
    Route::resource('staffs',StaffController::class);
    Route::resource('news',NewsController::class);
    Route::resource('queries',QueryController::class);
    Route::resource('orders',OrderController::class);
    Route::resource('profiles',ProfileController::class);

});
Route::group(['prefix' => 'staff', 'middleware' => ['role:staff']], function() {

    //admin Route
    Route::resource('staff_products',Staff_ProductController::class);
    Route::resource('staff_customers',Staff_CustomerController::class);
    Route::resource('staff_queries',Staff_QueryController::class);
    Route::resource('staff_profiles',Staff_ProfileContoller::class);
    Route::resource('staff_orders',Staff_OrderController::class);
});
Route::group(['prefix' => 'customer', 'middleware' => ['role:customer']], function() {

    //admin Route
    Route::resource('customer_news',customer_NewsController::class);
    Route::resource('customer_queries',Customer_QueryController::class);
    Route::resource('customer_profiles',Customer_ProfileController::class);
    //Orders
    Route::get('suggest', [customer_OrderController::class, 'suggest_product'])->name('suggest');
    Route::get('product_detail/{id}', [customer_OrderController::class, 'product_detail'])->name('product.detail');
    Route::get('/market_price;', [customer_OrderController::class, 'market_price'])->name('market_price');
    Route::get('/purchase_history', [customer_OrderController::class, 'purchase_history'])->name('purchase_history');



});
Route::get('/',[HomeController::class,'login' ] );

require __DIR__.'/auth.php';
