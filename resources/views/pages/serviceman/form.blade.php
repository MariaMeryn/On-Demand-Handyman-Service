@extends('partials.master')
@section('content')

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-lg-6">
   <form action="{{route('serviceman.store')}}" method ='post'>
           @csrf
             <div class="medecine-req-form">
              <div class="medecine-req-form-heading">
                <h2>Serviceman</h2>
              </div>
              <div class="medicine-req-forms">
                <div class="mb-3">
                  <input  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name='name'>
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your adress" name = 'address'>
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your contact" name= 'contact'>
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Gender" name = 'gender'>
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Status" name ='status'>
                </div>
              </div>
              <div >
                <button type = 'submit' class = 'btn btn-dark my-2'>Submit</button>
              </div>
            </div>
        </form>
    </div>
          <div class="col-md-3"></div>
        </div>

@endsection

