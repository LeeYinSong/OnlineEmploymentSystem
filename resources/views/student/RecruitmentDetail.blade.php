@extends('layouts.app')
@section('content')  
            <div>   
                <div style="text-align:center"> 
                <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
            </div>

            @foreach($recruitment_notices as $recruitment_notice)
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0" Style="outline: 5px groove black;"> 
            <form action="" method="">

                       @csrf

                    <h5 class="card-title"><strong>Job type: </strong>{{$recruitment_notice->job_type}}</h5>
                    <h5 class="card-title"><strong>Salary: RM </strong>{{$recruitment_notice->salary}}</h5>
                    <h5 class="card-title"><strong>Career level: </strong>{{$recruitment_notice->career_levelName}}</h5>
                    <h5 class="card-title"><strong>Requirements: </strong>{{$recruitment_notice->requirements}}</h5>
                    <h5 class="card-title"><strong>qualification: </strong>{{$recruitment_notice->qualification}}</h5>
                    <h5 class="card-title"><strong>job_specialization: </strong>{{$recruitment_notice->job_specialization}}</h5>
                    <h5 class="card-title"><strong>Description: </strong>{{$recruitment_notice->job_description}}</h5>

                    <p style="text-align:center">
                            <input type="submit" name="insert" value="Accept Recruitment" class="btn btn-success">
                    </p>
                </form>
                </div>
        @endforeach
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    </div>
                </div>
                
            </div>
@endsection