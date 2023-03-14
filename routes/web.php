<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingDetailsController;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RatingsController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ServiceCatagoryController;
use App\Http\Controllers\ServiceController;
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


// for service_category
Route::get('/servicecatagory',[ServiceCatagoryController::class,'servicecatagory'])->name('servicecatagory');
Route::get('/servicecatagory/create',[ServiceCatagoryController::class,'create']);
Route::post('/servicecatagory/store',[ServiceCatagoryController::class,'store']);

// for service 
Route::get('/service',[ServiceController::class,'service'])->name('service');
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