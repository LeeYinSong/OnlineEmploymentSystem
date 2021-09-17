@extends('employer.navBar.RecruitmentNav')
@section('content')


<body>
    
@if(Session::has('success'))           
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>       
@endif 
<!----------------------------------------------------------- user information (Start) ------------------------------------------------------------>

<div class="container-fluid">
        <div class="row">
            <div class="px-2">
                <img src="{{ asset('images/person.jpg')}}" alt="" class="img-fluid" style="border-radius: 50%; float: left; width:25%;">

                <h5 style="margin-left: 150px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name: {{ Auth::user()->name }}</h5>
                <h5 style="margin-left: 150px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: {{ Auth::user()->email }}</h5>
                <h5 style="margin-left: 150px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Company: {{ Auth::user()->company }}</h5>
            </div>
        </div>
    </div>
    </div>
    <hr Style="height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">
<!----------------------------------------------------------- user information (end) ------------------------------------------------------------>
    
<!------------------------------------------------------------- Resume List (Start) ----------------------------------------------------------------->
            <div class="container">
                <div class="d-flex flex-nowrap">
                 <div class="row">
                @foreach($resumes as $resume)
                        <div class="order-md-4 p-4">
                        <a href="{{ route('ResumeDetail', ['id' => $resume->id]) }}" style="text-decoration: none; color: Black;">
                            <div class="card h-150 card bg-snow text-black" Style="outline: 1px black;  width: 330px; height: 410px">
                                <div class="p-4">
                                    <img src="{{ asset('images/PersonalImg') }}/{{$resume->image}}" alt="" style="width:50%; margin-left: 27%; margin-bottom: 3%;" class="img-fluid"> 
                                    <h5 class="p-1"><strong> Name: </strong>{{$resume->name}}</h5>
                                    <h5 class="p-1"><strong>Birthdate: </strong>{{$resume->birthdate}}</h5>
                                    <h5 class="p-1"><strong>Phone number: </strong>0{{$resume->phone_number}}</h5>
                                    <h5 class="p-1"><strong>Email: </strong>{{$resume->email}}</h5>
                                    <h5 class="p-1"><strong>Education Level: </strong><br> {{$resume->education_levelName}}</h5>
                                    <!-- <h5 class="card-title">address: {{$resume->address}}</h5>
                                    <h5 class="card-title">self_evaluation: {{$resume->self_evaluation}}</h5>
                                    <h5 class="card-title">work_experiene: {{$resume->work_experiene}}</h5> -->
                                    <!-- <button style="margin-left: 27%;" class="btn btn-danger btn-xs">View More</button> -->
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach       
                </div>
            </div>
        </div>
            
            <div class="container">
                    {{ $resumes->links()}}
            </div> 
            
            
         <!------------------------------------------------------------- Resume List (end) ----------------------------------------------------------------->
         </body>
         <div class="container">
         <div style="height: 50px"><p>.</p></div>
            </div> 
         
@endsection    