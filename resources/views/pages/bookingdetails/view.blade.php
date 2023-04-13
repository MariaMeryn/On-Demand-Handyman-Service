@extends('partials.master')
@section('content')
<label for="">Consumer Id:</label>
    <input type="text" value="{$bookdetails->id}}" readonly class="form-control">
<label for="">Consumer Name:</label>
    <input type="text" value="{{$bookdetails->booking_id}}" readonly class="form-control">
<label for="">Address:</label>
    <input type="text" value="{{$bookdetails->service_id}}" readonly class="form-control">
    <label for="">Address:</label>
    <input type="text" value="{{$bookdetails->serviceman_id}}" readonly class="form-control">
    <label for="">Address:</label>
    <input type="text" value="{{$bookdetails->description}}" readonly class="form-control">

    <a href="{{route('bookingdetails.list')}}" class="btn btn-success my-2">Back</a>
@endsection