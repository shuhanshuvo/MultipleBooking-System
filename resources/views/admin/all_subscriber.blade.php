@extends('layouts.admin_master')

@section('content')

@section('css')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
 
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
@endsection
 
<div class="app-content">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                   <th class="th-sm">SL</th>
                   <th class="th-sm">Subscriber Mail</th>
                   <th class="th-sm">Action</th>
                   
                
                   
            </tr>
        </thead>
        <tbody>
        	<?php
        		$count = 1;
        	?>
            @foreach($subscribers as $subscribe)
            <tr>
                  <td>{{ $count++ }}</td>
                  <td>{{ $subscribe->subs_mail}}</td>
                  <td>
                  	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteuser{{$subscribe->id}}">delete</button>
                  </td>
            </tr> 


            <div class="modal fade" id="deleteuser{{$subscribe->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            	<div class="modal-dialog modal-dialog-centered" role="document">
            		<div class="modal-content">
            			<div class="modal-header">
            				<h5 class="modal-title" id="exampleModalLongTitle">Delete subscribe</h5>
            				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            					<span aria-hidden="true">&times;</span>
            				</button>
            			</div>

            			<form action="{{route('admin.subscribe.delete')}}" method="post">
            				@csrf
            				<div class="modal-body">
            					<div class="form-group">
            						Are you sure to delete this subscriber ?
            						<input type="hidden" name="deleteuser" value="{{$subscribe->id}}" class="deleteuser">
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
