@extends('layouts.auth')

@section('content')
    <form method="post" action="{{ route('login.perform') }}">

         <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9" style="margin-top: 100px;">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0 justify-content-center" style="height: 450px">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block"></div>
                            <img src="{{ asset('auth/img/download.jpg')}}" style="margin-inline: -452px; width: 447px;}">
                            <div class="col-lg-6" style="    margin-inline: 467px; margin-top: -584px;">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                        <div class="form-group">
                                            @csrf
                                             <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                                              <label for="floatingName">Email or Username</label>
                                              @if ($errors->has('username'))
                                                  <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                              @endif
                                        </div>
                                        <div class="form-group">
                                              <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                                                <label for="floatingPassword">Password</label>
                                                @if ($errors->has('password'))
                                                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                                @endif  
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" type="submit">
                                            Login
                                        </button>
                                        <hr>
                                         
                                    <hr>
                                  
                                 <!--    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </form>
@endsection