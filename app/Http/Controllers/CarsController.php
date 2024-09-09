<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    //

    public function grandcabin(){
        return view('cars.grandcabin');
    }
    public function coaster(){
        return view('cars.coaster');
    }
    public function landcruiser(){
        return view('cars.landcruiser');
    }
    public function brv(){
        return view('cars.brv');
    }
    public function corolla(){
        return view('cars.corolla');
    }
    

    public function civic(Request $request)
{
    // Prepare the data for the popup
    $data = [
        'showPopup' => true,
        'message' => 'This car is not available for booking right now.'
    ];

    // Return the JSON response
    return response()->json($data);
}


}
