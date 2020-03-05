@extends('layouts.user_master')

@section('content')

@section('css')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
@endsection

<div class="app-content">
	<h1>All Lounge</h1>
	<hr>

<table id="example" class="table table-striped table-bordered" style="width:100% ">
        <thead>
            <tr>
                  <th class="th-sm">Name

                  </th>
                  <th class="th-sm">Price (USD)

                  </th>
                   </th>
                  <th class="th-sm">Details

                  </th>
            </tr>
        </thead>
        <tbody>

       
           @if(isset($lounges) && count($lounges) > 0)
            @foreach ($lounges as $lounge)
            <tr>
                  <td> <a href="{{route('lounge.details',$lounge->id)}}"><strong>{{ $lounge->lounge_name }}</a></strong></td>
                  <td>{{ $lounge->price }} </td>
                 
                  	<td data-label="Details">
                    <a href="{{route('lounge.details',$lounge->id)}}" class="btn btn-outline-primary ">
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