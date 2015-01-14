@extends('admin.layouts.admin')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('admin/admin.page_title') }}} ::
@parent
@stop
{{-- Web site Content --}}
@section('content')
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
      @include('widgets.controlpanel')
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
@stop

@section('script')
<script>
	$(document).ready(function(){
    	$('#mainnav li').eq(0).addClass('active').show();
  	});
</script>
@stop