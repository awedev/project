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
<div class="account-container register">
	<div class="content clearfix">
		<form method="POST" action="{{{ (Confide::checkAction('UserController@store')) ?: URL::to('user')  }}}" accept-charset="UTF-8">
			<h1>Signup for Free Account</h1>			
			
			<div class="login-fields">
				
				<p>{{{ Lang::get('user/user.signup_detail') }}}</p>
				
				<div class="field">
					<label for="username">{{{ Lang::get('confide::confide.username') }}}</label>
            		<input class="login" placeholder="{{{ Lang::get('confide::confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
				</div> <!-- /field -->
				
				<div class="field">
					<label for="email">{{{ Lang::get('confide::confide.e_mail') }}} <small>{{ Lang::get('confide::confide.signup.confirmation_required') }}</small></label>
            		<input class="login" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
				</div> <!-- /field -->
				
				<div class="field">
					 <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
            		<input class="login" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
            		<input class="login" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
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
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Agree with the Terms & Conditions.</label>
				</span>
				<button type="submit" class="button btn btn-primary btn-large">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
				
			</div> <!-- .actions -->
		</form>
		<div>
		</div>
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	{{{ Lang::get('user/user.have_account') }}} <a href="{{ URL::to('user/login') }}">{{{ Lang::get('user/user.click_to_login') }}}</a>
</div> <!-- /login-extra -->
@stop

@section('script')
<script src="{{asset('admin/js/signin.js')}}"></script>
@stop