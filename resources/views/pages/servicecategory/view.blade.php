@extends('partials.master')
@section('content')
<label for="">Consumer Id:</label>
    <input type="text" value="{{$cat->id}}" readonly class="form-control">
<label for="">Consumer Name:</label>
    <input type="text" value="{{$cat->name}}" readonly class="form-control">
<label for="">Status:</label>
    <input type="text" value="{{$cat->status}}" readonly class="form-control">
<label for="">Image:</label>
    <input type="text" value="{{$cat->image}}" readonly class="form-control">
<label for="">Description:</label>
    <input type="text" value="{{$cat->description}}" readonly class="form-control">

    <a href="{{route('servicecategory.list')}}" class="btn btn-success my-2">Back</a>
@endsection