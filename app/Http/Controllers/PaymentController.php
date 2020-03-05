<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Pickup;
use App\Package;
use Auth;
use DB;
use App\Room;
use App\RentCar;

class PaymentController extends Controller
{
    public function package_checkout($id)
    {   

        $package = Package::find($id);
        return view('user.checkout.package_checkout', compact('package'));
    }



     public function store_checkout (Request $request)
    {   
        // $validatedData = $request->validate([
        // 'sender_number' => 'required',
        // 'trx_id' => 'required',
        // 'bank_number' => 'required',

        //  ]);


      	$data = $request->all();
    	 $user_id = Auth::User()->id;
        // insert order
        $odata=array();
        $odata['package_id'] = $request->package_id;
        $odata['payment_method'] = $request->paymentMethod;
        $odata['price'] = $request->price;
        $odata['user_id'] = $user_id;
        $odata['order_status'] = '0';
        $random = $user_id.str::random(10);
        $odata['ran_ordr_id'] = $random;
      	$order_id = DB::table('orders')
                    ->insertGetId($odata);
                    
         
        // insert Transaction
         $sender_number = $request->sender_number;         
         $trx_id = $request->trx_id;         
         $bank_number = $request->bank_number;         
         $paymentMethod = $request->paymentMethod;        
         $price = $request->price;         
         $tdata=array();
            $tdata['sender_number'] = $sender_number;
            $tdata['trx_id'] = $trx_id;
            $tdata['user_id'] = $user_id;
            $tdata['book_status'] = '1';
            $tdata['bank_number'] = $bank_number;
            $tdata['paymentMethod'] = $paymentMethod;
           

            $tdata['price'] = $price;

            $order_id = DB::table('transactions')
                   ->insertGetId($tdata);
                   
             return back()->with('success','Your Payment process successfully');         
        
    }

//// Room Checkout

   public function room_checkout($id)
    {   

        $room = Room::find($id);
        return view('user.checkout.room_checkout', compact('room'));
    }



     public function store_room_checkout (Request $request)
    {   
        // $validatedData = $request->validate([
        // 'sender_number' => 'required',
        // 'trx_id' => 'required',
        // 'bank_number' => 'required',

        //  ]);


       $data = $request->all();
         $user_id = Auth::User()->id;
        // insert order
        $odata=array();
        $odata['room_id'] = $request->room_id;
        $odata['hotel_id'] = $request->hotel_id;
        $odata['payment_method'] = $request->paymentMethod;
        $odata['price'] = $request->price;
        $odata['user_id'] = $user_id;
        $odata['order_status'] = '0';
        $random = $user_id.str::random(10);
        $odata['ran_ordr_id'] = $random;
        $order_id = DB::table('orders')
                    ->insertGetId($odata);
                    
         
        // insert Transaction
         $sender_number = $request->sender_number;         
         $trx_id = $request->trx_id;         
         $bank_number = $request->bank_number;         
         $paymentMethod = $request->paymentMethod;        
         $price = $request->price;         
         $tdata=array();
            $tdata['sender_number'] = $sender_number;
            $tdata['trx_id'] = $trx_id;
            $tdata['user_id'] = $user_id;
            $tdata['book_status'] = '2';
            $tdata['bank_number'] = $bank_number;
            $tdata['paymentMethod'] = $paymentMethod;
            $tdata['price'] = $price;

            $order_id = DB::table('transactions')
                   ->insertGetId($tdata);
                   
             return back()->with('success','Your Payment process successfully');         
        
    }


    //Lounge Checkout


    public function lounge_checkout($id)
    {   

        $lounge = Room::find($id);
        return view('user.checkout.lounge_checkout', compact('lounge'));
    }



     public function store_lounge_checkout (Request $request)
    {   
        // $validatedData = $request->validate([
        // 'sender_number' => 'required',
        // 'trx_id' => 'required',
        // 'bank_number' => 'required',

        //  ]);


        $data = $request->all();
         $user_id = Auth::User()->id;
        // insert order
        $odata=array();
        $odata['lounge_id'] = $request->lounge_id;
        $odata['payment_method'] = $request->paymentMethod;
        $odata['price'] = $request->price;
        $odata['user_id'] = $user_id;
        $odata['order_status'] = '0';
        $random = $user_id.str::random(10);
        $odata['ran_ordr_id'] = $random;
        $order_id = DB::table('orders')
                    ->insertGetId($odata);
                    
         
        // insert Transaction
         $sender_number = $request->sender_number;         
         $trx_id = $request->trx_id;         
         $bank_number = $request->bank_number;         
         $paymentMethod = $request->paymentMethod;        
         $price = $request->price;         
         $tdata=array();
            $tdata['sender_number'] = $sender_number;
            $tdata['trx_id'] = $trx_id;
             $tdata['user_id'] = $user_id;
            $tdata['book_status'] = '3';
            $tdata['bank_number'] = $bank_number;
            $tdata['paymentMethod'] = $paymentMethod;
            $tdata['price'] = $price;

            $order_id = DB::table('transactions')
                   ->insertGetId($tdata);
                   
             return back()->with('success','Your Payment process successfully');         
        
    }


    /////Rent Car checkout




    public function rentCar_checkout($id)
    {   

        $rentCar = RentCar::find($id);
        return view('user.checkout.rentCar_checkout', compact('rentCar'));
    }



     public function store_rentCar_checkout (Request $request)
    {   
        // $validatedData = $request->validate([
        // 'sender_number' => 'required',
        // 'trx_id' => 'required',
        // 'bank_number' => 'required',

        //  ]);


        $data = $request->all();
        $user_id = Auth::User()->id;
        // insert order
        $odata=array();
        $odata['rentCar_id'] = $request->rentCar_id;
        $odata['payment_method'] = $request->paymentMethod;
        $odata['price'] = $request->price;
        $odata['user_id'] = $user_id;
        $odata['order_status'] = '0';
        $random = $user_id.str::random(10);
        $odata['ran_ordr_id'] = $random;
        $order_id = DB::table('orders')
                    ->insertGetId($odata);
                    
         
        // insert Transaction
         $sender_number = $request->sender_number;         
         $trx_id = $request->trx_id;         
         $bank_number = $request->bank_number;         
         $paymentMethod = $request->paymentMethod;        
         $price = $request->price;         
         $tdata=array();
            $tdata['sender_number'] = $sender_number;
            $tdata['trx_id'] = $trx_id;
            $tdata['user_id'] = $user_id;
            $tdata['book_status'] = '4';
            $tdata['bank_number'] = $bank_number;
            $tdata['paymentMethod'] = $paymentMethod;
            $tdata['price'] = $price;

            $order_id = DB::table('transactions')
                   ->insertGetId($tdata);
                   
             return back()->with('success','Your Payment process successfully');         
        
    }






}
