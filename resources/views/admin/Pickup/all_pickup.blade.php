@extends('layouts.admin_master')

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
                  <th class="th-sm">Title

                  </th>
                  <th class="th-sm">Pickup Location

                  </th>
                  <th class="th-sm">Dropoff Locations
                   </th>
                  <th class="th-sm">Action

                  </th>
            </tr>
        </thead>
        <tbody>

       
           @if(isset($pickups) && count($pickups) > 0)
            @foreach ($pickups as $pickup)
            <tr>
                  <td>{{ $pickup->title }}</td>
                  <td>{{ $pickup->location }}</td>
                  <td>
                   <a href="#" class="btn btn-primary"><i class="fa fa-eye"></i> View Dropoff Locations</a>
                 </td>

                 <td>
	               <a href="#" class="btn btn-info"><i class="fa fa-plus"></i> Add Dropoff Location</a>

	              <a href="{{route('admin.edit.pickup',$pickup->id)}}" class="btn btn-primary" >Edit</a>
	               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteuser{{$pickup->id}}">delete</button>

	                <button id="hideShowBtn10" class="btn btn-danger" onclick="showHidePickup(event, 10)">Hide</button>
	                </td>

            </tr>

            <div class="modal fade" id="deleteuser{{$pickup->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            	<div class="modal-dialog modal-dialog-centered" role="document">
            		<div class="modal-content">
            			<div class="modal-header">
            				<h5 class="modal-title" id="exampleModalLongTitle">Delete pickup</h5>
            				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            					<span aria-hidden="true">&times;</span>
            				</button>
            			</div>

            			<form action="{{route('admin.pickup.delete')}}" method="post">
            				@csrf
            				<div class="modal-body">
            					<div class="form-group">
            						Are you sure to delete this pickup ?
            						<input type="hidden" name="deleteuser" value="{{$pickup->id}}" class="deleteuser">
            					</div>
            					<div class="modal-footer">
            						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            						<button type="submit" class="btn btn-primary">Delete</button>
            					</div>
            				</form>
            			</div>
            		</div>
            	</div>

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