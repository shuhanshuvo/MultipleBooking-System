<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RentCar;
use App\Order;
use DB;

class RentCarController extends Controller
{
    public function add_rentCar()
    {
    	return view('admin.RentCar.add_rentCar');
    }

    public function store_rentCar(Request $request)
    {
       $rentCar = new RentCar;
        $rentCar->title=$request->title;
        // $arrayTostring = implode(',', $request->input('amenti'));
        // $obj['amenti'] = $arrayTostring;
        $rentCar->capacity=$request->capacity;
        $rentCar->price=$request->price;
        $rentCar->location=$request->location;
        $rentCar->overview=$request->overview;
       
        // preview img
        if ($request->hasFile('img')) {
            $files=$request->file('img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/backend/Rentcar/img/';
            $files->move($destination_path, $picture); 
            $rentCar->img=$picture;
        }
       
       
        $rentCar->save();
        return redirect()->back()->with('success', ' Rent Car has been added successfully');
    }

    public function all_rentCar()
    {   
    	$rentCars = RentCar::all();
    	return view('admin.RentCar.all_rentCar', compact('rentCars'));
    }

    public function edit_rentCar($id)
    {   
    	$rentCar = RentCar::find($id);
    	return view('admin.RentCar.edit_rentCar', compact('rentCar'));
    }


    public function update_rentCar(Request $request)
    {
       $rentCar =RentCar::where('id', $request->rentCar_id)->first();
        $rentCar->title=$request->title;
        // $arrayTostring = implode(',', $request->input('amenti'));
        // $obj['amenti'] = $arrayTostring;
        $rentCar->capacity=$request->capacity;
        $rentCar->price=$request->price;
        $rentCar->location=$request->location;
        $rentCar->overview=$request->overview;
       
        // preview img
        if ($request->hasFile('img')) {
            $files=$request->file('img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/backend/Rentcar/img/';
            $files->move($destination_path, $picture); 
            $rentCar->img=$picture;
        }
       
       
        $rentCar->save();
        return redirect()->back()->with('success', ' Rent Car has been added successfully');
    }

    public function rentCar_delete(Request $request)
    {
        $data = RentCar::where('id',$request->deleteuser)->first();
        $data->delete();
        return back()->with('success','Pickup Deleted');
    }


    public function all_book_rentCar()
    {   
        $orders = Order::join('rent_cars','orders.rentCar_id','=','rent_cars.id')
            ->join('users','orders.user_id','=','users.id')
            ->select('orders.*', 'rent_cars.title', 'rent_cars.capacity','rent_cars.location','users.name','users.phone')
            ->orderBy('orders.id','desc')->get();
        return view('admin.RentCar.all_booking',compact('orders'));


    }


    public function all_approve_rentCar()
    {   
       $orders = Order::join('rent_cars','orders.rentCar_id','=','rent_cars.id')
            ->join('users','orders.user_id','=','users.id')
            ->select('orders.*', 'rent_cars.title', 'rent_cars.capacity','rent_cars.location','users.name','users.phone')
            ->orderBy('orders.id','desc')->get();
        return view('admin.RentCar.all_approve',compact('orders'));


    }


    public function all_reject_rentCar()

    {   
        $orders = Order::join('rent_cars','orders.rentCar_id','=','rent_cars.id')
            ->join('users','orders.user_id','=','users.id')
            ->select('orders.*', 'rent_cars.title', 'rent_cars.capacity','rent_cars.location','users.name','users.phone')
            ->orderBy('orders.id','desc')->get();
        return view('admin.RentCar.all_reject',compact('orders'));


    }


     public function rentCar_approve($id)
      {
        DB::table('orders')
           ->where('id',$id)
           ->update(['order_status' =>1]);

             return back()->with('success','Approved');
            //return a view or whatever you want tto do after
        
       }

    public function rentCar_reject($id)
      {
        DB::table('orders')
           ->where('id',$id)
           ->update(['order_status' =>2]);

             return back()->with('success','Reject');
            //return a view or whatever you want tto do after
        
       }
}
