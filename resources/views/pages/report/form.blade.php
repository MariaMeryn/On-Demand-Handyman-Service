@extends('partials.master')
@section('content')



<div class='row'>
<div class=col-md-3></div>

<div class=col-md-6>


<form action="{{route('report.store')}}"   method="post" >
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input name="name"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Category name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Status</label>
    <select name="status" class="form-control" id="exampleFormControlSelect1" >
      <option value="active">Active</option>
      <option value="Inactive">Inactive</option>
      
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Write Address</label>
    <textarea  name="address" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Enter Description"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Write password</label>
    <textarea  name="password" class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Enter Description"></textarea>
  </div>


  <button type="submit" class="btn btn-dark my-2">Submit</button>
</form>  

</div>

<div class=col-md-3></div>
</div>

@endsection