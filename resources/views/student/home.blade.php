@extends('student.navBar.HomeNav')
@section('content')
    <div class="container-fluid">
        <div class="row">



    <div class="p-5 container-fluid">
        <div style="text-align: right;">
        <strong style="font-family:verdana;  position: relative;" >
            <h1>Find out more job</h1>
            </strong>
            <p>Find the jobs now!</p>
            <p>There are already about 20 companies settled in.</p>
            <p>All the company that posted the recruitment notice in our website was credible.</p>
            <p>Search your interest company or the most suitable company to make your life more colorful.</p>
            <p>discovery key talent resources to get you ready for the job market and beyond.</p>
        
        </div>

        <a href="{{ route('ViewRecruitment') }}"><button class="btn btn-danger" style="border-radius: 20em;" type="button">Find More Job</button></a>
    </div>

    <div class="p-5 container-fluid" style="background: rgba(192,192,192, 0.4);">
    <strong style="font-family:verdana;  position: relative;">
        <h1>About us</h1>
        </strong>
        <p>The website is create for the students to have the more easy way to find the frelance jobs to let them gain more work experience.</p>
        <p>Our website is called Sunrise Street, this is because Sunrise is represent to the young generation and Street is represent a platform that let people find the jobs.</p>
        <p>Sunrise represent the young generation is because the young generation just like the sun that just came out form the horizon is fresh and ignorant.</p>
        <p>the street will represent to the platform that let people find jobs is because in our website we have a lot of jobs and all the jobs can combine to become a street. That's why our website is called Sunrise Street.</p>
    </div>

@endsection