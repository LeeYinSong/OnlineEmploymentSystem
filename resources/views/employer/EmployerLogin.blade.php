@extends('employer.navBar.LoginNav')
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
<body class = "background">
    <div>
    
<div class="p-5 mr-1 container">
    <div class="row" style="justify-content: flex-end; position: relative">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header"  style ="text-align:center; font-family:verdana;"><img src="{{ asset('images/LoginLg.png')}}" alt="" class="img-fluid" width=10%;>Employer {{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('Employer.check') }}" autocomplete="off">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                            <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                            <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-5 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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