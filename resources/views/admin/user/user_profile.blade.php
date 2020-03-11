
@extends('layouts.admin_master')

@section('content')
<main class="app-content">
     <div class="app-title">
        <div>
           <h1>User Details</h1>
        </div>
     </div>
     <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-md-3">
                <div class="card border-primary">
                  <div class="card-header border-primary bg-primary">
                    <h3 style="color:white;"><i class="fa fa-user"></i> PROFILE</h3>
                  </div>
                  <div class="card-body">

                       <img height="180px;" src="{{ asset('backend/photo/'.$user->photo) }}">


                   
                  </div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <div class="card-header bg-primary">
                    <h3 style="color:white;"><i class="fa fa-desktop"></i> DETAILS</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <!-- <div class="widget-small info coloured-icon"><i class="icon fa fa-download fa-3x" aria-hidden="true"></i>
                          <a class="info" href="#">
                            <h4>DEPOSITS</h4>
                            <p><b>0</b></p>
                          </a>
                        </div> -->
                    <div class="text-center">
                      <h3>Name: {{$user->name}}</h3><br>
                      <h4>Email: {{$user->email}}</h4><br>
                      <h4>Phone: @if($user->phone=='')
                        N/A
                        @else
                        {{$user->phone}}
                      @endif</h4><br>
                    </div>
                  </div>
                     <!--  <div class="col-md-6">
                        <div class="widget-small danger coloured-icon"><i class="icon fa fa-exchange fa-3x"></i>
                          <a class="info" href="#">
                            <h4>TRANSACTIONS</h4>
                            <p><b>0</b></p>
                          </a>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>

                <br>

         <!--        <div class="card">
                  <div class="card-header bg-primary">
                    <h3 style="color:white;"><i class="fa fa-cog"></i> OPERATIONS</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <a href="#" style="color:white;" class="btn btn-info btn-block"><i class="fa fa-money"></i> ADD / SUBTRACT BALANCE</a>
                      </div>
                      <div class="col-md-6">
                        <a href="#" style="color:white;" class="btn btn-danger btn-block"><i class="fa fa-envelope"></i> SEND MAIL</a>
                      </div>
                    </div>
                  </div>
                </div> -->

                <br>

                <div class="card">
                  <div class="card-header bg-primary">
                    <h3 style="color:white;"><i class="fa fa-cog"></i> UPDATE PROFILE</h3>
                  </div>
                  <div class="card-body">
                    <form class="" action="{{route('admin.update.user')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      
                      <input type="hidden" name="user_id" value="{{$user->id}}">
                      <div class="col-md-8 mb-4">
                      <label>Photo</label>
                      <img  style="height: 50px; width: 50px;"src="{{ asset('backend/photo/'.$user['photo']) }}" alt="{{ $user->photo }}">
                      <input class="form-control" name="photo" value="{{$user->photo}}" type="file">
                    </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for=""><strong>Name</strong></label>
                            <input class="form-control" type="text" name="name" value="{{$user->name}}">
                                                      </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for=""><strong>Email</strong></label>
                            <input class="form-control" type="text" name="email" value="{{$user->email}}">
                                                      </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for=""><strong>Phone</strong></label>
                            <input class="form-control" type="text" name="phone" value="{{$user->phone}}">
                                                      </div>
                        </div>
                      </div>
                
                      <br>
                      <div class="row">
                        <div class="col-md-12">
                          <button type="submit" class="btn btn-info btn-block" name="button">UPDATE</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     </div>
  </main>

  @endsection