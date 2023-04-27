@extends('partials.master')
@section('content')

<div class='row'>
<div class=col-md-3></div>

<div class=col-md-6>


<form action="{{route('booking.updated',$booking->id)}}"  method='post'>
  @method('put') 
  @csrf
  <div class="form-group">
  <label for="exampleFormControlInput1">Id:</label> 
    <input type="integer" value="{{$booking->ser_id}}" type="file" class="form-control" id="exampleFormControlInput1" placeholder="Enter image"  >
    </div>


    <div class="form-group">
<label for="exampleFormControlInput1">User Name:</label>
    <input type="string" value="{{$booking->name}}" type="file" class="form-control" id="exampleFormControlInput1" placeholder="Enter image">
    </div>
    <div class="form-group">
<label for="exampleFormControlInput1">Email:</label>
    <input type="email" value="{{$booking->email}}" type="file" class="form-control" id="exampleFormControlInput1" placeholder="Enter image">
    </div>

<div class="form-group">
    <label for="exampleFormControlInput1">Address:</label>
    <input type="string" value="{{$booking->address}}" type="file" class="form-control" id="exampleFormControlInput1" placeholder="Enter image">
</div>

    <div class="form-group">
    <label for="exampleFormControlInput1">Contact:</label>
    <input type="integer" value="{{$booking->contact}}" type="file" class="form-control" id="exampleFormControlInput1" placeholder="Enter image">
    </div>

    <div class="form-group">
    <label for="exampleFormControlInput1">Status:</label>
    <input type="string" value="{{$booking->status}}" type="file" class="form-control" id="exampleFormControlInput1" placeholder="Enter image" >
</div>

    <div class="form-group">
    <label for="exampleFormControlInput1">Date:</label>
    <input type="date" value="{{$booking->date}}" type="file" class="form-control" id="exampleFormControlInput1" placeholder="Enter image">
    </div>

    <button type="submit" class="btn btn-success my-2">Update</button>
    
@endsection