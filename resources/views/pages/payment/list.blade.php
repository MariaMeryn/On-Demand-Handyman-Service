@extends('partials.master')
@section('content')

<h2>Payment</h2>
<a href="{{route('payment.form')}}" class="btn btn-secondary my-2">Add New</a>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Online</th>
      <th scope="col">Offline</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach($payments as $payment)
    <tr>
      <th scope="row">{{$payment->id}}</th>
      <td>{{$payment->type}}</td>
      <td>{{$payment->types}}</td>
      <td>
      <button class="btn btn-info">View</button>
      
      <button class="btn btn-danger">Delete</button>
     </td>

    </tr>
    @endforeach
    </tbody>
    </table>
  

@endsection