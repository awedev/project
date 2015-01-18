@extends('site.layouts.site')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('api/api.index_page_title') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">

<section class="content-header">
    <h1>
        {{{ Lang::get('api/api.index_page_title') }}}
        <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{{ Lang::get('title.home') }}}</a></li>
        <li><a href="#">{{{ Lang::get('title.developer') }}}</a></li>
        <li class="active">{{{ Lang::get('title.api_all') }}}</li>
    </ol>
</section>
<section class="content">
@if ( Session::has('message') )
{{ Session::get('message') }}
@endif
<div class="box box-info">
    <div class="box-header">
        <i class="fa fa-bullhorn"></i>
        <h3 class="box-title"></h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        @foreach($apis as $api)
        <div class="callout callout-info">
            <h4>{{{ Lang::get('api/api.api_key_created_at') }}}{{{$api->created_at}}}</h4>
            <div class="row">
                <div class="col-md-9">
                <div class="highlight">
                    <pre><i class="fa fa-key"></i>{{{$api->api_key}}}</pre>
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
        @endforeach
    </div><!-- /.box-body -->
</div><!-- /.box -->
</section>
</aside><!-- /.right-side -->
@stop