@extends('partials.master')
@section('content')

<div class='row'>
<div class=col-md-3></div>

<div class=col-md-6>


<form action="{{route('service.store')}}"   method="post">
@csrf

<div class="form-group">
    <label for="exampleFormControlInput1">Enter Cat_id</label>
    <input name="cat_id"  type="integer" class="form-control" id="exampleFormControlInput1" placeholder="Enter Cat_id">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Name</label>
    <input name="name"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Image</label>
    <input name="image"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter image">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Status</label>
    <select name="status" class="form-control" id="exampleFormControlSelect1" >
      <option value="active">Active</option>
      <option value="Inactive">Inactive</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Write Description</label>
    <textarea  name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Description"></textarea>
  </div>

  <button type="submit" class="btn btn-dark my-2">Submit</button>
</form>  

</div>

<div class=col-md-3></div>
</div>

@endsection