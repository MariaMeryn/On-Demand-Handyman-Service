@extends('partials.master')
@section('content')




<Div class='row'>

    <div class=col-md-3></div>

    <div class=col-md-6>

    <h1>Service</h1>
    <a href="{{route('service.form')}}" class="btn btn-dark my-2 ">  Add New  </a>

    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
 

  <tbody>
  @foreach($sers as $ser) 
    <tr>
      <th scope="row">{{$ser->id}}</th>
      <td>{{$ser->name}}</td>
      <td>{{$ser->status}}</td>
    </tr>

    @endforeach
  </tbody>


</table>


      </div>

    <div class=col-md-3></div>

</Div>

@endsection