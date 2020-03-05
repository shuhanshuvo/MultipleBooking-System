@extends('layouts.user_master')

@section('content')

<div class="app-content">

<div class="app-title">
        <div>
           <h1>All Packages</h1>
        </div>
     </div>



<div class="col-md-12">
    <div class="row"> 
        @foreach($packages as $package)
        <div class="col-md-3">
            <div class="card ">
                <img class="card-img-top" src="{{ asset('/backend/package/img/'.$package['img']) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $package->pkg_name }}</h5>
                    <p><strong>Per Person Price:</strong>&nbsp; {{ $package->per_price }}</p>
                    <p>lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum <a href="{{ url('home/package-detailes',$package->id)}}">More info</a> </p>
                    
                </div>
                <div class="card-footer">
                    <a href="" class="btn btn-primary">Book</a>

                </div>
            </div>
        </div>
        @endforeach
    </div>  
   
  
  
</div>
</div>




    @endsection