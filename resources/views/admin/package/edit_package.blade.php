@extends('layouts.admin_master')

@section('content')


<main class="app-content">
     <div class="app-title">
        <div>
           <h1>Add Package</h1>
        </div>
     </div>
     <div class="row">
        <div class="col-md-12">
           <div class="tile">

              <div class="row">
                <div class="col-md-12">
                  <form id="addpackageform" enctype="multipart/form-data" method="post" action="{{route('admin.update.package')}}"  >
                  	<input type="hidden" name="package_id" value="{{$package->id}}">
                    @csrf
                 
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for=""><strong>Package Name:</strong></label>
                          <input class="form-control" type="text" name="pkg_name" value="{{$package->pkg_name}}" placeholder="Enter Package Name">
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-12">
                        <label for=""><strong>Preview Images:</strong></label>
                        <div class="">
                          <table class="table table-striped" id="imgtable">

                          	<img style="    height: 100px; width: auto;" src="{{ asset('/backend/package/img/'.$package['img']) }}">

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
                          <label for=""><strong>Per Person Price:</strong></label>
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" name="price" value="{{$package->price}}" placeholder="Enter Per Person Price">
                            <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2">USD</span>
                            </div>
                          </div>
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for=""><strong>Duration:</strong></label>
                          <div class="input-group mb-3">
                            <input type="text" name="day" class="form-control" value="{{$package->day}}" placeholder="Enter Tour Duration" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2">Days</span>
                            </div>
                          </div>
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for=""><strong>Minimum Number of Persons:</strong></label>
                          <input type="number" class="form-control" name="min_num" value="{{$package->min_num}}" placeholder="Enter Minimum Number of Persons">
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for=""><strong>Maximum Number of Persons:</strong></label>
                          <input type="number" name="max_num" value="{{$package->max_num}}" class="form-control" placeholder="Enter Maximum Number of Persons">
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-12">
                        <label for=""><strong>Booking Date:</strong></label>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <input class="form-control" type="date" name="booking_date" value="{{$package->booking_date}}">
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                      <div class="col-md-1 text-center">
                        <strong>till</strong>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <input class="form-control" type="date" name="till_date" value="{{$package->till_date}}">
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for=""><strong>Leaving From:</strong></label>
                          <input type="text" class="form-control" name="leaving_form" value="{{$package->leaving_form}}" placeholder="Enter The Starting Place of Tour ">
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for=""><strong>Leaving To:</strong></label>
                          <input type="text" name="leaving_to" value="{{$package->leaving_to}}" class="form-control" placeholder="Enter Destination">
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                         <label class="col-md-3 control-label"><strong>Overview:</strong></label><br>
                         <textarea id="summernote" cols="6" rows="6" value="{{$package->overview}}" class="form-control" name="overview">{{$package->overview}}</textarea>
                    </div>


                    <div class="form-group">
                         <label class="col-md-3 control-label"><strong>Program Schedule:</strong></label><br>
                         <textarea id="summernote_footer" class="form-control" name="schedule" value="{{$package->schedule}}">{{$package->schedule}}</textarea>
                    </div>


                    <div class="row">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-info btn-block form-control-lg">UPDATE PACKAGE</button>
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