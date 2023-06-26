@extends('layouts.auth')

@section('content')
    <form method="post" action="{{ route('register.perform') }}">

        
        @include('auth.partials.copy')
            <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class=""></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    @csrf
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                             <label for="floatingName">Username</label>
                                                @if ($errors->has('username'))
                                                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                                @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                             <label for="floatingName">Lastname</label>
                                                @if ($errors->has('lastname'))
                                                    <span class="text-danger text-left">{{ $errors->first('lastname') }}</span>
                                                @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                        <label for="floatingEmail">Email address</label>
                                            @if ($errors->has('email'))
                                                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                            @endif
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                             <label for="floatingPassword">Password</label>
                                            @if ($errors->has('password'))
                                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                            @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleConfirmPassword" placeholder="Confirm Password">
                                             <label for="floatingConfirmPassword">Confirm Password</label>
                                            @if ($errors->has('password_confirmation'))
                                                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                            @endif
                                    </div>
                                </div>
                               <div class="text-center">
                                <button class="btn btn-primary btn-user btn-block" type="submit">
                                            Register
                                        </button>
                            </div>
                                <hr>
                               
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection