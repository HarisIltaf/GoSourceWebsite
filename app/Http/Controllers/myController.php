<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function service(){
        return view('service');
    }
    public function contact(){
        return view('contact');
    }
    public function tours(){
        return view('tours');
    }
    public function about(){
        return view('about');
    }
    public function carbooking(){
        return view('carbooking');
    }
    public function hotel(){
        return view('hotel');
    }

    public function airticket(Request $request)
    {
        // Prepare the data for the popup
        $data = [
            'showPopup' => true,
            'message' => 'This is not available right now.'
        ];
    
        // Return the JSON response
        return response()->json($data);
    }

    public function toursnotavailable(Request $request)
    {
        // Prepare the data for the popup
        $data = [
            'showPopup' => true,
            'message' => 'This is not available right now.'
        ];
    
        // Return the JSON response
        return response()->json($data);
    }
    
    public function notavailable(Request $request)
    {
        // Prepare the data for the popup
        $data = [
            'showPopup' => true,
            'message' => 'This is not available right now.'
        ];
    
        // Return the JSON response
        return response()->json($data);
    }


    public function skarduhotel(){
        return view('hotels.skarduhotel');
    }

    public function gilgithotel(){
        return view('hotels.gilgithotel');
    }

    public function hunzahotel(){
        return view('hotels.hunzahotel');
    }

    public function chitralhotel(){
        return view('hotels.chitralhotel');
    }



}
