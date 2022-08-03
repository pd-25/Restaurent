@extends('ADMIN.adminMain')
@section('title', 'editchef')
<base href="/public">

@section('content')

<div class="container ">
    <h2 style="text-align: center">edit food</h2>
    <form action="{{route('updateChef',$chefs->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          
        
      <div class="form-group">
        <label for=" Food Name" class="text-white"> Chef Name</label>
        <input type="text" class="form-control" id="email" placeholder="name" name="chef_name" value="{{$chefs->chef_name}}">
      </div>
      <div class="form-group">
        <label for="price" class="text-white">Speciality</label>
        <input type="text" class="form-control" id="pwd" placeholder="speciality" name="speciality" value="{{$chefs->speciality}}">
      </div>
      <div class="form-group">
        <label for="price" class="text-white">old Image</label>
        <!--<input type="file" class="form-control" id="pwd" placeholder="image" name="image" value="{/{$foods->image}}">-->
        <img height="200" width="200" src="/chefImage/{{$chefs->image}}" alt="">
      </div>
      <div class="form-group">
        <label for="price" class="text-white">old Image</label>
        <input type="file" class="form-control" id="pwd" placeholder="image" name="image">
        
      </div>
     
    
      <!--<div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="remember"> Remember me
        </label>
      </div>-->
      <button type="submit" class="btn btn-danger">Submit</button>
    </div>
   </div>
    </form>
  </div>
    
@endsection