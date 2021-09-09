@extends('layouts.app')
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
                <div class="col-lg-3 col-md-12 mb-2 mb-md-0">
            </div>

            @foreach($resumes as $resume)
            <div class="col-lg-6 col-md-4 mb-2 mb-md-0" Style="outline: 5px groove black;"> 
            <form action="" method="">

                       @csrf
                    <img src="{{ asset('images/PersonalImg') }}/{{$resume->image}}" alt="" style="width:30%; margin-bottom: 3%; margin-top: 3%;" class="img-fluid"> 
                    <table style="text-align:left; font-size: 20px; vertical-align: bottom;">
                        <tr>
                            <td style="width: 25%;"><strong> Name: </strong></td>
                            <td>{{$resume->name}}</td>
                        </tr>
                        <tr>
                            <td><strong> Birthdate: </strong></td>
                            <td>{{$resume->birthdate}}</td>
                        </tr>
                        <tr>
                            <td><strong> Phone Number: </strong></td>
                            <td>{{$resume->phone_number}}</td>
                        </tr>
                        <tr>
                            <td><strong> Email: </strong></td>
                            <td>{{$resume->email}}</td>
                        </tr>
                        <tr>
                            <td><strong> Address: </strong></td>
                            <td>{{$resume->address}}</td>
                        </tr>
                        <tr>
                            <td><strong> Self Evaluation: </strong></td>
                            <td>{{$resume->self_evaluation}}</td>
                        </tr>
                        <tr>
                            <td><strong> Work Experiene: </strong></td>
                            <td>{{$resume->work_experiene}}</td>
                        </tr>
                    </table>
                    
                    <p style="text-align:center; margin-top: 3%;">
                            <input type="submit" name="insert" value="Accept Resume" class="btn btn-success">
                    </p>
                </form>
                </div>
        @endforeach

@endsection