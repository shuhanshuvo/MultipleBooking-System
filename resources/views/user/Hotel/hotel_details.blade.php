@extends('layouts.user_master')

@section('content')

<div class="app-content">

<div class="app-title">
        <div>
           <h1>Hotel Details</h1>
        </div>
     </div>



<div class="col-md-12">
 
    
            <div class=" ">
                <img class="card-img-top" style="height: 600px;" src="{{ asset('/backend/Hotel/img/'.$hotels['img']) }}" alt="Card image cap">
              <div style="padding-top: 10px;">
                 <a href="{{route('user.all.room',$hotels->id)}}" class="btn btn-primary"><i class="fa fa-list"></i> All Rooms</a>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><strong>Hotel Name:</strong>&nbsp;{!! $hotels->htl_name !!}</h5>
                    <p><strong>Phone:</strong>&nbsp;{!! $hotels->phone !!}</p>
                    
                    <p><strong>Email:</strong>&nbsp;{!! $hotels->email !!} </p>
                    <p><strong>Address:</strong>&nbsp;{!! $hotels->address !!}</p>
                    
                    <div>
                    <p><strong>Hotel Overview:</strong>&nbsp;{!! $hotels->overview !!}</p>
                    </div>
                   
                    
                </div>
                <div class="" style="">
                    <a href="" class="btn btn-primary btn-block form-control-lg">Book</a>

                </div>
            </div>


        </div>
     
   
  
  
</div>
</div>




    @endsection