<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\adminStaffController;
use App\Http\Controllers\laundryItemsController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\requestController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\cartcontroller;
use App\Http\Controllers\checkoutController;




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

Route::get('/', function () {
    return view('welcome');
});

//UNAUTHENTICATED ROUTES
Route::get('contact-us',[frontendController::class, 'contactUs']);
Route::get('pricing',[frontendController::class, 'prices']);




//  Route::middleware('guest')->group(function ()
// {
//  	Route::view('/login', 'auth.login')->name('login');
//      Route::post('/login', [LoginController::class, 'login'])->name('login');

//  });

Route::middleware('auth')->group(function ()
 {
    Route::resource('/customers', 'CustomerController', ['except' => ['show']]);


 });


    //REQUEST
     Route::get('request',[staffController::class, 'showRequest'])->name('staff.request');
    Route::PUT('confirmed-request/{id}',[requestController::class, 'updateConfirmed'])->name('confirmed.request');


    Route::get('confirmed-request',[requestController::class, 'confirmed'])->name('admin.confirmed-request');
    Route::get('delivered-request',[requestController::class, 'delivered'])->name('admin.delivered-request');
    Route::get('request-comfirmation/{id}',[requestController::class, 'requestConfirmation'])->name('admin.request-confirmation');
    Route::get('comfirmation/{id}',[requestController::class, 'showdeliveredConfirmation']);
    Route::PUT('delivered-comfirmation/{id}',[requestController::class, 'deliveredConfirmation'])->name('admin.delivery-confirmation');



Route::prefix('customers')->name('customers.')->group(function ()
{
    Route::post('/datatables', 'CustomerController@datatables')->name('datatables');
    Route::post('/search', 'CustomerController@search')->name('search');
});



Route::group(['middleware'=> 'preventBackMiddleware'], function(){
    Auth::routes();
     Route::get('redirects', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

    //GENERAL AUTH
Route::group(['middleware'=>'auth'], function(){


    // LAUNDRY ITEMS
    Route::get('laundry-items',[laundryItemsController::class, 'index'])->name('admin.laundry-items');
    Route::get('create-items',[laundryItemsController::class, 'show'])->name('admin.create-items');
    Route::post('create-items',[laundryItemsController::class, 'create'])->name('admin.create-items');
    Route::get('edit-items/{id}',[laundryItemsController::class, 'showEdit'])->name('admin.edit--items');
    Route::PUT('edit-item/{id}',[laundryItemsController::class, 'update'])->name('admin.edit-items');



    // CUSTOMER ROUTES
    Route::get('customers',[CustomerController::class, 'index'])->name('admin.customers');
    Route::get('create-customer',[CustomerController::class, 'show'])->name('customers.show');
    Route::post('create-customer',[CustomerController::class, 'create'])->name('customers.create');
    Route::get('edit-customers/{id}',[CustomerController::class, 'edit'])->name('customers.edit');
    Route::PUT('edit-customers/{id}',[CustomerController::class, 'update'])->name('customers.edit');
    Route::DELETE('delete-customers/{id}',[CustomerController::class, 'delete'])->name('customers.delete');


});


Route::group(['prefix'=>'admin','middleware'=>'adminMiddleware','auth'], function(){
    Route::get('dashboard',[adminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile',[adminController::class, 'index'])->name('admin.profile');
    Route::get('settings',[adminController::class, 'index'])->name('admin.settings');

    // ADMIN STAFF
    Route::get('admin-staff',[adminStaffController::class, 'index'])->name('admin.admin_staff');
    Route::get('create-staff',[adminStaffController::class, 'show'])->name('admin.admin_staff_show');
    Route::post('create-staff',[adminStaffController::class, 'create'])->name('admin.create.admin_staff');


});



Route::group(['prefix'=>'staff','middleware'=>'staffMiddleware','auth'], function(){
    Route::get('dashboard',[staffController::class, 'index'])->name('staff.dashboard');
    Route::get('profile',[staffController::class, 'index'])->name('staff.profile');
    Route::get('settings',[staffController::class, 'index'])->name('staff.settings');




});






Route::group(['prefix'=>'client','middleware'=>'clientMiddleware','auth'], function(){
    Route::get('dashboard',[clientController::class, 'index'])->name('client.dashboard');
    Route::get('profile',[clientController::class, 'profile'])->name('client.profile');
    Route::get('settings',[clientController::class, 'index'])->name('client.settings');
    // Route::get('account',[clientController::class, 'account'])->name('client.account');

    Route::get('transactions',[clientController::class, 'transactions'])->name('client.transactions');
    Route::get('items',[frontendController::class, 'clothes'])->name('client.items');
    Route::get('invoice',[frontendController::class, 'invoice'])->name('client.invoice');

    //REQUEST FROM CLIENTS
    Route::get('req',[requestController::class, 'call'])->name('client.req');
    // Route::post('req',[requestController::class, ' placeRequest'])->name('client.placerequest');
    Route::get('request',[requestController::class, 'showRequest'])->name('client.request');
    Route::post('request',[requestController::class, 'cart'])->name('client.create.request');
    // Route::get('request',[clientController::class, 'sendRequest'])->name('client.sendrequest');
    Route::get('cart',[cartcontroller::class, 'index'])->name('client.sendrequest');

    // Route::post('add-to-cart/{id}',[cartcontroller::class, 'addtocart']);


    //CLIENT PROFILE
    Route::get('edit-profile/{id}',[clientController::class, 'showEdit'])->name('client.show.profile');
    Route::Put('update-profile/{id}',[clientController::class, 'update'])->name('client.update.profile');

    Route::get('add-to-cart/{id}',[cartcontroller::class, 'addtocartt']);
    Route::get('laundry-cart',[cartcontroller::class, 'cart']);
    Route::get('delete-laundry-item/{id}',[cartcontroller::class, 'remove']);
    Route::get('checkout',[cartcontroller::class, 'remove']);



});
Route::get('item-list',[requestController::class, 'itemlist']);
Route::get('checkout',[requestController::class, 'showCart']);






Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');

Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
Route::get('payy',[PaymentController::class, 'index']);

Route::post('add-to-cart',[cartcontroller::class, 'addtocart']);

// Route::get('add-to-cart/{id}',[cartcontroller::class, 'addtocartt']);
Route::post('add-to-cart/{id}',[cartcontroller::class, 'addtocartt']);



