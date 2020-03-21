<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pickup;
use App\Order;
use DB;

class PickupController extends Controller
{
    public function add_pickup()
    {
    	return view('admin.Pickup.add_pickup');
    }

    public function store_pickup(Request $request)
    {
       $pickup = new Pickup;
        $pickup->title=$request->title;
        // $arrayTostring = implode(',', $request->input('amenti'));
        // $obj['amenti'] = $arrayTostring;
        $pickup->price=$request->price;
        $pickup->capacity=$request->capacity;
        $pickup->location=$request->location;
        $pickup->overview=$request->overview;
       
        // preview img
        if ($request->hasFile('img')) {
            $files=$request->file('img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/backend/pickup/img/';
            $files->move($destination_path, $picture); 
            $pickup->img=$picture;
        }
       
       
        $pickup->save();
        return redirect()->back()->with('success', ' Hotel has been added successfully');
    }

    public function all_pickup()
    {   
    	$pickups = Pickup::all();
    	return view('admin.Pickup.all_pickup', compact('pickups'));
    }

    public function edit_pickup($id)
    {   
    	$pickup = Pickup::find($id);
    	return view('admin.Pickup.edit_pickup', compact('pickup'));
    }


    public function update_pickup(Request $request)
    {
       $pickup =Pickup::where('id', $request->pickup_id)->first();
        $pickup->title=$request->title;
        // $arrayTostring = implode(',', $request->input('amenti'));
        // $obj['amenti'] = $arrayTostring;
        $pickup->capacity=$request->capacity;
        $pickup->location=$request->location;
        $pickup->overview=$request->overview;
       
        // preview img
        if ($request->hasFile('img')) {
            $files=$request->file('img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/backend/pickup/img/';
            $files->move($destination_path, $picture); 
            $pickup->img=$picture;
        }
       
       
        $pickup->save();
        return redirect()->back()->with('success', ' Hotel has been added successfully');
    }

    public function pickup_delete(Request $request)
    {
        $data = Pickup::where('id',$request->deleteuser)->first();
        $data->delete();
        return back()->with('success','Pickup Deleted');
    }


    public function all_book_pickup()
    {   
        $orders = Order::join('pickups','orders.pickup_id','=','pickups.id')
            ->join('users','orders.user_id','=','users.id')
            ->select('orders.*', 'pickups.title', 'pickups.capacity','pickups.location','users.name','users.phone')
            ->orderBy('orders.id','desc')->get();
        return view('admin.Pickup.all_booking',compact('orders'));


    }


    public function all_approve_pickup()
    {   
       $orders = Order::join('pickups','orders.pickup_id','=','pickups.id')
            ->join('users','orders.user_id','=','users.id')
            ->select('orders.*', 'pickups.title', 'pickups.capacity','pickups.location','users.name','users.phone')
            ->orderBy('orders.id','desc')->get();
        return view('admin.Pickup.all_approve',compact('orders'));


    }


    public function all_reject_pickup()

    {   
        $orders = Order::join('pickups','orders.pickup_id','=','pickups.id')
            ->join('users','orders.user_id','=','users.id')
            ->select('orders.*', 'pickups.title', 'pickups.capacity','pickups.location','users.name','users.phone')
            ->orderBy('orders.id','desc')->get();
        return view('admin.Pickup.all_reject',compact('orders'));


    }


     public function pickup_approve($id)
      {
        DB::table('orders')
           ->where('id',$id)
           ->update(['order_status' =>1]);

             return back()->with('success','Approved');
            //return a view or whatever you want tto do after
        
       }

    public function pickup_reject($id)
      {
        DB::table('orders')
           ->where('id',$id)
           ->update(['order_status' =>2]);

             return back()->with('success','Reject');
            //return a view or whatever you want tto do after
 
 }
}
