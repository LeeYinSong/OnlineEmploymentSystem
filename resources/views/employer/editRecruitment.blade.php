@extends('employer.navBar.RecruitmentNav')
<style>
	label{
		margin: auto;
		display: inline-block;
		width: 150px;
		text-align:right;
	}
	input[type=submit] {
		background-color: #04AA6D;
		color: white;
		padding: 12px 20px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		float: right;
}
</style>
<body>
@section('content')

{{ csrf_field() }} 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">

                <div class="card-header" style ="text-align:center; font-family:verdana; font-size: 18px"><img src="{{ asset('images/StudentLogo.png')}}" alt="" class="img-fluid" width=10%;>Edit Recruitment</div>

                <div class="card-body">
                    <form class="subform" method="post" action="{{ route('editRecruitment.update') }}" enctype="multipart/form-data">
					{{ csrf_field() }} 
                    @foreach($recruitment_notices as $recruitment_notice)
						<input class="form-control" type="hidden" name="id" id="id" value="{{$recruitment_notice->id}}">
                        <div class="form-group row">
                            	<label for="job_type" class="label">Job Type: </label>
                            <div class="col-md-6">
								<input class="form-control" type="text" name="job_type" id="job_type" value="{{$recruitment_notice->job_type}}">
                            </div>
                        </div>

						<div class="form-group row">
							<label for="Career" class="label">Select Career Level: </label>
                        <div class="col-md-6">
							<select style="width:200px;text-align:center" name="career_levelName" id= "career_levelName" class="form-control">
								<option  value="">Select Career Level: </option>
							@foreach($CareerLevels as $CareerLevel)
								<option  value="{{ $CareerLevel->Career_Level}}"
									@if($recruitment_notice->career_levelName==$CareerLevel->Career_Level)selected                    
                        				@endif>{{ $CareerLevel->Career_Level}}</option>
							@endforeach
							</select> 
                        </div>
                    </div>

						<div class="form-group row">
                            	<label for="salary" class="label">Salary: </label>
                            <div class="col-md-6">
								<input class="form-control" type="text" name="salary" id="salary" value="{{$recruitment_notice->salary}}">
                            </div>
                        </div>

						<div class="form-group row">
								<label for="qualification" class="label">Qualification: </label>
                            <div class="col-md-6">
								<input class="form-control" name="qualification" id="qualification" type="text" value="{{$recruitment_notice->qualification}}">
                            </div>
                        </div>

						<div class="form-group row">
							<label for="image" class="label">Company Logo: </label>
                        <div class="col-md-6">
							<input class="form-control" name="imageName" id="imageName" type="file" value="{{$recruitment_notice->imageName}}">
                        </div>
						
                    	</div>
						<div class="form-group row">
								<label for="requirements" class="label">Requirements: </label>
                            <div class="col-md-6">
								<input class="form-control" name="requirements" id="requirements" type="text" value="{{$recruitment_notice->requirements}}">
                            </div>
                        </div>

						<div class="form-group row">
								<label for="job_specialization" class="label">Job Specialization: </label>	
                            <div class="col-md-6">
								<input class="form-control" name="job_specialization" id="job_specialization" type="text" value="{{$recruitment_notice->job_specialization}}">
                            </div>
                        </div>

						<div class="form-group row">
								<label for="job_description" class="label">Job Description: </label>	
                            <div class="col-md-6">
								<input class="form-control" name="job_description" id="job_description" type="text" value="{{$recruitment_notice->job_description}}">
                            </div>
                        </div>
                        @endforeach

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
								<input type="submit" name="edit" value="edit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection