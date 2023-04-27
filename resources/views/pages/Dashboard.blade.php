@extends('partials.master')
@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Serviceman</div>
                <p style="margin: 0 auto;font-size: xx-large"> 

                {{$servicemans}}
            </p>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Service Category</div>
                <p style="margin: 0 auto;font-size: xx-large"> 
                     {{$cat}}
            
            </p>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Services</div>
                <p style="margin: 0 auto;font-size: xx-large"> 
                     {{$sers}}
            
            </p>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Booking details</div>
                <p style="margin: 0 auto;font-size: xx-large"> 
                     {{$booking}}
            
            </p>
            </div>
        </div>
    </div>
  
@endsection