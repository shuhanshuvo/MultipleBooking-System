@extends('layouts.user_master')

@section('content')

@section('css')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
@endsection

<div class="app-content">
<div class="tile">
             <h3 class="tile-title pull-left" style="display:inline-block;">Rooms List</h3>
             <div class="pull-right icon-btn">
               <a class="btn btn-info" href="{{route('user.all.hotel')}}">
                 <i class="fa fa-list"></i>
                 All Hotels
               </a>
                <form method="GET" class="form-inline" action="http://preview.thesoftking.com/thesoftking/tramate/admin/userManagement/allUsersSearchResult" style="display:inline-block;">
                   <input type="text" name="term" class="form-control" placeholder="Search by room name">
                   <button class="btn btn-outline btn-circle  green" type="submit"><i class="fa fa-search"></i></button>
                </form>
             </div>
             <div class="table-responsive">
                <table class="table">
                   <thead>
                      <tr>
                         
                         <th scope="col">Room Name</th>
                         <th scope="col">No of persons (Adults)</th>
                         <th scope="col">Payment(USD)/night</th>
                         <th scope="col">Action</th>
                      </tr>
                   </thead>
                   <tbody>
                   	@foreach($hotel_base_room as $room)
                     <tr>
                      
                         <td><a href="{{route('room.details',$room->id)}}"> <strong>{{$room->room_name}}</strong></a></a></td>
                         <td>{{$room->no_person}}</td>
                         <td>{{$room->price}}</td>
                         <td>
                          <a href="{{route('room.details',$room->id)}}" class="btn btn-outline-primary ">
                              <i class="fa fa-eye"></i> View Details</a>
                         </td>
                       </tr>
                       @endforeach
                   </tbody>
                </table>
             </div>
             <div class="text-center">
               
             </div>
          </div>
          </div>

@endsection

@section('js')

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
            <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection