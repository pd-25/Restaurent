@extends('ADMIN.adminMain')
@section('title', 'user')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">User Table</h4>
        @if(Session::has('message'))
          <p class="alert alert-info">{{ Session::get('message') }}</p>
          @endif
       
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> User </th>
                <th> Name </th>
                <th> email </th>
                <th> Action </th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $u)
                  
              
              <tr>
                <td class="py-1">
                  {{$u->image}}
                </td>
                <td> {{$u->name}} </td>
                <td> 
                  {{$u->email}}
                </td>
                <td> 
                  <form action="{{route('delete_user')}}" method="post">
                  @csrf
                  <input type="hidden" name="delete_user" value="{{$u->id}}">
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