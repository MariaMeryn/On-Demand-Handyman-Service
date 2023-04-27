@extends('partials.master')
@section('content')





    <h1>Service</h1>
    <a href="{{route('service.form')}}" class="btn btn-dark my-2 ">  Add New  </a>

    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Categories</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 

  <tbody>
  @foreach($sers as $key=>$ser) 
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$ser->name}}</td>
    <td><img src="{{url('/uploads/'. $ser->image)}}" alt="img" class="w-25"></td>
      <td>{{$ser->status}}</td>
      <td>{{$ser->price}}</td>
      <td>{{$ser->description}}</td>
      <td>{{$ser->category_id}}</td>
      <td>
      <a href="{{route('service.view',$ser->id)}}" class="btn btn-info">View</a>
      <a href="{{route('service.delete',$ser->id)}}" class="btn btn-danger">Delete</a>
      <a href="{{route('service.edit',$ser->id)}}" class="btn btn-success">Edit</a>
</td>
    </tr>

    @endforeach
  </tbody>


</table>
{{$sers->links()}}
@endsection