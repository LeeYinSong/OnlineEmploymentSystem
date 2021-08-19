<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use DB;
use App\Models\recruitment_notice; 
use App\Models\CareerLevel; 
Use Session;



class RecruitmentController extends Controller
{

    public function create(){
        return view('insertRecruitment') ->with('CareerLevels',CareerLevel::all());
    }

    public function store(){    //step 2 
        $r=request(); //step 3 get data from HTML

        $addCareer=recruitment_notice::create([    //step 3 bind data
            'id'=>$r->ID, //add on 
            'career_levelName'=>$r->career_levelName,
            'job_description'=>$r->job_description,
            'requirements'=>$r->requirements,
            'job_type'=>$r->job_type,
            'qualification'=>$r->qualification,
            'salary'=>$r->salary, //fullname from HTML
            'job_specialization'=>$r->job_specialization,
        ]);
    
        Session::flash('success',"recruitment_notice create succesful!");        
        Return redirect()->route('ViewRecruitment');
       
    }

    public function ViewRecruitment(){
        $recruitment_notices=recruitment_notice::paginate(9);
        
        return view('ViewRecruitment')->with('recruitment_notices',$recruitment_notices);
    }
}