@extends('partials.master')
@section('content')

<h2>Booking</h2>

<a href="{{route('booking.form')}}" class="btn btn-dark my-2">Add New</a>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($bookings as $key=>$book)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$book->name}}</td>
      <td>{{$book->status}}</td>
      <td>{{$book->description}}</td>

      <td>
      <button class="btn btn-info">View</button>
      
      <button class="btn btn-danger">Delete</button>
     </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
