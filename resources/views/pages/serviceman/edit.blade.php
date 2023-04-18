@extends('partials.master')
@section('content')

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-lg-6">
   <form action="{{route('serviceman.update',$serviceman->id)}}" method ='post'>
   @method('put') 
   @csrf
             <div class="medecine-req-form">
              <div class="medecine-req-form-heading">
                <h2>Serviceman</h2>
              </div>
              <div class="medicine-req-forms">
                <div class="mb-3">
                  <input  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name='name' value="{{$serviceman->name}}">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your adress" name = 'address' value="{{$serviceman->address}}">
                </div>
                <div class="mb-3">
                  <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your contact" name= 'contact' value="{{$serviceman->contact}}">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Gender" name = 'gender' value="{{$serviceman->gender}}">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Status" name ='status' value="{{$serviceman->status}}">
                </div>
                <div class="mb-3">
                  <label for="category_id">Category ID</label>
                 <select class="form-control" name="category_id" id="category_id">
                  @foreach($cat as $cate)
                  <option value="{{$cate->id}}">{{$cate->name}}</option>
                  @endforeach
                 </select>
                </div>

              </div>
              <div >
                <button style="color:white;" type = 'submit' class = 'btn btn-dark my-2'>update</button>
              </div>
            </div>
        </form>
    </div>
          <div class="col-md-3"></div>
        </div>

@endsection
