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
                   <th class="th-sm">User Name</th>
                   <th class="th-sm">Booking Status</th>
                   <th class="th-sm">Price</th>
                   <th class="th-sm">Payment Method</th>
                   <th class="th-sm">Sender Number</th>
                   <th class="th-sm">Transaction ID</th>
                   <th class="th-sm">Bank Number</th>
                
                
                   
            </tr>
        </thead>
        <tbody>
            @foreach ($trans as $tran)
            <tr>
                  <td>{{ $tran->name}}</td>
                   @if($tran->book_status == 1)
                   <td>Booked Package</td>
                   @elseif($tran->book_status == 2)
                   <td>Booked Room</td>
                   @elseif($tran->book_status == 3)
                   <td>Booked Lounge</td>
                   @else
                   <td>Booked Rent Car</td>
                   @endif
                  <td>{{ $tran->price}}</td>
                  <td>{{ $tran->paymentMethod}}</td>
                  <td>{{ $tran->sender_number}}</td>

                 
                  <td>{{ $tran->trx_id}}</td>
                  <td>{{ $tran->bank_number}}</td>
                
                 
                 
                  
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
