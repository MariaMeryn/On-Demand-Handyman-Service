@extends('partials.master')
@section('content')

<div class='row'>
<div class=col-md-3></div>

<div class=col-md-6>


<form action="{{route('service.update',$service->id)}}"  method="post" enctype="multipart/form-data">
@method('put') 
@csrf



  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Name</label>
    <input name="name" value="{{$service->name}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
  </div>

  
  

  <div class="form-group">
    <label for="exampleFormControlInput1">Image</label>
    <input name="image"  value="{{$service->image}}" type="file" class="form-control" id="exampleFormControlInput1" placeholder="Enter image">
  </div>
  

  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Status</label>
    <select name="status"  value="{{$service->status}}" class="form-control" id="exampleFormControlSelect1" >
      <option value="active">Active</option>
      <option value="Inactive">Inactive</option>
    </select>
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Price</label>
    <input name="price" value="{{$service->price}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <input  name="description"  value="{{$service->description}}" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Description"></input>
  </div>

  <div class="form-group">
    
    <label for="exampleFormControlInput1">Select Category</label>
    <select name="cat_id" id="cat_id"   class="form-control">
      @foreach($cat as $cats)

    <option value="{{$cats->id}}">{{$cats->name}}</option>
      @endforeach
    </select>
    
  </div>

  <button type="submit" class="btn btn-dark my-2">Update</button>
</form>  

</div>

<div class=col-md-3></div>
</div>

@endsection
