
@extends('ADMIN.adminMain')
@section('title', 'add chef')


@section('content')
    
<div class="row">
    <div class="col-md-4">

    </div>
 <div class="col-md-4 grid-margin stretch-card align-center">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">CasCafe</h4>
        <p class="card-description"> add chef Form </p>
        <form class="forms-sample" action="{{route('uploadChef')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleInputUsername1">Chef Name</label>
            <input type="text" class="form-control text-light" id="exampleInputUsername1" name="chef_name" placeholder="chef name" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">speciality</label>
            <input type="text" class="form-control text-light" id="exampleInputEmail1" name="speciality" placeholder="rice expert/chicken expert" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">image</label>
            <input type="file" class="form-control" name="image" id="exampleInputPassword1" placeholder="image" required>
          </div>
          
          <!--<div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input"> Remember me </label>
          </div>-->
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-dark">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
  @endsection