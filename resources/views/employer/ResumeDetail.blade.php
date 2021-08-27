@extends('layouts.app')
@section('content')  
            <div>   
                <div style="text-align:center"> 
                <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
            </div>

            @foreach($resumes as $resume)
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0" Style="outline: 5px groove black;"> 
            <form action="" method="">

                       @csrf
                    <img src="{{ asset('images/PersonalImg') }}/{{$resume->image}}" alt="" style="width:30%; margin-bottom: 3%;" class="img-fluid"> 
                    <h5 class="card-title"><strong> Name: </strong>{{$resume->name}}</h5>
                    <h5 class="card-title"><strong> Birthdate: </strong>{{$resume->birthdate}}</h5>
                    <h5 class="card-title"><strong> phone_number: </strong>{{$resume->phone_number}}</h5>
                    <h5 class="card-title"><strong> email: </strong>{{$resume->phone_number}}</h5>
                    <h5 class="card-title"><strong> address: </strong>{{$resume->address}}</h5>
                    <h5 class="card-title"><strong> self_evaluation: </strong>{{$resume->self_evaluation}}</h5>
                    <h5 class="card-title"><strong> Description: </strong>{{$resume->work_experiene}}</h5>

                    <p style="text-align:center">
                            <input type="submit" name="insert" value="Accept Resume" class="btn btn-success">
                    </p>
                </form>
                </div>
        @endforeach
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    </div>
                </div>
                
            </div>
@endsection