@extends('partials.master')
@section('content')


<h2>Booking Details</h2>
<a href="{{route('bookingdetails.form')}}" class="btn btn-dark my-2">Add New</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Price</th>
      <th scope="col">Booking Name</th>
      <th scope="col">Service Name</th>
      <th scope="col">Serviceman Name</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($bookingdetails as $bookdet)
    <tr>
      <th scope="row">{{$bookdet->id}}</th>
      <td>{{$bookdet->service->price}}</td>
      <td>{{$bookdet->booking->id}}</td>
      <td>{{$bookdet->service->name}}</td>
      <td>{{$bookdet->serviceman->name}}</td>
      <td>{{$bookdet->description}}</td>
      
      <td>
      <a href="{{route('bookingdetails.view',$bookdet->id)}}" class="btn btn-info">View</a>
      
      <a href="{{route('bookingdetails.delete',$bookdet->id)}}" class="btn btn-danger">Delete</a>
     </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection