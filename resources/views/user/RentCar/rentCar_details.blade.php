@extends('layouts.user_master')

@section('content')

<div class="app-content">

<div class="app-title">
        <div>
           <h1>Rent Car Details</h1>
        </div>
     </div>



<div class="col-md-12">
 
    
            <div class=" ">
                <img class="card-img-top" style="height: 600px;" src="{{ asset('/backend/Rentcar/img/'.$rentCars['img']) }}" alt="Card image cap">
              <div style="padding-top: 10px;">
                 <a href="{{route('user.all.rentCar')}}" class="btn btn-primary"><i class="fa fa-list"></i> All Rent Car</a>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><strong>Rent Car Name:</strong>&nbsp;{{ $rentCars->title }}</h5>
                    <p><strong>Address:</strong>&nbsp;{{ $rentCars->location }}</p>
                    
                    <p><strong>Payment/Day (USD):</strong>&nbsp;{{ $rentCars->price }} </p>
                    <p><strong>Capacity (Number of adult persons):</strong>&nbsp;{{ $rentCars->capacity }}</p>
                    
                    <div>
                    <p><strong>Lounge Overview:</strong>&nbsp;{!! $rentCars->overview !!}</p>
                    </div>
                   
                    
                </div>
                <div class="" style="">
                    <a href="{{route('rentCar.checkout', $rentCars->id)}}" class="btn btn-primary btn-block form-control-lg">Book</a>

                </div>
            </div>


        </div>
     
   
  
  
</div>
</div>




    @endsection