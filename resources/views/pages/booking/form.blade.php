@extends('partials.master')
@section('content')



<div class='row'>
<div class=col-md-3></div>

<div class=col-md-6>


<form action="{{route('booking.store')}}"  method='post'>
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Write service name</label>
    <input name="ser_id"  type="integer" class="form-control" id="exampleFormControlInput1" placeholder="Enter service name">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Write user name</label>
    <textarea  name="user_id" type="integer" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Enter user name"></textarea>
  </div>

 <button style="color:white;" type="submit" class="btn btn-dark my-2">Submit</button>
</form>  

</div>

<div class=col-md-3></div>
</div>

@endsection