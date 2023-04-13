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
      <th scope="col">Description</th>
      <th scope="col">Categories</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 

  <tbody>
  @foreach($sers as $ser) 
    <tr>
      <th scope="row">{{$ser->id}}</th>
      <td>{{$ser->name}}</td>
    <td><img src="{{url('/uploads/'. $ser->image)}}" alt="img" class="w-25"></td>
      <td>{{$ser->status}}</td>
      <td>{{$ser->description}}</td>
      <td>{{$ser->category->name}}</td>
      <td>
      <a href="{{route('service.view',$ser->id)}}" class="btn btn-info">View</a>
      <a href="{{route('service.delete',$ser->id)}}" class="btn btn-danger">Delete</a>
</td>
    </tr>

    @endforeach
  </tbody>


</table>

@endsection