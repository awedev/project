<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			Laravel 4 Sample Site
			@show
		</title>
		@section('meta_keywords')
		<meta name="keywords" content="your, awesome, keywords, here" />
		@show
		@section('meta_author')
		<meta name="author" content="Jon Doe" />
		@show
		@section('meta_description')
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />
        @show
		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
		<link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/css/bootstrap-responsive.min.css')}}" rel="stylesheet" type="text/css" />

		<link href="{{asset('admin/css/font-awesome.css')}}" rel="stylesheet">
		    
		<link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('admin/css/pages/signin.css')}}" rel="stylesheet" type="text/css">
		<!--
		<style>
        body {
            padding: 60px 0;
        }
		@section('styles')
		@show
		</style>
		!-->
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
	</head>
	<body>
		<!--Header Start-->
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="index.html">
					@section('header_title')
						{{{ Lang::get('user/user.login_page_title') }}}
					@show
					</a>
					@if (Auth::check())
					<ul class="nav navbar-nav pull-right">
                        @if (Auth::user()->hasRole('admin'))
                        <li><a href="{{{ URL::to('admin') }}}">管理员后台</a></li>
                        @endif
                        @if (date('H:i')>='5:00' && date('H:i')<='12:00')
                        <li><a href="{{{ URL::to('user') }}}"> {{{ Auth::user()->username }}} , 早上好!</a></li>
                        @elseif (date('H:i')>'12:00' && date('H:i')<'18:00')
                        <li><a href="{{{ URL::to('user') }}}"> {{{ Auth::user()->username }}} , 下午好!</a></li>
                        @elseif (date('H:i')>='18:00' && date('H:i')<='22:00')
                        <li><a href="{{{ URL::to('user') }}}"> {{{ Auth::user()->username }}} , 晚上好! </a></li>
                        @else
                        <li><a href="{{{ URL::to('user') }}}"> {{{ Auth::user()->username }}} , 夜已深 早点休息!</a></li>
                        @endif
                        <li><a href="{{{ URL::to('user/logout') }}}">安全退出</a></li>
                    </ul>
                    @else	
					<div class="nav-collapse">
						<ul class="nav pull-right">
							<li class="">						
								<a href="{{{ URL::to('user/create') }}}" class="">
									{{{ Lang::get('user/user.signup_now') }}}
								</a>
								
							</li>
							<li class="">						
								<a href="{{{ URL::to('') }}}" class="">
									<i class="icon-chevron-left"></i>
									{{{ Lang::get('user/user.back_home') }}}
								</a>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
					@endif	
				</div> <!-- /container -->
			</div> <!-- /navbar-inner -->
		</div> <!-- /navbar -->
		<!--Header End-->
		@yield('content')
		<script src="{{asset('admin/js/jquery.min.js')}}"></script>
		<script src="{{asset('admin/js/bootstrap.js')}}"></script>
		@yield('script')
	</body>
</html>