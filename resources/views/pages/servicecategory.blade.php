@extends('partials.master')
@section('content')

<h2>Service Category</h2>

<a href="{{route('servicecategory.form')}}" class="btn btn-dark my-2">Add New</a>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scoppe="col">Active</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cat as $key=>$cats)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$cats->name}}</td>
      <td>{{$cats->status}}</td>
      <td><img src="{{url('/uploads/'.$cats->image)}}" alt="img" class="w-25"></td>
      <td>{{$cats->description}}</td>
      <td>
      <a href="{{route('servicecat.view',$cats->id)}}" class="btn btn-info">View</a>
      <a href="{{route('servicecat.delete',$cats->id)}}" class="btn btn-danger">Delete</a>
     </td>

    </tr>
   @endforeach
  </tbody>
</table>

@endsection



