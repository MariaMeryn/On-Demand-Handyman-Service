@extends('partials.master')
@section('content')
<label for="">Serviceman Id:</label>
    <input type="text" value="{{$serviceman->id}}" readonly class="form-control">
<label for="">Serviceman Name:</label>
    <input type="text" value="{{$serviceman->name}}" readonly class="form-control">
<label for="">Address:</label>
    <input type="text" value="{{$serviceman->address}}" readonly class="form-control">
<label for="">Contact:</label>
    <input type="text" value="{{$serviceman->contact}}" readonly class="form-control">
<label for="">Gender:</label>
    <input type="text" value="{{$serviceman->gender}}" readonly class="form-control">
<label for="">Status:</label>
    <input type="text" value="{{$serviceman->status}}" readonly class="form-control">
    <label for="">Cat_Id:</label>
    <input type="text" value="{{$serviceman->cat_id}}" readonly class="form-control">


    <a href="{{route('serviceman.list')}}" class="btn btn-success my-2">Back</a>
@endsection