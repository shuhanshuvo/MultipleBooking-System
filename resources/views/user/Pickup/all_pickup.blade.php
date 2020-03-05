@extends('layouts.user_master')

@section('content')

@section('css')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
@endsection

<div class="app-content">
	<h1>All Pickup Car</h1>
	<hr>

<table id="example" class="table table-striped table-bordered" style="width:100% ">
        <thead>
            <tr>
                  <th class="th-sm">Title

                  </th>
                  <th class="th-sm">Pickup Location

                  </th>
                  <th class="th-sm">Dropoff Locations
                   </th>
                  <th class="th-sm">Details

                  </th>
            </tr>
        </thead>
        <tbody>

       
           @if(isset($pickups) && count($pickups) > 0)
            @foreach ($pickups as $pickup)
            <tr>
                  <td> <a href="{{route('pickup.details',$pickup->id)}}"><strong>{{ $pickup->title }}</strong></a></td>
                  <td>{{ $pickup->location }}</td>
                  <td>
                   <a href="#" class="btn btn-primary"><i class="fa fa-eye"></i> View Dropoff Locations</a>
                 </td>
                 <td><a href="{{route('pickup.details',$pickup->id)}}" class="btn btn-outline-primary ">
                    <i class="fa fa-eye"></i> View Details </a></td>
                 
            </tr>

            @endforeach
   
    @endif

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