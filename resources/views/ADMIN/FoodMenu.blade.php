@extends('ADMIN.adminMain')
@section('title', 'foodMenu')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Food Table</h4>
        <a href="{{route('Add_foodMenu')}}">Add Food</a>
        @if(Session::has('message'))
          <p class="alert alert-info">{{ Session::get('message') }}</p>
          @endif
       
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> Food Name </th>
                <th> Price </th>
                <th> image </th>
                <th> Description </th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($foods as $f)
                  
              
              <tr>
                <td class="py-1">
                  {{$f->title}}
                </td>
                <td> {{$f->price}} </td>
                <td>
                  <img height="200px" width="200px" src="/foodimage/{{$f->image}}" alt="">
                </td>
                <td>
                    {{$f->description}}
                </td>

                <td>
                    <a href="{{route('edit_foodMenu', $f->id)}}" class="btn btn-fill btn-primary">Edit</a>

                </td>
                <td> 
                  <form action="{{route('delete_food')}}" method="post">
                  @csrf
                  <input type="hidden" name="delete_food" value="{{$f->id}}">
                  <button type="submit" class="btn btn-fill btn-primary">Delete</button> 
                </form>
               </td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
    
@endsection