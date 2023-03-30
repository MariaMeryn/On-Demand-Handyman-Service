@extends('partials.master')
@section('content')


<div class='row'>   
<div class=col-md-3>  </div>
<div class=col-md-6>
<form action="{{route('bookingdetails.store')}}" method="post">
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Name</label>
    <input name="name"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Address</label>
    <input name="address"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Address">
  </div>
 
 
  <button type="submit" class="btn btn-dark my-2">Submit</button>
</form>  


    
</div>

<div class=col-md-3></div>
</div>
@endsection