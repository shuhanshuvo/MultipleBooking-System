@extends('layouts.admin_master')

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
            <td>{{$hotel->htl_name}}</td>
            <td>
              <a href="{{route('admin.all.room',$hotel->id)}}" class="btn btn-primary"><i class="fa fa-list"></i> All Rooms</a>
            </td>
            <td>
              <a href="{{route('admin.create.room',$hotel->id)}}" class="btn btn-info"><i class="fa fa-plus"></i> Add Room</a>

              <a href="{{route('admin.edit.hotel',$hotel->id)}}" class="btn btn-warning"><i class="fa fa-pencil-square"></i> Edit</a>
              <button id="hideShowBtn15" class="btn btn-danger" onclick="showHideHotel(event, 15)">Hide</button>

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