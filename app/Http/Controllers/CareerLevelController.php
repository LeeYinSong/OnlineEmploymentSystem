<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\CareerLevel; 

class CareerLevelController extends Controller
{
    public function create(){
        return view('insertCareer');
    }
    
    public function store(){    //step 2 
        $r=request(); //step 3 get data from HTML
        $addCareer=CareerLevel::create([    //step 3 bind data
            'id'=>$r->ID, //add on 
            'Career_Level'=>$r->name, //fullname from HTML
            
        ]);
        return redirect()->route('Career_Level');
    }
}