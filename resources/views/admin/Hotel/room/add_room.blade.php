@extends('layouts.admin_master')

@section('content')


<main class="app-content">
     <div class="app-title">
        <div>
           <h1>Add Room</h1>
        </div>
     </div>
     <div class="row">
        <div class="col-md-12">
           <div class="tile">

              <div class="row">
                <div class="col-md-12">
                  <form id="addpackageform" enctype="multipart/form-data" method="post" action="{{route('admin.store.room')}}"  >
                    @csrf
                    <input type="hidden" name="htl_id" value="{{$hotel->id}}">
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for=""><strong>Room Name:</strong></label>
                          <input class="form-control" type="text" name="room_name" value="" placeholder="Enter Room Name" >
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-12">
                        <label for=""><strong>Preview Images:</strong></label>
                        <div class="">
                          <table class="table table-striped" id="imgtable">

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

     

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for=""><strong>No of Bed</strong></label>
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" name="no_bed" value="" placeholder="Enter your phone number">
                          </div>
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for=""><strong>No of Bath:</strong></label>
                          <div class="input-group mb-3">
                            <input type="text" name="no_bath" class="form-control" placeholder="Enter your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                          </div>
                          <p class="no-margin em"></p>
                        </div>
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for=""><strong>No of Persons (Adults):</strong></label>
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" name="no_person" value="" placeholder="Enter your phone number">
                          </div>
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for=""><strong>Payment (USD)/ Night:</strong></label>
                          <div class="input-group mb-3">
                            <input type="text" name="price" class="form-control" placeholder="Enter your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                          </div>
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

                    <div class="form-group">
                         <label class="col-md-3 control-label"><strong>Overview:</strong></label><br>
                         <textarea id="summernote" cols="6" rows="6" value="" class="form-control" name="overview"></textarea>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-info btn-block form-control-lg">ADD ROOM</button>
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