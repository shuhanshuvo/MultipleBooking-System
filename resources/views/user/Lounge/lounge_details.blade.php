@extends('layouts.user_master')

@section('content')

<div class="app-content">

<div class="app-title">
        <div>
           <h1>Lounge Details</h1>
        </div>
     </div>



<div class="col-md-12">
 
    
            <div class=" ">
                <img class="card-img-top" style="height: 600px;" src="{{ asset('/backend/Hotel/Lounge/img/'.$lounges['img']) }}" alt="Card image cap">
              <div style="padding-top: 10px;">
                 <a href="{{route('user.all.lounge')}}" class="btn btn-primary"><i class="fa fa-list"></i> All Lounge</a>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><strong>Lounge Name:</strong>&nbsp;{!! $lounges->lounge_name !!}</h5>
                    <p><strong>Address:</strong>&nbsp;{!! $lounges->location !!}</p>
                    
                    <p><strong>Price Per Person (USD):</strong>&nbsp;{!! $lounges->price !!} </p>
                    <p><strong>Maximum Number of Persons:</strong>&nbsp;{!! $lounges->max_num !!}</p>
                    
                    <div>
                    <p><strong>Lounge Overview:</strong>&nbsp;{!! $lounges->overview !!}</p>
                    </div>
                   
                    
                </div>
                <div class="" style="">
                    <a href="{{route('lounge.checkout', $lounges->id)}}" class="btn btn-primary btn-block form-control-lg">Book</a>

                </div>
            </div>


        </div>
     
   
  
  
</div>
</div>




    @endsection