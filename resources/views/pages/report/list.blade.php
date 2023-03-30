@extends('partials.master')
@section('content')

<div class='row'>
    <div class=col-md-3></div>
    <div class=col-md-6>

    <h2>Report</h2>
    <a href="{{route('report.form')}}" class="btn btn-dark my-2">Add New</a>
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Address</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    @foreach($reports as $report)
    <tr>
      <th scope="row">{{$report->id}}</th>
      <td>{{$report->name}}</td>
      <td>{{$report->status}}</td>
      <td>{{$report->address}}</td>
      <td>{{$report->password}}</td>
    </tr> 
    @endforeach
  </tbody>
</table>

    </div>
    <div class=col-md-3></div>
</div>

@endsection

