@extends('student.navBar.ResumeNav')
<style>
        th, td {
            height: 40px;
            vertical-align: top;
        }
</style>
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
                    <img src="{{ asset('images/PersonalImg') }}/{{$recruitment_notice->image}}" alt="" style="width:30%; margin-bottom: 3%;" class="img-fluid"> 
                    <table style="text-align:left; font-size: 20px; vertical-align: bottom;">
                        <tr>
                            <td style="width: 35%;"><strong> Job Type: </strong></td>
                            <td>{{$recruitment_notice->job_type}}</td>
                        </tr>
                        <tr>
                            <td><strong> Salary: </strong></td>
                            <td>{{$recruitment_notice->salary}}</td>
                        </tr>
                        <tr>
                            <td><strong> Career Level: </strong></td>
                            <td>{{$recruitment_notice->career_levelName}}</td>
                        </tr>
                        <tr>
                            <td><strong> Requirements: </strong></td>
                            <td>{{$recruitment_notice->requirements}}</td>
                        </tr>
                        <tr>
                            <td><strong> Qualification: </strong></td>
                            <td>{{$recruitment_notice->qualification}}</td>
                        </tr>
                        <tr>
                            <td><strong> Job Specialization: </strong></td>
                            <td>{{$recruitment_notice->job_specialization}}</td>
                        </tr>
                        <tr>
                            <td><strong> Job Description: </strong></td>
                            <td>{{$recruitment_notice->job_description}}</td>
                        </tr>
                    </table>
                    <p style="text-align:center">
                            <input type="submit" name="insert" value="Accept Recruitment" class="btn btn-success" href="{{ url('user/home') }}">
                    </p>
                </form>
                </div>
        @endforeach
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    </div>
                </div>
                
            </div>
@endsection