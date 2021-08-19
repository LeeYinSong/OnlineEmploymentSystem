<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\EducationLevel; 


class EducationLevelController extends Controller
{
    public function create(){
        return view('insertEducation');
    }
    
    public function store(){    //step 2 
        $r=request(); //step 3 get data from HTML
        $addEducationLevel=EducationLevel::create([    //step 3 bind data
            'id'=>$r->ID, //add on 
            'education_level'=>$r->name, //fullname from HTML
            
        ]);
        return redirect()->route('education_level');
    }
}