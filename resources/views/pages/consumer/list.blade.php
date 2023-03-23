@extends('partials.master')
@section('content')


<div class='row'>
<div class=col-md-3> </div>

<div class=col-md-6>
<h2> Consumer </h2>


<a href="{{route('consumer.form')}}" class="btn btn-secondary my-2">Add New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Address</th>
      <th scope="col">Contact</th>
    </tr>
  </thead>
  <tbody>
    @foreach($consumers as $consumer)
    <tr>
      <th scope="row">{{$consumer->id}}</th>
      <td>{{$consumer->name}}</td>
      <td>{{$consumer->email}}</td>
      <td>{{$consumer->password}}</td>
      <td>{{$consumer->address}}</td>
      <td>{{$consumer->contact}}</td>
    </tr>

    @endforeach
  </tbody>
</table>

{{$consumers->links()}}
</div>
<div class=col-md-3> </div>
</div>

@endsection