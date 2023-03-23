@extends('partials.master')
@section('content')



<div class='row'>
    <div class=col-md-3> </div>
    <div class=col-md-6> 
<h2>Consumer</h2>
<a href="{{route('payment.form')}}" class="btn btn-secondary my-2">Secondary</a>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Online</th>
      <th scope="col">Offline</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach($payments as $payment)
    <tr>
      <th scope="row">{{$payment->id}}</th>
      <td>{{$payment->type}}</td>
      <td>{{$payment->types}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>

    <div class=col-md-3> 
    </div>
    

  






@endsection