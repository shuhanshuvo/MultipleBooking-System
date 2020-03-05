@extends('layouts.admin_master')

@section('content')
<main class="app-content">
     <div class="app-title">
        <div>
           <h1>Add Pickup Car</h1>
        </div>
     </div>
     <div class="row">
        <div class="col-md-12">
           <div class="tile">

              <div class="row">
                <div class="col-md-12">
                  <form id="addpickupform" enctype="multipart/form-data" action="{{route('admin.store.pickup')}}" method="post">
                  	@csrf
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for=""><strong>Title:</strong></label>
                          <input class="form-control" type="text" name="title" value="" placeholder="Enter Pickup Car Title">
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
                            <input id="imgs" style="display:none;" type="file" name="img">
                            <i class="fa fa-plus"></i> Add File
                          </label>
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for=""><strong>Capacity (Number of adult persons):</strong></label>
                          <input class="form-control" type="number" name="capacity" value="" placeholder="Enter Number of Adult Persons">
                          <p class="no-margin em"></p>
                        </div>
                      </div>

                     <div class="col-md-6">
                        <div class="form-group">
                          <label for=""><strong>Pickup Location (Airport Name):</strong></label>
                          <input class="form-control" type="text" name="location" value="" placeholder="Enter Location Name">
                          <p class="no-margin em"></p>
                        </div>
                      </div>
                    </div>

                     <div class="form-group">
                         <label class="col-md-3 control-label"><strong>Overview:</strong></label><br>
                         <textarea id="summernote" cols="6" rows="6" value="" class="form-control" name="overview"></textarea>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-info btn-block form-control-lg">ADD PICKUP CAR</button>
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