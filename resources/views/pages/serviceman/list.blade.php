@extends('partials.master')
@section('content')



<div class='row'>
    <div class=col-md-3>     </div>
    <div class=col-md-6>  
        
    
    <a href="{{route('serviceman.list')}}" class="btn btn-dark  my-2">Add New</a>

    <table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Adress</th>
      <th scope="col">Contact</th>
      <th scope="col">Gender</th>
      <th scope="col">status</th>
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
    </tr>
  </tbody>
  @endforeach
</table>


    </div>
    <div class=col-md-3>     </div>
    




</div>

@endsection