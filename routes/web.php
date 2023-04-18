<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\BookingDetailsController;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicemanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//website route
Route::get('/',[WebsiteController::class,'web'])->name('website');
Route::get('/service/search',[WebsiteController::class,'servicesearch'])->name('servicesearch');
Route::get('/service-under-category/{id}',[WebsiteController::class,'serviceundercategory'])->name('service.under.category');
Route::post('/user-store',[WebsiteController::class,'userstore'])->name('user.store');
Route::post('/user-login',[WebsiteController::class,'userlogin'])->name('user.login');
Route::get('/team',[WebsiteController::class,'team'])->name('team');
Route::get('/user-logout',[WebsiteController::class,'userlogout'])->name('user.logout');
//booking route
Route::get('/single-service/{id}',[WebsiteController::class,'singleservice'])->name('single.service');
Route::post('/booking/store',[WebsiteController::class,'store'])->name('booking.store');




//admin panel routes
Route::group(['prefix'=>'admin'],function(){

    Route::get('/login',[homecontroller::class,'login'])->name('login');
    Route::post('/do-login',[homecontroller::class,'dologin'])->name('do.login');

      Route::group(['middleware'=>'auth'],function(){

    
        Route::get('/',[homecontroller::class,'home'])->name('home');
        Route::get('/logout',[homecontroller::class,'logout'])->name('logout');

        // for dashboard
        Route::get('/dashboard',[homecontroller::class,'dashboard'])->name('dashboard');


        // for consumer
        Route::get('/consumer/list',[ConsumerController::class,'list'])->name('consumer.list');
        Route::get('/consumer/form',[ConsumerController::class,'form'])->name('consumer.form');
        Route::post('/consumer/store',[ConsumerController::class,'store'])->name('consumer.store');
        Route::get('/consumer/view/{id}',[ConsumerController::class,'view'])->name('consumer.view');
        Route::get('/consumer/delete/{id}',[ConsumerController::class,'delete'])->name('consumer.delete');


        // for serviceman
        Route::get('/serviceman/list',[ServicemanController::class,'list'])->name('serviceman.list');
        Route::get('/serviceman/form',[ServicemanController::class,'form'])->name('serviceman.form');
        Route::post('/serviceman/store',[ServicemanController::class,'store'])->name('serviceman.store');
        Route::get('/serviceman/view/{id}',[ServicemanController::class,'view'])->name('serviceman.view');
        Route::get('/serviceman/delete/{id}',[ServicemanController::class,'delete'])->name('serviceman.delete');
        Route::get('/serviceman/edit/{id}',[ServicemanController::class,'edit'])->name('serviceman.edit');
        Route::put('/serviceman/update/{id}',[ServicemanController::class,'update'])->name('serviceman.update');
        // for service_category
        Route::get('/servicecategory/list',[ServiceCategoryController::class,'servicecategory'])->name('servicecategory.list');
        Route::get('/servicecategory/form',[ServiceCategoryController::class,'create'])->name('servicecategory.form');
        Route::post('/servicecategory/store',[ServiceCategoryController::class,'store'])->name('store');
        Route::get('/servicecatagory/view/{id}',[ServiceCategoryController::class,'view'])->name('servicecat.view');
        Route::get('/servicecatagory/delete/{id}',[ServiceCategoryController::class,'delete'])->name('servicecat.delete');

        // for service 
        Route::get('/service/list',[ServiceController::class,'service'])->name('service.list');
        Route::get('/service/form',[ServiceController::class,'create'])->name('service.form');
        Route::post('/service/store',[ServiceController::class,'store'])->name('service.store');
        Route::get('/service/view/{id}',[ServiceController::class,'view'])->name('service.view');
        Route::get('/service/delete/{id}',[ServiceController::class,'delete'])->name('service.delete');

        // for Booking_Details
        Route::get('/bookingdetails/list',[BookingDetailsController::class,'list'])->name('bookingdetails.list');
        Route::get('/bookingdetails/form',[BookingDetailsController::class,'form'])->name('bookingdetails.form');
        Route::post('/bookingdetails/store',[BookingDetailsController::class,'store'])->name('bookingdetails.store');
        Route::get('/bookingdetails/view/{id}',[BookingDetailsController::class,'view'])->name('bookingdetails.view');
        Route::get('/bookingdetails/delete/{id}',[BookingDetailsController::class,'delete'])->name('bookingdetails.delete');



        // for Booking
        Route::get('/booking/list',[BookingController::class,'list'])->name('booking.list');
        Route::get('/booking/form',[BookingController::class,'form'])->name('booking.form');
        
        Route::get('/booking/view/{id}',[BookingController::class,'view'])->name('booking.view');
        Route::get('/booking/delete/{id}',[BookingController::class,'delete'])->name('booking.delete');
        Route::post('/booking/assign/{id}',[BookingController::class,'assign'])->name('booking.assign');
        

      
        // for Report
        Route::get('/report/list',[ReportController::class,'list'])->name('report.list');
        Route::get('/report/form',[ReportController::class,'form'])->name('report.form');
        Route::post('/report/store',[ReportController::class,'store'])->name('report.store');

    });
});