@extends('partials.master')
@section('content')


<h2> Consumer </h2>


<a href="{{route('consumer.form')}}" class="btn btn-secondary my-2">Add New</a>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Contact</th>
      <th scope="col">Action</th>
    </tr>
    </tr>
  </thead>
  <tbody>
    @foreach($consumers as $key=>$consumer)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$consumer->name}}</td>
      <td>{{$consumer->email}}</td>
      <td>{{$consumer->address}}</td>
      <td>{{$consumer->contact}}</td>
      <td>
      <a href="{{route('consumer.view',$consumer->id)}}" class="btn btn-info">View</a>
  
      <a href="{{route('consumer.delete',$consumer->id)}}" class="btn btn-danger">Delete</a>
      </td>

    </tr>

    @endforeach
  </tbody>
</table>

{{$consumers->links()}}


@endsection