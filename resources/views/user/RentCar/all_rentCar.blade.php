@extends('layouts.user_master')

@section('content')

@section('css')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
@endsection

<div class="app-content">
	<h1>All Rent Car</h1>
	<hr>

<table id="example" class="table table-striped table-bordered" style="width:100% ">
        <thead>
            <tr>
                  <th class="th-sm">Title

                  </th>
                  <th class="th-sm">Payment

                  </th>
                  <th class="th-sm">Capacity
                   </th>
                  <th class="th-sm">Action

                  </th>
            </tr>
        </thead>
        <tbody>

       
           @if(isset($rentCars) && count($rentCars) > 0)
            @foreach ($rentCars as $rentCar)
            <tr>
                  <td><a href="{{route('rentCar.details',$rentCar->id)}}"><strong>{{ $rentCar->title }}</strong></a></td>
                  <td>{{ $rentCar->price }}</td>
                  <td>{{ $rentCar->capacity }} </td>
                  <td>
                  <a href="{{route('rentCar.details',$rentCar->id)}}" class="btn btn-outline-primary ">
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