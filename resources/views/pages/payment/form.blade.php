@extends('partials.master')
@section('content')

<div class='row'>   
<div class=col-md-3>  </div>
<div class=col-md-6>
<form action="{{route('payment.store')}}"   method='post'>
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Online Delivery</label>
    <input name="type"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="online">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Cash On Delivery</label>
    <input name="types"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cash On">
  </div>
  
 
 
  <button type="submit" class="btn btn-dark my-2">Submit</button>
</form>  


    
</div>

<div class=col-md-3></div>
</div>



@endsection