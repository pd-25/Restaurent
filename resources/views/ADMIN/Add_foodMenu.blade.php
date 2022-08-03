
@extends('ADMIN.adminMain')
@section('title', 'foodMenu')


@section('content')
    
<div class="row">
    <div class="col-md-4">

    </div>
 <div class="col-md-4 grid-margin stretch-card align-center">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">CasCafe</h4>
        <p class="card-description"> New Food Form </p>
        <form class="forms-sample" action="{{route('upload_foodMenu')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleInputUsername1">Title</label>
            <input type="text" class="form-control" id="exampleInputUsername1" name="food_title" placeholder="food name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="price" placeholder="rs-10/plate">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">image</label>
            <input type="file" class="form-control" name="image" id="exampleInputPassword1" placeholder="image">
          </div>
          <div class="form-group">
            <label for="exampleInputConfirmPassword1">Description</label>
            <input type="text" class="form-control" name="description"  id="exampleInputConfirmPassword1" placeholder="description">
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