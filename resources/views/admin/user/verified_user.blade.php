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
                  <th class="th-sm">Name</th>
                  <th class="th-sm">Email</th>
                  <th class="th-sm">Phone</th>
                  <th class="th-sm">Email Verification</th>
                  <th class="th-sm">Action</th>
            </tr>
        </thead>
        <tbody>

       
          
            @foreach ($users as $user)
            @if($user->email_verified_at =='')
             

             @else
            <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->phone }}</td>
                  <td>Verified</td>
                  <td>
                      <a href="#" class="btn btn-primary" >Edit</a>

                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteuser{{$user->id}}">delete</button>
                  </td>
            </tr>



<div class="modal fade" id="deleteuser{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Delete User</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>

                  <form action="{{route('admin.user.delete')}}" method="post">
                      @csrf
                      <div class="modal-body">
                          <div class="form-group">
                              Are you sure to delete this user ?
                              <input type="hidden" name="deleteuser" value="{{$user->id}}" class="deleteuser">
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Delete</button>
                          </div>
                  </form>
              </div>
          </div>
        </div>
    @endif
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