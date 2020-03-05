<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Room;
use App\Order;
use DB;

class HotelController extends Controller
{
    public function add_hotel()
    {   

    	return view('admin.Hotel.add_hotel');
    }


    public function store_hotel(Request $request)
    {
         
        $obj = new Hotel;

        $obj->htl_name=$request->htl_name;
        // $arrayTostring = implode(',', $request->input('amenti'));
        // $obj['amenti'] = $arrayTostring;
        $obj->phone=$request->phone;
        $obj->email=$request->email;
        $obj->address=$request->address;
        $obj->overview=$request->overview;
       
        
        // preview img
        if ($request->hasFile('img')) {
            $files=$request->file('img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/backend/Hotel/img/';
            $files->move($destination_path, $picture); 
            $obj->img=$picture;
        }
       
       
        $obj->save();
        return redirect()->back()->with('success', ' Hotel has been added successfully');
    }


    public function all_hotel()
    {
    	$hotels = Hotel::all();
    	return view('admin.Hotel.all_hotel', compact('hotels'));
    }

     public function edit_hotel($id)
     {
        $hotel = Hotel::find($id);
        return view('admin.Hotel.edit_hotel',compact('hotel'));
     }



     public function update_hotel(Request $request)
    {
         
        $hotel = Hotel::where('id',$request->hotel_id)->first();

        $hotel->htl_name=$request->htl_name;
        // $arrayTostring = implode(',', $request->input('amenti'));
        // $obj['amenti'] = $arrayTostring;
        $hotel->phone=$request->phone;
        $hotel->email=$request->email;
        $hotel->address=$request->address;
        $hotel->overview=$request->overview;
       
        
        // preview img
        if ($request->hasFile('img')) {
            $files=$request->file('img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/backend/Hotel/img/';
            $files->move($destination_path, $picture); 
            $hotel->img=$picture;
        }
       
       
        $hotel->save();
        return redirect()->back()->with('success', ' Hotel has been added successfully');
    }

//Room Section..................

    public function add_room($id)
    {   
        $hotel = Hotel::find($id);
    	return view('admin.Hotel.room.add_room', compact('hotel'));
    }


    public function store_room(Request $request)
    {   
       
    	$obj = new Room;

        $obj->room_name=$request->room_name;
        // $arrayTostring = implode(',', $request->input('amenti'));
        // $obj['amenti'] = $arrayTostring;
        $obj->no_bed=$request->no_bed;
        $obj->htl_id=$request->htl_id;
        $obj->no_bath=$request->no_bath;
        $obj->ameniti=$request->ameniti;
        $obj->no_person=$request->no_person;
        $obj->price=$request->price;
        $obj->overview=$request->overview;
       
        
        // preview img
        if ($request->hasFile('img')) {
            $files=$request->file('img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/backend/Hotel/Room/img/';
            $files->move($destination_path, $picture); 
            $obj->img=$picture;
        }
       
       
        $obj->save();
        return redirect()->back()->with('success', ' Hotel has been added successfully');


    }


    public function all_room($id)
    {
    	 $hotel_base_room = Room::where('htl_id',$id)->get();
    	 return view('admin.Hotel.room.all_room', compact('hotel_base_room'));
    }

    public function edit_room($id)
    {   $room = Room::find($id);
    	return view('admin.Hotel.room.edit_room', compact('room'));
    }



    public function update_room(Request $request)
    {   
       
    	$room = Room::where('id',$request->room_id)->first();

        $room->room_name=$request->room_name;
        // $arrayTostring = implode(',', $request->input('amenti'));
        // $obj['amenti'] = $arrayTostring;
        $room->no_bed=$request->no_bed;
        
        $room->no_bath=$request->no_bath;
        $room->ameniti=$request->ameniti;
        $room->no_person=$request->no_person;
        $room->price=$request->price;
        $room->overview=$request->overview;
       
        
        // preview img
        if ($request->hasFile('img')) {
            $files=$request->file('img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/backend/Hotel/Room/img/';
            $files->move($destination_path, $picture); 
            $room->img=$picture;
        }
       
       
        $room->save();
        return redirect()->back()->with('success', ' Hotel has been added successfully');


    }


    public function all_book_room()
    {   
        $orders = Order::join('rooms','orders.room_id','=','rooms.id')
            ->join('users','orders.user_id','=','users.id')
            ->join('hotels','orders.hotel_id','=','hotels.id')
            ->select('orders.*', 'rooms.room_name','users.name','users.phone','hotels.htl_name')
            ->orderBy('orders.id','desc')->get();
        return view('admin.Hotel.room.all_booking',compact('orders'));


    }

    public function all_reject_room()
    {   
        $orders = Order::join('rooms','orders.room_id','=','rooms.id')
            ->join('users','orders.user_id','=','users.id')
            ->join('hotels','orders.hotel_id','=','hotels.id')
            ->select('orders.*', 'rooms.room_name','users.name','users.phone','hotels.htl_name')
            ->orderBy('orders.id','desc')->get();
        return view('admin.Hotel.room.all_reject_room',compact('orders'));
    }

    public function all_approve_room()
    {   
        $orders = Order::join('rooms','orders.room_id','=','rooms.id')
            ->join('users','orders.user_id','=','users.id')
            ->join('hotels','orders.hotel_id','=','hotels.id')
            ->select('orders.*', 'rooms.room_name','users.name','users.phone','hotels.htl_name')
            ->orderBy('orders.id','desc')->get();
        return view('admin.Hotel.room.all_approve_room',compact('orders'));
    }


    public function room_approve($id)
      {
        DB::table('orders')
           ->where('id',$id)
           ->update(['order_status' =>1]);

             return back()->with('success','Approved');
            //return a view or whatever you want tto do after
        
       }

    public function room_reject($id)
      {
        DB::table('orders')
           ->where('id',$id)
           ->update(['order_status' =>2]);

             return back()->with('success','Reject');
            //return a view or whatever you want tto do after
        
       }

}
