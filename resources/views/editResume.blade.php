@extends('layouts.app')
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

                <div class="card-header" style ="text-align:center; font-family:verdana; font-size: 18px"><img src="{{ asset('images/StudentLogo.png')}}" alt="" class="img-fluid" width=10%;>Insert Resume</div>

                <div class="card-body">
                    <form class="subform" method="post" action="{{ route('addResume.update') }}" enctype="multipart/form-data">
					{{ csrf_field() }} 
					
                        <div class="form-group row">
                            	<label for="name" class="label">Name: </label>
                            <div class="col-md-6">
								<input class="form-control" type="text" name="name" id="name">
                            </div>
                        </div>

						<div class="form-group row">
                            	<label for="birthdate" class="label">Birth Date: </label>
                            <div class="col-md-6">
								<input class="form-control" type="date" name="birthdate" id="birthdate">
                            </div>
                        </div>
						
						<div class="form-group row">
								<label for="phone_number" class="label">Phone Number: </label>
                            <div class="col-md-6">
								<input class="form-control" name="phone_number" id="phone_number" type="text" />
                            </div>
                        </div>

						<div class="form-group row">
								<label for="email" class="label">Email: </label>	
                            <div class="col-md-6">
								<input class="form-control" name="email" id="email" type="text" />
                            </div>
                        </div>

						<div class="form-group row">
								<label for="address" class="label">Address: </label>
                            <div class="col-md-6">
								<input class="form-control" name="address" id="address" type="text" />
                            </div>
                        </div>

						<div class="form-group row">
							<label for="Education" class="label">Select Education: </label>
                        <div class="col-md-6">
							<select style="width:200px;text-align:center" name="educationName" id= " educationName" class="form-control">
								<option  value="">Select Education: </option>
							@foreach($EducationLevels as $EducationLevel)
								<option  value="{{ $EducationLevel->education_level}}">{{ $EducationLevel->education_level}}</option>
							@endforeach
							</select> 
                        </div>
                    </div>
			
						<div class="form-group row">
							<label for="self_evaluation" class="label">Self Evaluation: </label>
                        <div class="col-md-6">
							<input class="form-control" name="self_evaluation" id="self_evaluation" type="text" />
                        </div>
                    </div>

					<div class="form-group row">
							<label for="image" class="label">Your personal photo: </label>
                        <div class="col-md-6">
							<input type="file" name="Resume-image" placeholder="">
                        </div>
                    </div>

						<div class="form-group row">
							<label for="work_experiene" class="label">Work Experiene: </label>
                        <div class="col-md-6">
						<textarea class="form-control" name="work_experiene" id="work_experiene"></textarea>
                        </div>
                    </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
								<input type="submit" name="insert" value="Insert">
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