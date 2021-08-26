<style>
    body.background {
         
         background-image:linear-gradient(to right, rgba(192,192,192, 0.62), rgba(128,128,128, 0.33)), url('images/background2.jpg');
         color: black; 
         background-size: cover;   
         background-repeat: no-repeat;
    }
</style>

@extends('employer.navBar.RegisterNav')
<body class = "background">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style ="text-align:center; font-family:verdana; font-size: 18px"><img src="{{ asset('images/StudentLogo.png')}}" alt="" class="img-fluid" width=10%;>Employer {{ __('Register') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('Employer.create') }}" autocomplete="off">

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
                                <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required autocomplete="new-password">
                                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpassword" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="cpassword" type="password" class="form-control" name="cpassword" value="{{ old('cpassword') }}" required autocomplete="new-password">
                                <span class="text-danger">@error('cpassword'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        

                        <div class="form-group row">

                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="ic" class="col-md-4 col-form-label text-md-right">{{ __('IC') }}</label>

                            <div class="col-md-6">
                                <input id="ic" type="text" class="form-control" name="ic" value="{{ old('ic') }}" required autocomplete="ic" autofocus>
                        <span class="text-danger">@error('ic'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                                <span class="text-danger">@error('phone_number'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>

                            <div class="col-md-6">
                                <input id="position" type="text" class="form-control" name="position" value="{{ old('position') }}" required autocomplete="company" autofocus>
                                <span class="text-danger">@error('position'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>

                            <div class="col-md-6">
                                <input id="company" type="text" class="form-control" name="company" value="{{ old('company') }}" required autocomplete="company" autofocus>
                                <span class="text-danger">@error('company'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        
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