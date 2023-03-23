@extends('partials.master')
@section('content')


<div class='row'>   
<div class=col-md-3>  </div>
<div class=col-md-6>
<form action="{{route('consumer.store')}}"   method='post'>
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Consumer Name</label>
    <input name="name"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Consumer name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Email</label>
    <input name="email"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter password</label>
    <input name="password"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Password">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Address</label>
    <input name="address"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter address">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Contact Number</label>
    <input name="contact"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Contact Number">
  </div>
 
 
  <button type="submit" class="btn btn-dark my-2">Submit</button>
</form>  


    
</div>

<div class=col-md-3></div>
</div>
@endsection