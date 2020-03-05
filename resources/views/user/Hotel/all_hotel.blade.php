@extends('layouts.user_master')

@section('content')

@section('css')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
@endsection

<div class="app-content">
	<h1>All hotel</h1>
	<hr>

<table id="example" class="table table-striped table-bordered" style="width:100% ">
        <thead>
            <tr>
                  <th class="th-sm">Hotel Name

                  </th>
                  <th class="th-sm">Rooms

                  </th>

                  <th class="th-sm">Action

                  </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hotels as $hotel)
          <tr>
            <td> <a href="{{route('hotel.details',$hotel->id)}}"><strong>{{$hotel->htl_name}}</strong></a></td>
            <td>
              <a href="{{route('user.all.room',$hotel->id)}}" class="btn btn-primary"><i class="fa fa-list"></i> All Rooms</a>
            </td>
            <td>
              <a href="{{route('hotel.details',$hotel->id)}}" class="btn btn-outline-primary ">
                    <i class="fa fa-eye"></i> View Details</a>
            </td>
          </tr>
          @endforeach


        </tbody>
        
    </table>

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