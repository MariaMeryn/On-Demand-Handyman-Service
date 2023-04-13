@extends('partials.master')
@section('content')

<div class='row'>
<div class=col-md-3></div>

<div class=col-md-6>


<form action="{{route('service.store')}}"   method="post" enctype="multipart/form-data">
@csrf



  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Name</label>
    <input name="name"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Image</label>
    <input name="image"  type="file" class="form-control" id="exampleFormControlInput1" placeholder="Enter image">
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

  <div class="form-group">
    
    <label for="exampleFormControlInput1">Select Category</label>
    <select name="cat_id" id="cat_id"   class="form-control">
      @foreach($cat as $cats)

    <option value="{{$cats->id}}">{{$cats->name}}</option>
      @endforeach
    </select>
    
  </div>

  <button type="submit" class="btn btn-dark my-2">Submit</button>
</form>  

</div>

<div class=col-md-3></div>
</div>

@endsection