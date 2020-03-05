@extends('layouts.user_master')

@section('content')

<div class="app-content">

<div class="app-title">
        <div>
           <h1>All Packages</h1>
        </div>
     </div>



<div class="col-md-12">
 
    
            <div class=" ">
                <img class="card-img-top" style="height: 600px;" src="{{ asset('/backend/package/img/'.$packages['img']) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><strong>Package Name:</strong>&nbsp;{!! $packages->pkg_name !!}</h5>
                    <p><strong>Per Persion Name:</strong>&nbsp;{!! $packages->price !!}</p>
                    <p><strong>Duration:</strong>&nbsp;{!! $packages->day !!} Days</p>
                    <p><strong>Minimum Person:</strong>&nbsp;{!! $packages->min_num !!} </p>
                    <p><strong>Maximum Person:</strong>&nbsp;{!! $packages->max_num !!}</p>
                    <p><strong>Booking Date:</strong>&nbsp;{!! $packages->booking_date !!}</p>
                    <p><strong>Checkin Date:</strong>&nbsp;{!! $packages->till_date !!}</p>
                    <p><strong>Leaving From:</strong>&nbsp;{!! $packages->leaving_form !!}</p>
                    <p><strong>Leaving To:</strong>&nbsp;{!! $packages->leaving_to !!}</p>
                    <div>
                    <p><strong>Package Overview:</strong>&nbsp;{!! $packages->overview !!}</p>
                    </div>
                    <p><strong>Package Schedule:</strong>&nbsp;{!! $packages->schedule !!}</p>
                    
                </div>
                <div class="" style="">
                    <a href="{{route('package.checkout',$packages->id)}}" class="btn btn-primary btn-block form-control-lg">Book</a>

                </div>
            </div>


        </div>
     
   
  
  
</div>
</div>




@endsection