@extends('partials.master')
@section('content')


<h2>Booking Details</h2>
<a href="{{route('bookingdetails.form')}}" class="btn btn-dark my-2">Add New</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>

      <td>
      <button class="btn btn-info">View</button>
      
      <button class="btn btn-danger">Delete</button>
     </td>
      
    </tr>
  </tbody>
</table>

@endsection