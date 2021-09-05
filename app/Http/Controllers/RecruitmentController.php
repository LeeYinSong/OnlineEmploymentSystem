<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use DB;
use App\Models\recruitment_notice; 
use App\Models\CareerLevel; 
use App\Models\User; 
Use Session;
use Illuminate\Support\Facades\Auth;



class RecruitmentController extends Controller
{

    public function create(){
        return view('employer.insertRecruitment') ->with('CareerLevels',CareerLevel::all());
    }

    public function store(){    //step 2 
        $r=request(); //step 3 get data from HTML

        $addCareer=recruitment_notice::create([
            'id'=>$r->ID,
            'employer_id'=>$r->employer_id,
            'career_levelName'=>$r->career_levelName,
            'job_description'=>$r->job_description,
            'requirements'=>$r->requirements,
            'job_type'=>$r->job_type,
            'qualification'=>$r->qualification,
            'salary'=>$r->salary, //fullname from HTML
            'job_specialization'=>$r->job_specialization,
        ]);
    
        Session::flash('success',"Recruitment Notice create succesful!");        
        Return redirect()->route('Employer.EmployerHome');
       
    }

    public function ViewRecruitment(){
        $recruitment_notices=recruitment_notice::paginate(9);
        
        return view('ViewRecruitment')->with('recruitment_notices',$recruitment_notices);
    }

    public function RecruitmentDetail($id){
       
        $recruitment_notices =recruitment_notice::all()->where('id',$id);

        return view('student/RecruitmentDetail')->with('recruitment_notices',$recruitment_notices)
                                            ->with('CareerLevels',CareerLevel::all());
    }

    public function edit($id){
       
        $recruitment_notices=recruitment_notice::all()->where('employer_id',$id);
        if(!$recruitment_notices->isEmpty()){
            return view('Employer/editRecruitment')->with('recruitment_notices',$recruitment_notices)
                                            ->with('CareerLevels',CareerLevel::all());
        }else{
            return view('employer.insertRecruitment') ->with('CareerLevels',CareerLevel::all());
        }
    }

    public function update(){
        $r=request();
        $recruitment_notices=recruitment_notice::find($r->id);
        
        $recruitment_notices->career_levelName=$r->career_levelName;
        $recruitment_notices->job_description=$r->job_description;
        $recruitment_notices->requirements=$r->requirements;
        $recruitment_notices->job_type=$r->job_type;
        $recruitment_notices->qualification=$r->qualification;
        $recruitment_notices->salary=$r->salary;
        $recruitment_notices->job_specialization=$r->job_specialization;
        $recruitment_notices->save();
        return redirect()->route('Employer.EmployerHome');
    }
}