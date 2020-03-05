@extends('layouts.user_master')

@section('content')

<div class="app-content">

<div class="app-title">
        <div>
           <h1>Room Details</h1>
        </div>
     </div>



<div class="col-md-12">
 
    
            <div class=" ">
                <img class="card-img-top" style="height: 600px;" src="{{ asset('/backend/Hotel/Room/img/'.$rooms['img']) }}" alt="Card image cap">
              <div style="padding-top: 10px;">
                 <a href="{{route('user.all.hotel')}}" class="btn btn-primary"><i class="fa fa-list"></i> All Hotels</a>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><strong>Room Name:</strong>&nbsp;{!! $rooms->room_name !!}</h5>
                    <p><strong>Number of Bed:</strong>&nbsp;{!! $rooms->no_bed !!}</p>
                    
                    <p><strong>Number Of Bath:</strong>&nbsp;{!! $rooms->no_bath !!} </p>
                    <p><strong>No of Persons (Adults):</strong>&nbsp;{!! $rooms->no_person !!}</p>
                    <p><strong>Payment (USD)/ Night:</strong>&nbsp;{!! $rooms->price !!}</p>
                    
                    <div>
                    <p><strong>Hotel Overview:</strong>&nbsp;{!! $rooms->overview !!}</p>
                    </div>
                   
                    
                </div>
                <div class="" style="">
                    <a href="{{route('room.checkout', $rooms->id)}}" class="btn btn-primary btn-block form-control-lg">Book</a>

                </div>
            </div>


        </div>
     
   
  
  
</div>
</div>




    @endsection