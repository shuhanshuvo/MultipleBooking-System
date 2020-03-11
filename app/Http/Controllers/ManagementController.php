<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Package;
use App\User;
use App\Order;
use DB;

class ManagementController extends Controller
{   

    public function add_package()
    {
    	return view('admin.package.add_package');
    }

    public function store_package(Request $request)
    {
      
        $obj = new Package;

        $obj->pkg_name=$request->pkg_name;
        $obj->price=$request->price;
        $obj->day=$request->day;
        $obj->min_num=$request->min_num;
        $obj->max_num=$request->max_num;
        $obj->booking_date=$request->booking_date;
        $obj->till_date=$request->till_date;
        $obj->leaving_form=$request->leaving_form;
        $obj->leaving_to=$request->leaving_to;
        $obj->overview=$request->overview;
        $obj->schedule=$request->schedule;
        
        // preview img
        if ($request->hasFile('img')) {
            $files=$request->file('img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/backend/package/img/';
            $files->move($destination_path, $picture); 
            $obj->img=$picture;
        }
       
       
        $obj->save();
        return redirect()->back()->with('success', ' Package has been added successfully');
    }


    public function all_package()
    {   
    	$packages = Package::all();
    	return view('admin.package.all_package', compact('packages'));
    }

    public function package_delete(Request $request)
    {
        $data = Package::where('id',$request->deleteuser)->first();
        $data->delete();
        return back()->with('success','package Deleted');
    }

    public function edit_package($id)
     {
        $package = Package::find($id);
        return view('admin.package.edit_package',compact('package'));
     }


     public function update_package(Request $request)
    {   
        $package = Package::where('id',$request->package_id)->first();
        $package->pkg_name=$request->pkg_name;
        $package->price=$request->price;
        $package->day=$request->day;
        $package->min_num=$request->min_num;
        $package->max_num=$request->max_num;
        $package->booking_date=$request->booking_date;
        $package->till_date=$request->till_date;
        $package->leaving_form=$request->leaving_form;
        $package->leaving_to=$request->leaving_to;
        $package->overview=$request->overview;
        $package->schedule=$request->schedule;
        
        // preview img
        if ($request->hasFile('img')) {
            $files=$request->file('img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/backend/package/img/';
            $files->move($destination_path, $picture); 
            $package->img=$picture;
        }
       
       
        $package->save();
        return redirect()->back()->with('success', ' Package has been Updated successfully');
    }



/// User Management........................

    public function all_user()
    {   
        $users = User::all();
        return view('admin.user.all_users', compact('users'));
    }


    public function edit_user($id)
    {   
        $user = User::find($id);
        return view('admin.user.user_profile', compact('user'));
    }

    public function update_user(Request $request)
    {
        $user = User::where('id',$request->user_id)->first();
        
        $user->name=$request->name;
        $user->phone=$request->phone;
        $user->email=$request->email;
        
        // logo
        if ($request->hasFile('photo')) {
            $files=$request->file('photo');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/backend/photo/';
            $files->move($destination_path, $picture); 
            $user->photo=$picture;
        }
       
       
        $user->save();
        return redirect()->back()->with('success', ' User profile update successfully');
    }

    public function all_verified_user()
    {   
        $users = User::all();
        return view('admin.user.verified_user', compact('users'));
    }

    public function user_delete(Request $request)
    {
        $data = User::where('id',$request->deleteuser)->first();
        $data->delete();
        return back()->with('success','User Deleted');
    }




    public function all_book_package()
    {   
        $orders = Order::join('packages','orders.package_id','=','packages.id')
            ->join('users','orders.user_id','=','users.id')
            ->select('orders.*', 'packages.pkg_name', 'packages.min_num','packages.booking_date','packages.till_date','users.name','users.phone')
            ->orderBy('orders.id','desc')->get();
        return view('admin.package.all_booking',compact('orders'));


    }


    public function all_approve_package()
    {   
        $orders = Order::join('packages','orders.package_id','=','packages.id')
            ->join('users','orders.user_id','=','users.id')
            ->select('orders.*', 'packages.pkg_name', 'packages.min_num','packages.booking_date','packages.till_date','users.name','users.phone')
            ->orderBy('orders.id','desc')->get();
        return view('admin.package.all_approve',compact('orders'));


    }


    public function all_reject_package()

    {   
        $orders = Order::join('packages','orders.package_id','=','packages.id')
            ->join('users','orders.user_id','=','users.id')
            ->select('orders.*', 'packages.pkg_name', 'packages.min_num','packages.booking_date','packages.till_date','users.name','users.phone')
            ->orderBy('orders.id','desc')->get();
        return view('admin.package.all_reject',compact('orders'));


    }


     public function package_approve($id)
      {
        DB::table('orders')
           ->where('id',$id)
           ->update(['order_status' =>1]);

             return back()->with('success','Approved');
            //return a view or whatever you want tto do after
        
       }

    public function package_reject($id)
      {
        DB::table('orders')
           ->where('id',$id)
           ->update(['order_status' =>2]);

             return back()->with('success','Reject');
            //return a view or whatever you want tto do after
        
       }

}
