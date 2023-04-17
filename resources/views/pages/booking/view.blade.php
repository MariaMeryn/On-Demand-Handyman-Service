@extends('partials.master')
@section('content')
<label for="">Service name:</label>
    <input type="integer" value="{{$booking->ser_id}}" readonly class="form-control">
<label for="">User Name:</label>
    <input type="integer" value="{{$booking->user_id}}" readonly class="form-control">

   

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