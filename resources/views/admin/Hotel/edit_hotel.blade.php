@extends('layouts.admin_master')

@section('content')


<main class="app-content">
     <div class="app-title">
        <div>
           <h1>Edit Hotel</h1>
        </div>
     </div>
     <div class="row">
        <div class="col-md-12">
           <div class="tile">

              <div class="row">
                <div class="col-md-12">
                  <form id="addpackageform" enctype="multipart/form-data" method="post" action="{{route('admin.update.hotel')}}"  >
                    @csrf
                    <input type="hidden" name="hotel_id" value="{{$hotel->id}}">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for=""><strong>Hotel Name:</strong></label>
                          <input class="form-control" type="text" name="htl_name" value="{{$hotel->htl_name}}" placeholder="Enter Package Name" >
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-12">
                        <label for=""><strong>Preview Images:</strong></label>
                        <div class="">
                          <table class="table table-striped" id="imgtable">
                          	<img style="    height: 100px; width: auto;" src="{{ asset('/backend/Hotel/img/'.$hotel['img']) }}">

                          </table>
                        </div>
                        <div class="form-group">
                          <label class="btn btn-info" style="width:100px;cursor:pointer;">
                            <input id="imgs" style="display:none;" type="file" name="img" multiple>
                            <i class="fa fa-plus"></i> Add File
                          </label>
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                    </div>

      <!--               <div class="form-group">
                          <label for=""><strong>Select Amenities:</strong></label>
                          <div class="row">
                            <div class="col-md-2">
                               <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ameniti[]" value="1">
                                <label class="form-check-label">
                                  Free Wifi
                                </label>
                              </div>
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ameniti[]" value="2">
                                <label class="form-check-label">
                                  Free Drinks
                                </label>
                              </div>
                               <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ameniti[]" value="3">
                                <label class="form-check-label">
                                  Free Meal
                                </label>
                              </div>
                                  <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ameniti[]" value="4">
                                <label class="form-check-label">
                                  Taxi Available
                                </label>
                              </div>
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ameniti[]" value="5">
                                <label class="form-check-label">
                                  Bar Available
                                </label>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ameniti[]" value="6">
                                <label class="form-check-label">
                                  LED
                                </label>
                              </div>
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ameniti[]" value="7">
                                <label class="form-check-label">
                                  Free Coffee
                                </label>
                              </div>
                                 <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ameniti[]" value="8">
                                <label class="form-check-label">
                                  Wheelchair
                                </label>
                              </div>
                               <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ameniti[]" value="9">
                                <label class="form-check-label">
                                  Pet Room
                                </label>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <p class="no-margin em"></p>
                            </div>
                          </div>
                     </div> -->

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for=""><strong>Phone Number:</strong></label>
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" name="phone" value="{{$hotel->phone}}" placeholder="Enter your phone number">
                          </div>
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for=""><strong>Email:</strong></label>
                          <div class="input-group mb-3">
                            <input type="text" name="email" class="form-control" value="{{$hotel->email}}" placeholder="Enter your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                          </div>
                          <p class="no-margin em"></p>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for=""><strong>Address</strong></label>
                          <div class="input-group mb-3">
                            <input type="text" name="address" value="{{$hotel->address}}"class="form-control" placeholder="Enter your address" aria-label="Recipient's username" aria-describedby="basic-addon2">
                          </div>
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                         <label class="col-md-3 control-label"><strong>Overview:</strong></label><br>
                         <textarea id="summernote" cols="6" rows="6" value="" class="form-control" name="overview">{!! $hotel->overview !!}</textarea>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-info btn-block form-control-lg">UPDATE HOTEL</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

           </div>
        </div>
     </div>
  </main>

@endsection