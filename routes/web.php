<?php

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
Route::get('/consumer',[ConsumerController::class,'consumer'])->name('consumer');
// for serviceman
Route::get('/serviceman',[ServicemanController::class,'serviceman'])->name('serviceman');
Route::get('/serviceman/list',[ServicemanController::class,'list'])->name('serviceman.list');
Route::post('/serviceman/store',[ServicemanController::class,'store'])->name('serviceman.store');

// for service_category
Route::get('/servicecategory',[ServiceCategoryController::class,'servicecategory'])->name('servicecategory');
Route::get('/servicecategory/create',[ServiceCategoryController::class,'create']);
Route::post('/servicecategory/store',[ServiceCategoryController::class,'store']);

// for service 
Route::get('/service',[ServiceController::class,'service'])->name('service');
Route::get('/service/list',[ServiceController::class,'create']);
Route::post('/service/store',[ServiceController::class,'store']);


// for Booking_Details
Route::get('/bookingdetails',[BookingDetailsController::class,'bookingdetails'])->name('bookingdetails');
// for Booking
Route::get('/booking',[BookingController::class,'booking'])->name('booking');
// for Payment
Route::get('/payment',[PaymentController::class,'payment'])->name('payment');
// for Ratings
Route::get('/ratings',[RatingsController::class,'ratings'])->name('ratings');
// for Report
Route::get('/report',[ReportController::class,'report'])->name('report');