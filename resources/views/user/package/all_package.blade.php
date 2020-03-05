@extends('layouts.user_master')

@section('content')

@section('css')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
@endsection

<div class="app-content">
	<h1>All Package</h1>
	<hr>

<table id="example" class="table table-striped table-bordered" style="width:100% ">
        <thead>
            <tr>
                  <th class="th-sm">Name</a>
                  </th>
                  <th class="th-sm">Price

                  </th>
                  <th class="th-sm">Day
                   </th>
                  <th class="th-sm">Minimum Number of Persons:

                  </th>
                  <th class="th-sm">Maximum Number of Persons:
                  </th>
                   <th class="th-sm">Details:
                  </th>
            </tr>
        </thead>
        <tbody>

       
           @if(isset($packages) && count($packages) > 0)
            @foreach ($packages as $package)
            <tr>
                  <td> <a href="{{route('package.details',$package->id)}}">{{ $package->pkg_name }}</a> </td>
                  <td>{{ $package->price }}</td>
                  <td>{{ $package->day }}</td>
                  <td>{{ $package->min_num }}</td>
                  <td>{{ $package->max_num }}</td>
                  <td data-label="Details">
                    <a href="{{route('package.details',$package->id)}}" class="btn btn-outline-primary ">
                    <i class="fa fa-eye"></i> View Details </a>
                  </td>
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