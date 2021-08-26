<style>
    body.background {
         
         background-image:linear-gradient(to right, rgba(192,192,192, 0.62), rgba(128,128,128, 0.33)), url('images/background2.jpg');
         color: black; 
         background-size: cover;   
         background-repeat: no-repeat;
    }
</style>

@extends('student.navBar.RegisterNav')
<body class = "background">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style ="text-align:center; font-family:verdana; font-size: 18px"><img src="{{ asset('images/StudentLogo.png')}}" alt="" class="img-fluid" width=10%;>Student {{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.create') }}" autocomplete="off">

                    @if (Session::get('success'))
                         <div class="alert alert-success">
                             {{ Session::get('success') }}
                         </div>
                    @endif
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpassword" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="cpassword" type="password" class="form-control" name="cpassword" required autocomplete="new-password">
                            </div>
                        </div>
                        <span class="text-danger">@error('cpassword'){{ $message }}@enderror</span>

                        <div class="form-group row">

                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
                            </div>
                        </div>
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>

                        <div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="date" class="form-control" name="birthdate" required autocomplete="birthdate" autofocus>
                        <span class="text-danger">@error('birthdate'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="school" class="col-md-4 col-form-label text-md-right">{{ __('School') }}</label>

                            <div class="col-md-6">
                                <input id="school" type="text" class="form-control" name="school" required autocomplete="school" autofocus>
                            </div>
                        </div>
                        <span class="text-danger">@error('school'){{ $message }}@enderror</span>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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