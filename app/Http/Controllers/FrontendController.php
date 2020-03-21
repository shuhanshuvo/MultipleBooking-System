<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Package;
use App\Hotel;
use App\Room;
use App\Lounge;
use App\RentCar;
use App\Contact;
use App\SubsCriber;
use App\Rating;
use App\User;
use App\Frontend;
use DB;

class FrontendController extends Controller
{    
    public function homeindex() 
    {
     
     $frontend = Frontend::orderBy('id','DESC')->first();
     $packages = Package::all(); 
     $hotels = Hotel::all(); 
     $lounges = Lounge::all();
     $rentCars = RentCar::all();


      return view('pages.index', compact('packages', 'hotels', 'lounges','rentCars','frontend'));
    }


    public function package_details($id)
    {
    	$packages = Package::findOrFail($id);
        return $avg_rating = DB::table('ratings')
                ->where('id',$id)
                ->avg('stars');
                // ->get();
        return view('pages.Package.package_details', compact('packages','avg_rating'));
    }

    public function lounge_details($id)
    {   
        $lounges = Lounge::findOrFail($id);
    	return view('pages.Lounge.lounges_details', compact('lounges'));
    }


    public function hotel_details($id)
    {  
        $hotels = Hotel::findOrFail($id);
    	return view('pages.Hotel.hotel_details', compact('hotels'));
    }

    public function rentCar_details($id)
    {  
        $rentCars = RentCar::findOrFail($id);
        return view('pages.RentCar.rentCar_details', compact('rentCars'));
    }

    public function contact()
    {
    	return view('pages.contact');
    }

    public function store_contact(Request $request)
    {   
      
    	$contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return back()->with('success','Messsage Successfully Sent');

    }

    public function subscriber(Request $request)
    {   

        $subcribe = new Subscriber;
        $subcribe->subs_mail = $request->subs_mail;
        $subcribe->status= 0;

        $subcribe->save();
        return redirect()->back()->with('success', 'Subscriber News Letter sent has been successfully.'); 
    }

    public function all_subscriber()
    {   
        Subscriber::where('status',0)->update(['status'=>1]);
        $subscribers = Subscriber::all();
        return view('admin.all_subscriber', compact('subscribers'));
    }


    public function subscriber_delete(Request $request)
    {
        $data = Subscriber::where('id',$request->deleteuser)->first();
        $data->delete();
        return back()->with('success','Subscriber Deleted');
    }



    public function rating(Request $request)
    {
        $data = $request->all();
        $rating = new Rating;
        $rating->pkg_id = $request->pkg_id;
        $rating->stars = $request->stars;
        $rating->user_id = Auth::user()->id;
        $rating->save();
        return back()->with('success','Thanks for review');
    }




    public function frontend_settings()
    {   
        
        $frontend = Frontend::first();
        return view('admin.frontend_setting',compact('frontend'));
        
    }


    public function store_front_settings(Request $request)
    {

        $obj = Frontend::first();
        $obj->title=$request->title;
        $obj->sub_title=$request->sub_title;
        
        // logo
        if ($request->hasFile('bg_img')) {
            $files=$request->file('bg_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/backend/background/img/';
            $files->move($destination_path, $picture); 
            $obj->bg_img=$picture;
        }
       
        
        $obj->save();
        return redirect()->back()->with('success', ' Frontend setting has been added successfully');
    }




}
