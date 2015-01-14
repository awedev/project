@extends('site.layouts.site')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.login') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="account-container"> 
    <div class="content clearfix">
            <form class="form-horizontal" method="POST" action="{{ URL::to('user/login') }}" accept-charset="UTF-8">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h1>{{{ Lang::get('user/user.login') }}}</h1>        
            <div class="login-fields">
                <p>{{{ Lang::get('user/user.login_detail') }}}</p>                
                <div class="field">
                    <div class="form-group">
                    <label class="col-md-2 control-label" for="email">{{ Lang::get('confide::confide.username_e_mail') }}</label>
                    <input class="login username-field" tabindex="1" placeholder="{{ Lang::get('confide::confide.username_e_mail') }}" type="text" name="email" id="email" value="{{ Input::old('email') }}">
                    </div>
                </div> <!-- /field -->                
                <div class="field">
                    <div class="form-group">
                    <label class="col-md-2 control-label" for="password">{{ Lang::get('confide::confide.password') }}</label>
                    <input class="login password-field" tabindex="2" placeholder="{{ Lang::get('confide::confide.password') }}" type="password" name="password" id="password">
                    </div>
                </div> <!-- /password -->               
            </div> <!-- /login-fields --> 
            @if ( Session::get('error') )
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif
            @if ( Session::get('notice') )
            <div class="alert">{{ Session::get('notice') }}</div>
            @endif
            <div class="login-actions">                
                <span class="login-checkbox">
                    <input type="hidden" name="remember" value="0">
                    <input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
                    <label for="remember">{{ Lang::get('confide::confide.login.remember') }}</label>
                </span> 
                <div class="form-group">                                   
                <button type="submit" class="button btn btn-success btn-large">{{ Lang::get('confide::confide.login.submit') }}</button>
                </div>               
            </div> <!-- .actions -->
        </form>        
    </div> <!-- /content -->    
</div> <!-- /account-container -->



<div class="login-extra">
    <a href="forgot">{{ Lang::get('confide::confide.login.forgot_password') }}</a>
</div> <!-- /login-extra -->

@stop

@section('script')
<script src="{{asset('admin/js/signin.js')}}"></script>
@stop
