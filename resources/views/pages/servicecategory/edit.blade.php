@extends('partials.master')
@section('content')
<form action="{{route('servicecat.update',$cat->id)}}" method="post" enctype="multipart/form-data">

    @method('put') 
    @csrf
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-6">
               <div>
               <label for="">Enter Category Name:</label>
               <input name="cat_name" value="{{$cat->cat_name}}" placeholder="Enter category name" type="text" class="form-control">
               </div>

               <div>
                   <label for="">Select Status</label>
                   <select name="status" value="{{$cat->status}}" id="" class="form-control">
                       <option value="active">Active</option>
                       <option value="inactive">InActive</option>
                   </select>
               </div>

               <div>
                   <label for="">Upload Image</label>
                   <input name="image" value="{{$cat->image}}" type="file" class="form-control">
               </div>

               <div>
                   <label for="">Write description</label>
                   <textarea name="description" value="{{$cat->description}}" placeholder="Enter description" class="form-control"></textarea>
               </div>

                <div>
                    <button style="color:black;" type="submit" class="btn btn-success my-2">update</button>
                </div>

           </div>
           <div class="col-md-4"></div>

       </div>
    </form>

@endsection