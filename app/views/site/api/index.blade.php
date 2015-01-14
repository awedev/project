@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('api/api.index_page_title') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>{{{ Lang::get('api/api.index_page_title') }}}</h1>
</div>

@if ( Session::has('message') )
{{ Session::get('message') }}
@endif

@foreach($apis as $api)
    <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">{{{ Lang::get('api/api.api_key_created_at') }}}{{{$api->created_at}}}</h3>
        </div>

        <div class="panel-body">
          <div class = "row">
              <div class="col-md-9">
                <div class="highlight">
                  <pre><i class="fa fa-key"></i><p>{{{$api->api_key}}}</p></pre>
                </div>
              </div>
              <div class="col-md-1">
                {{ Form::open(array('route' => array('api.destroy', $api->id), 'method' => 'delete')) }}
                <button  type="submit" class="btn btn-danger">
                  <i class="fa fa-trash-o"> {{{ Lang::get('button.delete') }}}</i>
                </button>
                {{ Form::close() }}
              </div>
              <div class="col-md-1">
                <button class="btn btn-info" href="#">
                  <i class="fa fa-files-o"> {{{ Lang::get('button.copy') }}}</i>
                </button>
              </div>
          </div>
        </div>
    </div>

@endforeach
@stop