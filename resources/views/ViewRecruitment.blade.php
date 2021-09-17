@extends('student.navBar.ResumeNav')
@section('content')
<body>
<!-- style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)); background-size: cover;"  -->

@if(Session::has('success'))           
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>       
@endif 
<!----------------------------------------------------------- user information (Start) ------------------------------------------------------------>

<div class="container-fluid">
        <div class="row">
            <div class="px-2">
                <img src="{{ asset('images/person.jpg')}}" alt="" class="img-fluid" style="border-radius: 50%; float: left;" width="25%" >

                <h5 style="margin-left: 150px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name: {{ Auth::user()->name }}</h5>
                <h5 style="margin-left: 150px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: {{ Auth::user()->email }}</h5>
                <h5 style="margin-left: 150px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: {{ Auth::user()->school }}</h5>
            </div>
        </div>
    </div>
    </div>
    <hr Style="height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">

<!----------------------------------------------------------- user information (end) ------------------------------------------------------------>
    
<!-------------------------------------------------------------- Job List (Start) ----------------------------------------------------------------->
         <div class="container">
                <div class="d-flex flex-nowrap">
                 <div class="row">
                 @foreach($recruitment_notices as $recruitment_notice)
                        <div class="order-md-4 p-4">
                        <a href="{{ route('RecruitmentDetail', ['id' => $recruitment_notice->id]) }}" style="text-decoration: none; color: Black;">
                            <div class="card h-150 card bg-snow text-black" Style="outline: 1px black; width: 330px; height: 410px">
                                <div class="p-4">
                                <img src="{{ asset('images/PersonalImg') }}/{{$recruitment_notice->image}}" alt="" style="width:60%; margin-left: 20%; margin-bottom: 3%;" class="img-fluid"> 
                                <h5 class="p-1"><strong>Job type: </strong>{{$recruitment_notice->job_type}}</h5>
                                    <h5 class="p-1"><strong>Salary: </strong>RM {{$recruitment_notice->salary}}</h5>
                                    <h5 class="p-1"><strong>Career level: </strong>{{$recruitment_notice->career_levelName}}</h5> 
                                    <h5 class="p-1"><strong>Requirements: </strong><br> {{$recruitment_notice->requirements}}</h5>
                                    <!-- <h5 class="p-1">Description: {{$recruitment_notice->job_description}}</h5>
                                    <h5 class="p-1">qualification: {{$recruitment_notice->qualification}}</h5>
                                    <h5 class="p-1">job_specialization: {{$recruitment_notice->job_specialization}}</h5> -->

                                    </div>
                                </div>
                            </a>
                        </div>
                @endforeach       
                    </div>
            </div>
        </div>
            
            <div class="container">
                    {{ $recruitment_notices->links()}}
            </div> 
<!---------------------------------------------------------------- Job List (End) ----------------------------------------------------------------->

         </body>
@endsection   