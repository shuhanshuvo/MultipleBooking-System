@extends('layouts.user_master')

@section('content')
@section('css')

  
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
 
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
@endsection
 

<div class="app-content">

<div class="app-title">
        <div>
           <h1>All Room bookings</h1>
        </div>
     </div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                 
                  </th>
                  <th class="th-sm">User Name

                  </th>
                  <th class="th-sm">Phone

                  </th>
                  <th class="th-sm">Room Name

                  </th>
                  <th class="th-sm">Hotel Name

                  </th>
                  <th class="th-sm">Total Price

                  </th>
                  <th class="th-sm">Order status
                  </th>
                  <th class="th-sm">Payment Method

                  </th>

            </tr>
        </thead>
        <tbody>
             @foreach ($orders as $order)
            <tr>
            
                  <td>{{$order->name}}</td>
                  <td>{{$order->phone}}</td>
                 
                 
                  
                  <td>{{$order->room_name}}</td>
                 
                  <td>{{$order->htl_name}}</td>
                  
                  <td>{{$order->price}}</td>
               
                  @if($order->order_status =='1')
                  <td>Completed</td>
                  @elseif($order->order_status =='2')
                  <td>Reject</td>
                  @else
                  <td>Pending</td>
                  @endif
                 
                  <td>{{$order->payment_method}}</td>
                   
                  
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
