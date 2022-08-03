@extends('ADMIN.adminMain')
@section('title', 'ChefList')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Chef Table</h4>
        <a href="{{route('addChef')}}">Add CHef</a>
        @if(Session::has('message'))
          <p class="alert alert-info">{{ Session::get('message') }}</p>
          @endif
       
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> Chef Name </th>
                <th> Speciality </th>
                <th> image </th>
               
                
              </tr>
            </thead>
            <tbody>
              @foreach ($chefs as $c)
                  
              
              <tr>
                <td class="py-1">
                  {{$c->chef_name}}
                </td>
                <td> {{$c->speciality}} </td>
                <td>
                  <img height="200px" width="200px" src="/chefimage/{{$c->image}}" alt="">
                </td>
                

                <td>
                    <a href="{{route('editChef',$c->id)}}" class="btn btn-fill btn-primary">Edit</a>

                </td>
                <td> 
                  <form action="{{route('deleteChef')}}" method="post">
                  @csrf
                  <input type="hidden" name="deleteChef" value="{{$c->id}}">
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