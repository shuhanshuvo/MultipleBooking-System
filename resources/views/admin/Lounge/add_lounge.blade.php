@extends('layouts.admin_master')

@section('content')
<main class="app-content">
     <div class="app-title">
        <div>
           <h1>Add Lounge</h1>
        </div>
     </div>
     <div class="row">
        <div class="col-md-12">
           <div class="tile">

              <div class="row">
                <div class="col-md-12">
                  <form id="addloungeform" enctype="multipart/form-data" action="{{route('admin.store.lounge')}}" method="post">
                    @csrf
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for=""><strong>Lounge Name:</strong></label>
                          <input class="form-control" type="text" name="lounge_name" value="" placeholder="Enter Lounge Name">
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for=""><strong>Location:</strong></label>
                          <input type="text" class="form-control" name="location" value="" placeholder="Enter Lounge Location">
                          <p class="em no-margin"></p>
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
                            <input id="imgs" style="display:none;" type="file" name="img">
                            <i class="fa fa-plus"></i> Add File
                          </label>
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for=""><strong>Price Per Person (USD):</strong></label>
                          <input class="form-control" type="text" name="price" value="" placeholder="Enter Price Per Person">
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for=""><strong>Maximum Number of Persons:</strong></label>
                          <input class="form-control" type="number" name="max_num" value="" placeholder="Enter Number of Persons">
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for=""><strong>Maximum Number of Hours:</strong></label>
                          <input class="form-control" type="text" name="max_num_hour" value="" placeholder="Enter Maximum Number of Hours">
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for=""><strong>Select Amenities:</strong></label>
                          <div class="row">
                             @foreach($amenities as $amenitie)
                            @if($amenitie->status =='Active')
                            <div class="col-md-6">
                            
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="9">
                                <label class="form-check-label">
                                  {{$amenitie->name}}
                                </label>
                              </div>

                            </div>
                            @endif
                              @endforeach
                            <div class="col-md-12">
                              <p class="no-margin em"></p>
                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group" id="ohrs">
                          <p class="no-margin"><label for=""><strong>Opening Hours</strong></label></p>
                          <div class="row">
                            <div class="col-md-5">
                              <input name="opening_hour" type="text" class="time start form-control ui-timepicker-input" autocomplete="off">
                              <p class="em no-margin"></p>
                            </div>
                            <div class="col-md-1">
                              to
                            </div>
                            <div class="col-md-5">
                              <input name="closing_hour" type="text" class="time end form-control ui-timepicker-input" autocomplete="off">
                              <p class="em no-margin"></p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Closing Days</label>
                          <select class="form-control" name="closing_days[]" multiple="">
                            <option value="1">Monday</option>
                            <option value="2">Tuesday</option>
                            <option value="3">Wednesday</option>
                            <option value="4">Thursday</option>
                            <option value="5">Friday</option>
                            <option value="6">Saturday</option>
                            <option value="0">Sunday</option>
                          </select>
                          <p class="em no-margin"></p>
                        </div>
                      </div> -->
                    </div>

                     <div class="form-group">
                         <label class="col-md-3 control-label"><strong>Condition of entry:</strong></label><br>
                         <textarea id="summernote" cols="6" rows="6" value="" class="form-control" name="condition"></textarea>
                    </div>

                    <div class="form-group">
                         <label class="col-md-3 control-label"><strong>Overview:</strong></label><br>
                         <textarea id="summernote_footer" class="form-control" name="overview" value=""></textarea>
                    </div>


                    <div class="row">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-info btn-block form-control-lg">ADD LOUNGE</button>
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