@extends('site.layouts.site')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('api/api.create_page_title') }}} ::
@parent
@stop

@section('header_title')
{{{ Lang::get('api/api.create_page_title') }}}
@stop
{{-- Content --}}
@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        {{{ Lang::get('api/api.create_page_title') }}} 
        <small>it all starts here</small>
    </h1>
    
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{{ Lang::get('title.home') }}}</a></li>
        <li><a href="#">{{{ Lang::get('title.developer') }}}</a></li>
        <li class="active">{{{ Lang::get('title.api_create') }}}</li>
    </ol>
    </section>
    <!-- Content -->
    <section class="content">
    <form class="form-horizontal" method="POST" action="{{ URL::to('api') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <fieldset>
        <div class="form-group">
            <label class="col-md-2 control-label" for="email">邮箱</label>
            <div class="col-md-5">
                <input class="form-control" tabindex="1" placeholder="{{ Auth::getUser()->email }}" type="text" name="email" id="email" value="{{ Input::old('email') }}" disabled>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="password">
                项目名称
            </label>
            <div class="col-md-5">
                <input class="form-control" tabindex="2" placeholder="{{ Lang::get('confide::confide.password') }}" type="text" name="project_name" id="password">
            </div>
        </div>

        @if ( Session::has('message') )
        {{ Session::get('message') }}
        @endif

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button tabindex="3" type="submit" class="btn btn-primary">提交</button>
            </div>
        </div>
    </fieldset>
    </form>
    </section>
</aside><!-- /.right-side -->

@stop
