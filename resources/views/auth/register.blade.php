@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('register.perform') }}" >

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
<!--         <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">
 -->      <div class="card card-outline card-info" style="width: auto; max-width: 382px; margin-inline: auto; margin-top: 100px;     height: 468px;">   
        <h1 class="h3 mb-3 fw-normal" style="margin-inline: 135px; margin-top: 13px;">Register</h1>

        <div class="form-group form-floating mb-3" style="width: 320px; margin-inline: 28px;">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="" required="required" autofocus>
            <label for="floatingEmail" style="margin-inline: 8px;">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3" style="idth: 270px; margin-inline: 28px;">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="" required="required" autofocus>
            <label for="floatingName" style="margin-inline: 10px">Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3" style="width: 323px; margin-inline: 28px;">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="" required="required">
            <label for="floatingPassword" style="margin-inline: 10px;">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3" style="width: 320px; margin-inline: 28px;">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="" required="required">
            <label for="floatingConfirmPassword" style="margin-inline: 10px;">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-50 btn btn-lg btn-primary" type="submit" style="margin-inline: 100px;">Register</button>
        
       


    </form>
</div>
@endsection