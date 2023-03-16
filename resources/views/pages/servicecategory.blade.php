@extends('partials.master')
@section('content')

<div class="row">
<div class="col-md-3"></div>


<div class="col-md-6"><h1>Service Category</h1>

<a href="{{url('/servicecategory/create')}}" class="btn btn-primary">Add New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cat as $cats)
    <tr>
      <th scope="row">{{$cats->id}}</th>
      <td>{{$cats->name}}</td>
      <td>{{$cats->status}}</td>
      <td>{{$cats->image}}</td>
      <td>{{$cats->description}}</td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>


<div class="col-md-3"></div>




</div>




@endsection



