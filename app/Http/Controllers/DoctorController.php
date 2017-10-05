<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
    //
    public function index()
    {
    	return view('doctors.new');
    }

    public function create(Request $request)
    {

  $request->validate([
        'name' => 'required|max:255',
        'phone' => 'required',
    ]);
    	 $doctor = new Doctor();
    	//$input = $request->all();
    	//$doctor::save($input);
    	//dd($input);
    	 $doctor->name = $request->name;
    	 $doctor->specialist = $request->specialist;
    	$doctor->location = $request->location;
       $doctor->phone = $request->phone;
    	$doctor->save();
    	return ('ok');
    }

}
