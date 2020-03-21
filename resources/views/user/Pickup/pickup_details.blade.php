@extends('layouts.user_master')

@section('content')

<div class="app-content">

<div class="app-title">
        <div>
           <h1>Pickup Car Details</h1>
        </div>
     </div>



<div class="col-md-12">
 
    
            <div class=" ">
                <img class="card-img-top" style="height: 600px;" src="{{ asset('/backend/pickup/img/'.$pickups['img']) }}" alt="Card image cap">
              <div style="padding-top: 10px;">
                 <a href="{{route('user.all.pickup')}}" class="btn btn-primary"><i class="fa fa-list"></i> All Pickup Car</a>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><strong>Title::</strong>&nbsp;{{ $pickups->title }}</h5>
                    <p><strong>Price:</strong>&nbsp;{{ $pickups->price }}</p>
                    <p><strong>Capacity (Number of adult persons):</strong>&nbsp;{{ $pickups->capacity }}</p>
                    
                    <p><strong>Pickup Location (Airport Name):</strong>&nbsp;{{ $pickups->location }} </p>
                   
                    
                    <div>
                    <p><strong>Pickup Overview:</strong>&nbsp;{!! $pickups->overview !!}</p>
                    </div>
                   
                    
                </div>
                <div class="" style="">
                    <a href="{{route('pickup.checkout',$pickups->id)}}" class="btn btn-primary btn-block form-control-lg">Book</a>


                </div>
            </div>


        </div>
     
   
  
  
</div>
</div>




    @endsection