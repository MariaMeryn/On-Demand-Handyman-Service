@extends('partials.master')
@section('content')
<label for="">Consumer Id:</label>
    <input type="text" value="{{$service->id}}" readonly class="form-control">
<label for="">Consumer Name:</label>
    <input type="text" value="{{$service->name}}" readonly class="form-control">
<label for="">Status:</label>
    <input type="text" value="{{$service->status}}" readonly class="form-control">
<label for="">Image:</label>
    <input type="text" value="{{$service->image}}" readonly class="form-control">
<label for="">Description:</label>
    <input type="text" value="{{$service->description}}" readonly class="form-control">

    <a href="{{route('service.list')}}" class="btn btn-success my-2">Back</a>
@endsection