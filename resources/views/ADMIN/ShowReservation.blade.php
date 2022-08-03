@extends('ADMIN.adminMain')
@section('title', 'show_Reservation')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Reservation  Table</h4>
        
        @if(Session::has('message'))
          <p class="alert alert-info">{{ Session::get('message') }}</p>
          @endif
       
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Name </th>
                <th> Email </th>
                <th> Phone Num </th>
                <th> Guest_num </th>
                <th> Date </th>
                <th> Time </th>
                <th> Message </th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($reservations as $r)
                  
              
              <tr>
                <td class="py-1">
                  {{$r->name}}
                </td>
                <td> {{$r->email}} </td>
                <td>
                    {{$r->phone}}
                </td>
                <td>
                    {{$r->guest}}
                </td>
                <td>
                    {{$r->date}}
                </td>
                <td>
                    {{$r->time}}
                </td>
                <td>
                    {{$r->message}}
                </td>

                <td>
                    <a href="#" class="btn btn-fill btn-primary">Edit</a>

                </td>
                <td> 
                  <form action="#" method="post">
                  @csrf
                  <input type="hidden" name="delete_food" value="">
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