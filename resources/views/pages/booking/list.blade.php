@extends('partials.master')
@section('content')

<div class='row'>
<div class=col-md-3></div>
<div class=col-md-6>

<h2>Booking</h2>

<a href="{{route('booking.form')}}" class="btn btn-dark my-2">Add New</a>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    @foreach($bookings as $book)
    <tr>
      <th scope="row">{{$book->id}}</th>
      <td>{{$book->name}}</td>
      <td>{{$book->status}}</td>
      <td>{{$book->description}}</td>
    </tr>
    @endforeach
  </tbody>
</table>


</div>
<div class=col-md-3></div>
</div>


@endsection
