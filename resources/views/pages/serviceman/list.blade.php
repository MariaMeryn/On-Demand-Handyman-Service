@extends('partials.master')
@section('content')
 
        
    <h2>Serviceman</h2>
    <a href="{{route('serviceman.form')}}" class="btn btn-dark  my-2">Add New</a>

    <table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Adress</th>
      <th scope="col">Contact</th>
      <th scope="col">Gender</th>
      <th scope="col">status</th>
      <th scope="col">Active</th>
    </tr>
  </thead>
   @foreach($servicemans as $serviceman)
  <tbody>
    <tr>
      <th scope="row">{{$serviceman->id}}</th>
      <td>{{$serviceman->name}}</td>
      <td>{{$serviceman->address}}</td>
      <td>{{$serviceman->contact}}</td>
      <td>{{$serviceman->gender}}</td>
      <td>{{$serviceman->status}}</td>
      <td>
      <button class="btn btn-info">View</button>
      <button class="btn btn-danger">Delete</button>
     </td>

    </tr>
  </tbody>
  @endforeach
</table>

{{$servicemans->links()}}



@endsection