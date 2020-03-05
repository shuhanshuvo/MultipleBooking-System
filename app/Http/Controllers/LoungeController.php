<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lounge;
use App\Amenitie;
use App\Order;
use DB;

class LoungeController extends Controller
{
    public function add_lounge()
    {
        $amenities = Amenitie::orderBy('id','desc')->get();
    	return view('admin.Lounge.add_lounge', compact('amenities'));
    }

    public function store_lounge(Request $request)
    {
    	$lounge = new Lounge;

        $lounge->lounge_name=$request->lounge_name;
        // $arrayTostring = implode(',', $request->input('amenti'));
        // $obj['amenti'] = $arrayTostring;
        $lounge->location=$request->location;
        $lounge->price=$request->price;
        $lounge->max_num=$request->max_num;
        $lounge->max_num_hour=$request->max_num_hour;
        $lounge->condition=$request->condition;
        $lounge->overview=$request->overview;
       
       // $order_id=DB::table('order')
       //                  ->insertGetId($data);
       //  // store orderservice
       //  $services = $request->service_id;
       //  foreach ($services as $value) {
       //     $new_order_service = new Orderservice();
       //     $new_order_service->order_id = $order_id;
       //     $new_order_service->service_id = $value;
       //     $new_order_service->save();
       //  }
       
        
        // preview img
        if ($request->hasFile('img')) {
            $files=$request->file('img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/backend/Hotel/Lounge/img/';
            $files->move($destination_path, $picture); 
            $lounge->img=$picture;
        }
       
       
        $lounge->save();
        return redirect()->back()->with('success', ' Lounge has been added successfully');
    }


    public function all_lounge()
    {   $lounges = Lounge::all();
    	return view('admin.Lounge.all_lounge', compact('lounges'));
    }

    public function edit_lounge($id)
    {   $lounge = Lounge::find($id);
    	return view('admin.Lounge.edit_lounge', compact('lounge'));
    }

    public function update_lounge(Request $request)
    {   
    	
    	$lounge = Lounge::where('id',$request->lounge_id)->first();
    	$lounge->lounge_name=$request->lounge_name;
        // $arrayTostring = implode(',', $request->input('amenti'));
        // $obj['amenti'] = $arrayTostring;
        $lounge->location=$request->location;
        $lounge->price=$request->price;
        $lounge->max_num=$request->max_num;
        $lounge->max_num_hour=$request->max_num_hour;
        $lounge->condition=$request->condition;
        $lounge->overview=$request->overview;
       
       
        
        // preview img
        if ($request->hasFile('img')) {
            $files=$request->file('img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/backend/Hotel/Lounge/img/';
            $files->move($destination_path, $picture); 
            $lounge->img=$picture;
        }
       
       
        $lounge->save();
        return redirect()->back()->with('success', ' Lounge has been added successfully');
    

    }


    public function lounge_delete(Request $request)
    {
        $data = Lounge::where('id',$request->deleteuser)->first();
        $data->delete();
        return back()->with('success','Lounge Deleted');
    }


    public function all_book_lounge()
    {   
        $orders = Order::join('lounges','orders.lounge_id','=','lounges.id')
            ->join('users','orders.user_id','=','users.id')
            ->select('orders.*', 'lounges.lounge_name', 'lounges.max_num_hour','lounges.location','users.name','users.phone')
            ->orderBy('orders.id','desc')->get();
        return view('admin.Lounge.all_booking',compact('orders'));


    }


    public function all_approve_lounge()
    {   
        $orders = Order::join('lounges','orders.lounge_id','=','lounges.id')
            ->join('users','orders.user_id','=','users.id')
            ->select('orders.*', 'lounges.lounge_name', 'lounges.max_num_hour','lounges.location','users.name','users.phone')
            ->orderBy('orders.id','desc')->get();
        return view('admin.Lounge.all_approve',compact('orders'));


    }


    public function all_reject_lounge()

    {   
        $orders = Order::join('lounges','orders.lounge_id','=','lounges.id')
            ->join('users','orders.user_id','=','users.id')
            ->select('orders.*', 'lounges.lounge_name', 'lounges.max_num_hour','lounges.location','users.name','users.phone')
            ->orderBy('orders.id','desc')->get();
        return view('admin.Lounge.all_reject',compact('orders'));


    }


     public function lounge_approve($id)
      {
        DB::table('orders')
           ->where('id',$id)
           ->update(['order_status' =>1]);

             return back()->with('success','Approved');
            //return a view or whatever you want tto do after
        
       }

    public function lounge_reject($id)
      {
        DB::table('orders')
           ->where('id',$id)
           ->update(['order_status' =>2]);

             return back()->with('success','Reject');
            //return a view or whatever you want tto do after
        
       }

}
