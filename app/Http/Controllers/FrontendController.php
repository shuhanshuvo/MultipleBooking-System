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

class FrontendController extends Controller
{    
    public function homeindex() 
    {

     $packages = Package::all(); 
     $hotels = Hotel::all(); 
     $lounges = Lounge::all();
     $rentCars = RentCar::all();


      return view('pages.index', compact('packages', 'hotels', 'lounges','rentCars'));
    }


    public function package_details($id)
    {
    	$packages = Package::findOrFail($id);
        return view('pages.Package.package_details', compact('packages'));
    }

    public function lounge_details($id)
    {   
        $lounges = Lounge::findOrFail($id);
    	return view('pages.Lounge.lounges_details', compact('lounges'));
    }


    public function hotel_details($id)
    {  
        $hotels = Hotel::findOrFail($id);
    	return view('user.Hotel.hotel_details', compact('hotels'));
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



}
