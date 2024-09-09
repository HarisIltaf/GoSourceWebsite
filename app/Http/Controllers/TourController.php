<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    //

    public function gilgit(){
        return view('tours.gilgit');
    }
    public function swat(){
        return view('tours.swat');
    }
    public function chitral(){
        return view('tours.chitral');
    }
    public function naran(){
        return view('tours.naran');
    }
    public function kashmir(){
        return view('tours.kashmir');
    }
    public function nathia(){
        return view('tours.nathia');
    }


    public function gilgitbyair(){
        return view('gilgit.byAir');
    }
    public function gilgitbyroad(){
        return view('gilgit.byroad');
    }
    public function grouptour(){
        return view('gilgit.grouptour');
    }


    public function swattour(){
        return view('tours.swat');
    }

    public function chitraltour(){
        return view('tours.chitral');
    }

    public function narantour(){
        return view('tours.naran');
    }

    public function nathiatour(){
        return view('tours.nathia');
    }


    public function kashmirtour(){
        return view('tours.kashmir');
    }
    public function kumrattour(){
        return view('tours.kumrat');
    }
    // 
    public function skardutour(){
        return view('tours.skardu');
    }


public function skardubyair(){
        return view('skardu.skardubyair');
    }
    public function skardubyroad(){
        return view('skardu.skardubyroad');
    }




}
