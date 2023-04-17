@extends('partials.master')
@section('content')


<div class='row'>   
<div class=col-md-3>  </div>
<div class=col-md-6>
<form action="{{route('bookingdetails.store')}}" method="post">
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Booking Name</label>
    <input name="booking_id"  type="integer" class="form-control" id="exampleFormControlInput1" placeholder="Enter booking name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter price</label>
    <input name="price"  type="integer" class="form-control" id="exampleFormControlInput1" placeholder="Enter booking name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter service name</label>
    <input name="service_id"  type="integer" class="form-control" id="exampleFormControlInput1" placeholder="Enter service name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter serviceman name</label>
    <input name="serviceman_id"  type="integer" class="form-control" id="exampleFormControlInput1" placeholder="Enter serviceman name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter description</label>
    <input name="description"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Address">
  </div>
 
 
  <button type="submit" class="btn btn-dark my-2">Submit</button>
</form>  


    
</div>

<div class=col-md-3></div>
</div>
@endsection