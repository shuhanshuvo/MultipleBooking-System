<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Amenitie;

class AmenitieController extends Controller
{

	public function all_ameniti()
    {
        $aminities = Amenitie::all();
        return view('admin.Amenities.all_amenities', compact('aminities'));
    }

    public function store_amenitie(Request $request)
    {  

    	// return $request->all();
          $ameniti = new Amenitie;
          $ameniti->name = $request->name;
          $ameniti->icon = $request->icon;
          $ameniti->status = $request->status;


          $ameniti->save();
          return redirect()->back()->with('success', ' Amenitie has been added successfully');
    }

    public function update_ameniti(Request $request)
    {  

    	// return $request->all();
          $ameniti = Amenitie::where('id',$request->ameniti_id)->first();
          $ameniti->name = $request->name;
          $ameniti->icon = $request->icon;
          $ameniti->status = $request->status;


          $ameniti->save();
          return redirect()->back()->with('success', ' Amenitie has been updated successfully');
    }
}
