@extends('layouts.admin_master')

@section('content')
@section('css')

  
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
 
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
@endsection
 

<div class="app-content">

<div class="app-title">
        <div>
           <h1>All Lounge bookings</h1>
        </div>
     </div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                 
                
                  <th class="th-sm">Username

                  </th>
                  <th class="th-sm">Phone

                  </th>
                  <th class="th-sm">Car Name

                  </th>
                  <th class="th-sm">Capacity

                  </th>

                  <th class="th-sm">Location
                  </th>

                  <th class="th-sm">Total Price 
                  </th>
                  <th class="th-sm">Payment Method
                  </th>

                      <th class="th-sm">Action

                  </th>
                   
            </tr>
        </thead>
        <tbody>
             @foreach ($orders as $order)
              @if($order->order_status =='2')
            <tr>
            
                  <td>{{$order->name}}</td>

                  <td>{{$order->phone}}</td>
          
                  <td>{{$order->title}}</td>
                 
                  <td>{{$order->capacity}}</td>
                  
                  <td>{{$order->location}}</td>

                  <td>{{$order->price}}</td>

                  <td>{{$order->payment_method}}</td>
               
                 <!--  @if($order->order_status =='1')
                  <td>Completed</td>
                  @elseif($order->order_status =='2')
                  <td>Reject</td>
                  @else
                  <td>Pending</td>
                  @endif
                  -->
               
                 
               
                   <td>
                      <a href="{{route('pickup.approve',$order->id)}}" class="btn btn-danger" name="button"><i class="fa fa-check"></i> Accept</a>
                     <a target="_blank" href="#" class="btn btn-warning"><i class="fa fa-envelope"></i> Send Mail</a>

                  </td>
                  
            </tr>
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
