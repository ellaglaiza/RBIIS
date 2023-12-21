@extends('layouts.auth')

@section('content')
          <h2 style="color: white; margin-top: 53px; text-align: center;font-size: 42px;">Registry of Barangay Inhabitants Information System</h2>

    <form method="post" id="submitForm" action="{{ route('login.perform') }}" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <!-- /.login-logo -->
         <div class="card card-outline card-info" style="width: auto; max-width: 322px; margin-inline: auto; margin-top: 42px;">
            <div class="card-header text-center">
               <a href="index.html" class="brand-link">
               <img src="{{ asset('auth/img/admin1.png')}}" style="object-fit: fill; width: -14px; height: 103px;">
               </a>
            </div>
            @include('layouts.partials.messages')
            <div class="card-body">
                <label for="floatingName">Email or Username</label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Email" required="required" autofocus>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                  </div>
                 <label for="floatingPassword">Password</label>
                   <div class="input-group mb-3">
                     
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                   
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                  <div class="row">
                     <div class="col-6 offset-lg-3">
                        <center>
                         <button type="submit" class="btn btn-info btn-block" style="background-color: blue;" style="color: white">Login</button>
                         <!-- <button type="submit" class="btn btn-info btn-block" style="background-color: #aa8800;" style="color: White ">Sign Up</button> -->
                     </div>
                  </div>

            </div>
            <!-- /.card-body -->
         </div>
         <!-- /.card -->
    </form>
@endsection