@extends('partials.master')
@section('content')

<h2>Booking</h2>

<a href="{{route('booking.form')}}" class="btn btn-dark my-2">Add New</a>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Service Name</th>
      <th scope="col">User Name</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($bookings as $key=>$book)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$book->ser_id}}</td>
      <td>{{$book->user_id}}</td>
      <td>{{$book->time}}</td>
      <td>{{$book->date}}</td>

      <td>
      <a href="{{route('booking.view',$book->id)}}" class="btn btn-info">View</a>
      
      <a href="{{route('booking.delete',$book->id)}}" class="btn btn-danger">Delete</a>
     </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
