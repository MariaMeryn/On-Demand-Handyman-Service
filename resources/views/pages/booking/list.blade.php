@extends('partials.master')
@section('content')

<h2>Booking</h2>

<a href="{{route('booking.form')}}" class="btn btn-dark my-2">Add New</a>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">User name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Contact</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($bookings as $key=>$book)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$book->name}}</td>
      <td>{{$book->email}}</td>
      <td>{{$book->address}}</td>
      <td>{{$book->contact}}</td>
      <td>{{$book->status}}</td>
      <td>{{$book->date}}</td>

      <td>
        
      <a href="{{route('booking.view',$book->id)}}" class="btn btn-info">View</a>
      
      <a href="{{route('booking.delete',$book->id)}}" class="btn btn-danger">Delete  </a>
      
     </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
