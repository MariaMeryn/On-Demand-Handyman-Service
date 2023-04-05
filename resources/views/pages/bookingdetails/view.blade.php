@extends('partials.master')
@section('content')
<label for="">Consumer Id:</label>
    <input type="text" value="{$bookdetails->id}}" readonly class="form-control">
<label for="">Consumer Name:</label>
    <input type="text" value="{{$bookdetails->name}}" readonly class="form-control">
<label for="">Address:</label>
    <input type="text" value="{{$bookdetails->address}}" readonly class="form-control">

    <a href="{{route('bookingdetails.list')}}" class="btn btn-success my-2">Back</a>
@endsection