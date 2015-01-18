@extends('site.layouts.site')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.login') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="form-box" id="login-box">
    <div class="header">{{{ Lang::get('user/user.login') }}}</div>
    <form class="form-horizontal" method="POST" action="{{ URL::to('user/login') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="body bg-gray">
            <div class="form-group">
                <input class="form-control" tabindex="1" placeholder="{{ Lang::get('confide::confide.username_e_mail') }}" type="text" name="email" id="email" value="{{ Input::old('email') }}">
            </div>
            <div class="form-group">
                <input class="form-control" tabindex="2" placeholder="{{ Lang::get('confide::confide.password') }}" type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <span class="login-checkbox">
                    <input type="hidden" name="remember" value="0">
                    <input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
                    <label for="remember">{{ Lang::get('confide::confide.login.remember') }}</label>
                </span> 
            </div>
        </div>
        <div class="footer">
            <button type="submit" class="btn bg-olive btn-block">{{ Lang::get('confide::confide.login.submit') }}</button>

            <p><a href="forgot">{{ Lang::get('confide::confide.login.forgot_password') }}</a></p>

            <a href="{{{ URL::to('user/create') }}}" class="text-center">{{{ Lang::get('user/user.signup_now') }}}</a>
        </div>
    </form>

    <div class="margin text-center">
        <span>Sign in using social networks</span>
        <br/>
        <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
        <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
        <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

    </div>
</div>
@stop

@section('script')

@stop
