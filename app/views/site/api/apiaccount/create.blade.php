@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('api/apiaccount.create_page_title') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1> {{{ Lang::get('api/apiaccount.create_page_title') }}} </h1>
</div>
<form class="form-horizontal" method="POST" action="{{ URL::to('api/apiaccount') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <fieldset>
        <div class="form-group">
            <label class="col-md-2 control-label" for="email">邮箱</label>
            <div class="col-md-10">
                <input class="form-control" tabindex="1" placeholder="{{ Auth::getUser()->email }}" type="text" name="email" id="email" value="{{ Input::old('email') }}" disabled>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="password">
                项目名称
            </label>
            <div class="col-md-10">
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
@stop
