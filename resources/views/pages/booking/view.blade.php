@extends('partials.master')
@section('content')
<label for="">Id:</label>
    <input type="integer" value="{{$booking->ser_id}}" readonly class="form-control">

<label for="">User Name:</label>
    <input type="string" value="{{$booking->name}}" readonly class="form-control">

<label for="">Email:</label>
    <input type="email" value="{{$booking->email}}" readonly class="form-control">

    <label for="">Address:</label>
    <input type="string" value="{{$booking->address}}" readonly class="form-control">

    <label for="">Contact:</label>
    <input type="integer" value="{{$booking->contact}}" readonly class="form-control">

    <label for="">Status:</label>
    <input type="string" value="{{$booking->status}}" readonly class="form-control">

    <label for="">Date:</label>
    <input type="date" value="{{$booking->date}}" readonly class="form-control">
   

<form action="{{route('booking.assign',$booking->id)}}" method="post">
   
@csrf
    <input type="hidden" name="service_id" value="{{$booking->id}}">
    <select name="" id="">
        @foreach($serviceMan as $data)
        <option value="{{$data->id}}">{{$data->name}}</option>
        @endforeach
    </select>
   <button>select serviceman</button>
   </form>
@endsection