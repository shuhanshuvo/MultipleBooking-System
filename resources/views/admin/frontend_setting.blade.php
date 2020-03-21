@extends('layouts.admin_master')

@section('content')

<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Create General Settings</h1>
      </div>
   </div>
   <div class="row">
   <div class="col-md-12">
   <div class="tile">
         <div class="col-lg-6">
            <form action="{{route('admin.store.frontend.settings')}}" method="post" enctype="multipart/form-data">
            	@csrf
            <div class="form-group">
               <label for="exampleInputEmail1" class="col-md-3 control-label"><strong>Title</strong> </label>
               <input class="form-control" name="title" id="" value="{{ $frontend->title }}" type="text"  placeholder="Enter Package Name">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Sub Title</strong></label><br>
               <input type="text" name="sub_title" value="{{ $frontend->sub_title }}" class="form-control">
            </div>
            <div class="form-group">
             <label class="col-md-3 control-label"><strong>Background Image</strong></label>
                 <img style="height: 50px; width: 100px;" src="../../backend/Background/img/{{ $frontend->bg_img }}" alt="logo" >
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Change Background image</strong></label><br>
               <input type="file" value="{{ $frontend->bg_img }}" name="bg_img" class="form-control">
               <b style="color:red; margin-top:10px; font-weight: bold; float: right;margin-right: 10px">Image Must be PNG &amp; Resize: 225x60</b>
            </div>
             <div class="form-group" style="padding-bottom: 63px;">
            <button class="btn btn-primary form-control" type="submit">Save Change</button>
            </div>
        </form>
         </div>
     </div>
   </div>
   </div>
</main>

@endsection

