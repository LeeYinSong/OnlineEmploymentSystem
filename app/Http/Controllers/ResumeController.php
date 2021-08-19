<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use DB;
use App\Models\resume; 
use App\Models\EducationLevel; 
Use Session;


class ResumeController extends Controller
{
    public function create(){
        return view('insertResume') ->with('EducationLevels',EducationLevel::all());
    }
    //Category::all() means "select * from category"
    public function store(){    
        $r=request(); 
        $image=$r->file('Resume-image');   //step to upload image get the file input
        $image->move('images/PersonalImg',$image->getClientOriginalName());   //images is the location                
        $imageName=$image->getClientOriginalName(); 

        $addEducation=resume::create([    
            'id'=>$r->ID, 
            'name'=>$r->name,
            'birthdate'=>$r->birthdate, 
            'phone_number'=>$r->phone_number,
            'email'=>$r->email,                 
            'address'=>$r->address,
            'education_levelName'=>$r->educationName,
            'self_evaluation'=>$r->self_evaluation, 
            'image'=>$imageName,
            'work_experiene'=>$r->work_experiene,                   
        ]);

        Session::flash('success',"Product create succesful!");        
        Return redirect()->route('ViewResume');
    }


    public function ViewResume(){
        $resumes=resume::paginate(9);
        
        return view('ViewResume')->with('resumes',$resumes);
    }

    public function ResumeDetail($id){
       
        $resumes =resume::all()->where('id',$id);
        
        return view('ResumeDetail')->with('resumes',$resumes)
                                   ->with('EducationLevel',EducationLevel::all());
    }

    public function boot()
    {
        Paginator::useBootstrap();
    }


}