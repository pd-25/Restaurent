<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark">
  <div class="container ">
    <h2 style="text-align: center">edit food</h2>
    <form action="{{route('update_foodMenu',$foods->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          
        
      <div class="form-group">
        <label for=" Food Name" class="text-white"> Food Name</label>
        <input type="text" class="form-control" id="email" placeholder="name" name="title" value="{{$foods->title}}">
      </div>
      <div class="form-group">
        <label for="price" class="text-white">Price</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter price" name="price" value="{{$foods->price}}">
      </div>
      <div class="form-group">
        <label for="price" class="text-white">old Image</label>
        <!--<input type="file" class="form-control" id="pwd" placeholder="image" name="image" value="{/{$foods->image}}">-->
        <img height="200" width="200" src="/foodimage/{{$foods->image}}" alt="">
      </div>
      <div class="form-group">
        <label for="price" class="text-white">old Image</label>
        <input type="file" class="form-control" id="pwd" placeholder="image" name="image">
        
      </div>
      <div class="form-group">
        <label for="price" class="text-white">Description</label>
        <input type="text" class="form-control" id="pwd" placeholder="description" name="description" value="{{$foods->description}}">
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
</body>
</html>
