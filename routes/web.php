<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingDetailsController;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RatingsController;
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

Route::get('/',[homecontroller::class,'home']);
// for dashboard
Route::get('/dashboard',[homecontroller::class,'dashboard'])->name('dashboard');



// for consumer
Route::get('/consumer/list',[ConsumerController::class,'list'])->name('consumer.list');
Route::get('/consumer/form',[ConsumerController::class,'form'])->name('consumer.form');
Route::post('/consumer/store',[ConsumerController::class,'store'])->name('consumer.store');
Route::get('/consumer/view/{id}',[ConsumerController::class,'view'])->name('consumer.view');
Route::get('/consumer/delete/{id}',[ConsumerController::class,'delete'])->name('consumer.delete');


// for serviceman
Route::get('/serviceman/list',[ServicemanController::class,'serviceman'])->name('serviceman.list');
Route::get('/serviceman/form',[ServicemanController::class,'list'])->name('serviceman.form');
Route::post('/serviceman/store',[ServicemanController::class,'store'])->name('serviceman.store');

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

// for Booking_Details
Route::get('/bookingdetails/list',[BookingDetailsController::class,'list'])->name('bookingdetails.list');
Route::get('/bookingdetails/form',[BookingDetailsController::class,'form'])->name('bookingdetails.form');
Route::post('/bookingdetails/store',[BookingDetailsController::class,'store'])->name('bookingdetails.store');



// for Booking
Route::get('/booking/list',[BookingController::class,'list'])->name('booking.list');
Route::get('/booking/form',[BookingController::class,'form'])->name('booking.form');
Route::post('/booking/store',[BookingController::class,'store'])->name('booking.store');

// for Payment
Route::get('/payment.list',[PaymentController::class,'list'])->name('payment.list');
Route::get('/payment.form',[PaymentController::class,'form'])->name('payment.form');
Route::post('/payment.store',[PaymentController::class,'store'])->name('payment.store');




// for Ratings
Route::get('/ratings/list',[RatingsController::class,'list'])->name('ratings.list');


// for Report
Route::get('/report/list',[ReportController::class,'list'])->name('report.list');
Route::get('/report/form',[ReportController::class,'form'])->name('report.form');
Route::post('/report/store',[ReportController::class,'store'])->name('report.store');