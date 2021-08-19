@extends('layouts.app')
<style>
    body.background {
         
         background-image:linear-gradient(to right, rgba(192,192,192, 0.62), rgba(128,128,128, 0.33)), url('images/background1.jpg');
         Height:90%;
         color: black; 
         background-size: cover;   
         background-repeat: no-repeat;
    }
</style>

@section('content')
    
<div class="p-5 mr-1 container">
    <div class="row" style="justify-content: flex-center; position: relative">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header"  style ="text-align:center; font-family:verdana;"><img src="{{ asset('images/LoginLg.png')}}" alt="" class="img-fluid" width=10%;>Insert Career</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('addCareer.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="ID" class="label">Career ID:</label>

                        <div class="col-md-8">
                            <input type="text" name="ID" id="ID" class="form-control" placeholder="Please Enter Career ID......">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Career" class="label">Career Name: </label>

                        <div class="col-md-8">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Please Enter Career Name......">

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <input type="submit" name="insert" value="Insert" style="float:right;" class="btn btn-success">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
@endsection
