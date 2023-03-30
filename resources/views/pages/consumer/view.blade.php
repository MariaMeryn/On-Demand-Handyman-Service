@extends('partials.master')
@section('content')
<label for="">Consumer Id:</label>
    <input type="text" value="{{$consumer->id}}" readonly class="form-control">
<label for="">Consumer Name:</label>
    <input type="text" value="{{$consumer->name}}" readonly class="form-control">
<label for="">Email:</label>
    <input type="text" value="{{$consumer->email}}" readonly class="form-control">
<label for="">Password:</label>
    <input type="text" value="{{$consumer->password}}" readonly class="form-control">
<label for="">Address:</label>
    <input type="text" value="{{$consumer->address}}" readonly class="form-control">
<label for="">Contact:</label>
    <input type="text" value="{{$consumer->contact}}" readonly class="form-control">


    <a href="{{route('consumer.list')}}" class="btn btn-success my-2">Back</a>
@endsection