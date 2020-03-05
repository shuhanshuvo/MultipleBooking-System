<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Package;
use App\Hotel;
use App\Room;
use App\Lounge;
use App\Pickup;
use App\RentCar;

class UserController extends Controller
{    


	public function user_dashboard()
	{
     return view('user.index');
	}
    public function ShowProfile()
     {   
        $user = User::where('id',Auth::user()->id)->first();
        return view('user.profile', compact('user'));
     }    


     public function user_profile_update(Request $request)
     {
        $data = $request->all();
        $user = User::where('id',Auth::user()->id)->first();
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
        return redirect()->back()->with('success', ' Use profile update successfully');
    }


    //Change Password........................................................................

    public function change_password()
    {   
        return view('user.changePassword');
    }

    public function change_password_save(Request $request)
    {   
       $validatedData = $request->validate([
        'n_pass' => 'required|min:8',
        'c_pass' => 'required|min:8',

    ]);

        $npass = $request->n_pass;
        $cpass = $request->c_pass;
        if ($npass != $cpass)
        {
            return back()->with('alert','Password Not Match');
        }else{
            $user = User::where('id',Auth::user()->id)->first();
            $user->password = Hash::make($npass);
            $user->save();
            return back()->with('success','Password Changed');
        }
    } 

//End Change Password........................................................................



 //Package Management................


    public function show_packages()
    {   
        $packages = Package::all();
        return view('user.package.show_package',compact('packages'));
    }



    public function packages_details($id)
    {   
       $packages = Package::findOrFail($id);
        return view('user.package.package_details',compact('packages'));
    }

    public function all_package()
    {   
        $packages = Package::all();
        return view('user.package.all_package', compact('packages'));
    }

   


    public function all_hotel()
    {
        $hotels = Hotel::all();
        return view('user.Hotel.all_hotel', compact('hotels'));
    }

    public function hotel_details($id)
    {   
       $hotels = Hotel::findOrFail($id);
        return view('user.Hotel.hotel_details',compact('hotels'));
    }


    public function all_room($id)
    {
         $hotel_base_room = Room::where('htl_id',$id)->get();
         return view('user.Hotel.Room.all_room', compact('hotel_base_room'));
    }


    public function room_details($id)
    {   
       $rooms = Room::findOrFail($id);
        return view('user.Hotel.Room.room_details',compact('rooms'));
    }


    ////Lounge ..\

    public function all_lounge()
    {   $lounges = Lounge::all();
        return view('user.Lounge.all_lounge', compact('lounges'));
    }

    public function lounge_details($id)
    {   
       $lounges = Lounge::findOrFail($id);
        return view('user.Lounge.lounge_details',compact('lounges'));
    }


    //Pickup.............
     public function all_pickup()
    {   
        $pickups = Pickup::all();
        return view('user.Pickup.all_pickup', compact('pickups'));
    }

    public function pickup_details($id)
    {   
       $pickups = Pickup::findOrFail($id);
        return view('user.Pickup.pickup_details',compact('pickups'));
    }


    //Rent Car

    public function all_rentCar()
    {   
        $rentCars = RentCar::all();
        return view('user.RentCar.all_rentCar', compact('rentCars'));
    }


    public function rentCar_details($id)
    {   
       $rentCars = RentCar::findOrFail($id);
        return view('user.RentCar.rentCar_details',compact('rentCars'));
    }





}
