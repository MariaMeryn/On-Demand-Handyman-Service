@extends('partials.master')
@section('content')
<label for="">Service name:</label>
    <input type="integer" value="{{$booking->ser_id}}" readonly class="form-control">
<label for="">User Name:</label>
    <input type="integer" value="{{$booking->user_id}}" readonly class="form-control">


    <a href="{{route('booking.list')}}" class="btn btn-success my-2">Back</a>
@endsection