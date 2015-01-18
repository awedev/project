@extends('site.layouts.site')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.register') }}} ::
@parent
@stop

@section('page_title')
{{{ Lang::get('user/user.register') }}} ::
@stop

{{-- Content --}}
@section('content')
<div class="form-box" id="login-box">
    <div class="header">{{{ Lang::get('user/user.register') }}}</div>
    <form method="POST" action="{{{ (Confide::checkAction('UserController@store')) ?: URL::to('user')  }}}" accept-charset="UTF-8">
        <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
        <div class="body bg-gray">
            <div class="form-group">
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
            </div>
        </div>
        @if ( Session::get('error') )
            <div class="alert alert-error alert-danger">
                @if ( is_array(Session::get('error')) )
                    {{ head(Session::get('error')) }}
                @endif
            </div>
        @endif

        @if ( Session::get('notice') )
            <div class="alert">{{ Session::get('notice') }}</div>
        @endif
        <div class="footer">
            <input id="Field" name="Field" type="checkbox" value="First Choice" tabindex="4" />
            <label class="choice" for="Field">Agree with the Terms & Conditions.</label>
 			<button type="submit" class="btn bg-olive btn-block">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
            <a class="text-center" href="{{ URL::to('user/login') }}">{{{ Lang::get('user/user.have_account') }}}{{{ Lang::get('user/user.click_to_login') }}}</a>
        </div>
    </form>

    <div class="margin text-center">
        <span>Register using social networks</span>
        <br/>
        <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
        <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
        <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

    </div>
</div>
@stop

@section('script')
<script src="{{asset('admin/js/signin.js')}}"></script>
@stop