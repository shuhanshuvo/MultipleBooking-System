@extends('layouts.admin_master')

@section('content')

<main class="app-content">
  <div class="app-title">
    <div>
      <h1>Amenities Management</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title pull-left">Amenities List</h3>
        <div class="pull-right icon-btn">
          <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank" class="btn btn-info">
            <i class="fa fa-info"></i> Font Awesome Codes
          </a>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">
            <i class="fa fa-plus"></i> Add Amenity
          </button>
        </div>
        <p style="clear:both;margin:0px;"></p>
        <div class="col-md-12">
        </div>


          <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">

                <form  action="{{route('admin.store.ameniti')}}" method="post">
                  @csrf
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Amenity</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                   
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-12">
                          <strong>Font Awesome Icon Code</strong>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">fa fa-</span>
                            </div>
                            <input name="icon" type="text" required="" class="form-control" placeholder="Enter font awesome code" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <strong>Amenity Name</strong>
                            <input type="text" value="" class="form-control" id="name" required="" name="name" placeholder="Enter Amenity Name">
                          </div>

                          <div class="form-group">
                            <strong>Status</strong>
                            <select class="form-control" required="" name="status">
                              <option value="" selected="" disabled="">Select a status</option>
                              <option value="1">Active</option>
                              <option value="0">Deactive</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">ADD</button>
                  </div>
                </form>
 
              </div>
            </div>
          </div>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Icon</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach($aminities as $amenitie)
              <tr>
                <td>{{$amenitie->id}}</td>
                <td><i class="fa fa-{{$amenitie->icon}}"></i></td>
                <td>{{$amenitie->name}}</td>

                @if($amenitie->status =='Active')
                  <td><h4 style="display:inline-block;"><span class="badge badge-danger">Active</span></h4></td>
                  @else($amenitie->status =='Deactive')
                  <td><h4 style="display:inline-block;"><span class="badge badge-danger">Deactive</span></h4></td>
                 
                  @endif
                <td>
                  <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal1{{$amenitie->id}}">Edit</button>
                </td>
              </tr>


      <div class="table-responsive">
       <div class="modal fade" id="editModal1{{$amenitie->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form class="" action="{{route('admin.update.ameniti')}}" method="post">
                  @csrf
                  
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Amenity</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <input type="hidden" name="ameniti_id" value="{{$amenitie->id}}">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12">
                        <strong>Font Awesome Icon Code</strong>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">fa fa-</span>
                          </div>
                          <input name="icon" type="text" value="{{$amenitie->icon}}" class="form-control" placeholder="Enter font awesome code" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-md-12 mb-10">
                        <strong>Amenity Name</strong>
                        <input type="text" value="{{$amenitie->name}}" class="form-control" id="name" name="name" placeholder="Enter amenity name">
                      </div>
                      <div class="col-md-12 mb-10">
                        <strong>Status</strong>
                        <select class="form-control" name="status">
                          <option  @if($amenitie->status == 'Active') selected = "selected" @endif >Active</option>
                          <option @if($amenitie->status == 'Deactive') selected = "selected" @endif>Deactive</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
              </div>
            </form>
            </div>
          </div>
 @endforeach
              <!-- Modal -->

          

            </tbody>
          </table>
        </div>

        <div class="text-center">

        </div>
      </div>
    </div>
  </div>
</main>

@endsection