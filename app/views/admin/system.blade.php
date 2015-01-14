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
	      	<div class="span12">      		
	      		<div class="widget ">
	      			<div class="widget-header">
	      				<i class="fa fa-desktop"></i>
	      				<h3>{{{ Lang::get('admin/admin.system') }}}</h3>
	  				</div> <!-- /widget-header -->
					<div class="widget-content">
						<div class="tabbable">
						<ul class="nav nav-tabs">
						  <li class="active">
						    <a href="#formcontrols" data-toggle="tab">{{{ Lang::get('admin/admin.tab_value1') }}}</a>
						  </li>
						  <li>
						  	<a href="#jscontrols" data-toggle="tab">{{{ Lang::get('admin/admin.tab_value2') }}}</a>
						  </li>
						  <li>
						  	<a href="#jscontrols" data-toggle="tab">{{{ Lang::get('admin/admin.tab_value3') }}}</a>
						  </li>
						</ul>
						<br>
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
									<fieldset>
										<form id="edit-profile" class="form-horizontal">
											<div class="control-group">											
												<label class="control-label" for="dbname">数据表名称</label>
												<div class="controls">
													<input type="text" class="span6 disabled" id="dbname" value="数据表名称">
												</div> <!-- /controls -->				
											</div> <!-- /control-group -->
											
											
											<div class="control-group">											
												<label class="control-label" for="query">数据表操作</label>
												<div class="controls">
													<input type="text" class="span6" id="query" value="数据表操作">
												</div> <!-- /controls -->				
											</div> <!-- /control-group -->								
											@if ( Session::has('message') )
											{{ Session::get('message') }}
											@endif											
											<div class="form-actions">
												<button type="submit" class="btn btn-primary">Save</button> 
												<button class="btn">Cancel</button>
											</div> <!-- /form-actions -->
										</form>
									</fieldset>
								</div>					
								<div class="tab-pane" id="jscontrols">
									<form id="edit-profile2" class="form-vertical">
										<fieldset>
											
                                            
                                            
                                           
                                                                                        
											<div class="control-group">
												<label class="control-label">Alerts</label>
												<div class="controls">
													 <div class="alert">
                                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                                              <strong>Warning!</strong> Best check yo self, you're not looking too good.
                                            </div>
                                            
                                            
                                                <div class="alert alert-success">
                                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                  <strong>Warning!</strong> Best check yo self, you're not looking too good.
                                                </div>
                                            
                                                     
                                                     <div class="alert alert-info">
                                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                                              <strong>Warning!</strong> Best check yo self, you're not looking too good.
                                            </div>
                                            		 
                                                     
                                                     
                                                     	
                                            
                                            
                                            		 
                                                     <div class="alert alert-block">
                                                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                      <h4>Warning!</h4>
                                                      Best check yo self, you're not...
                                                    </div>
												</div> <!-- /controls -->	
                                                
                                                
                                                
                                                
                                                
											</div> <!-- /control-group -->
                                            
                                            
                                            
                                            
                                            <div class="control-group">
												<label class="control-label">Progress Bar</label>
												<div class="controls">
													 <div class="progress">
                                                      <div class="bar" style="width: 60%;"></div>
                                                    </div>
                                                    
                                                    
                                                    <div class="progress progress-striped">
                                                      <div class="bar" style="width: 20%;"></div>
                                                    </div>
                                                    
                                                    
                                                    <div class="progress progress-striped active">
                                                      <div class="bar" style="width: 40%;"></div>
                                                    </div>
												</div> <!-- /controls -->	
											</div> <!-- /control-group -->
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            <div class="control-group">
												<label class="control-label">Accordion</label>
												<div class="controls">
                                                
													 <div class="accordion" id="accordion2">
                                                      <div class="accordion-group">
                                                        <div class="accordion-heading">
                                                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                                            Collapsible Group Item #1
                                                          </a>
                                                        </div>
                                                        <div id="collapseOne" class="accordion-body collapse in">
                                                          <div class="accordion-inner">
                                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="accordion-group">
                                                        <div class="accordion-heading">
                                                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                                            Collapsible Group Item #2
                                                          </a>
                                                        </div>
                                                        <div id="collapseTwo" class="accordion-body collapse">
                                                          <div class="accordion-inner">
                                                            Anim pariatur cliche...
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
												</div> <!-- /controls -->	
											</div> <!-- /control-group -->
                                            
                                            
                                            
                                            
                                            
                                            
                                            <div class="control-group">
												<label class="control-label">Progress Bar</label>
												<div class="controls">
													 <!-- Button to trigger modal -->
                                                    <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
                                                     
                                                    <!-- Modal -->
                                                    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h3 id="myModalLabel">Thank you for visiting EGrappler.com</h3>
                                                      </div>
                                                      <div class="modal-body">
                                                        <p>One fine body…</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                                        <button class="btn btn-primary">Save changes</button>
                                                      </div>
                                                    </div>
												</div> <!-- /controls -->	
											</div> <!-- /control-group -->
                                            
                                         





                                            
                                            
                                            
                                            
                                            
                                          
                                            
                                            
                                            
                                            
                                             <div class="control-group">
												<label class="control-label">Social Buttons</label>
												<div class="controls">
													 <button class="btn btn-facebook-alt"><i class="icon-facebook-sign"></i> Facebook</button>
                                                    <button class="btn btn-twitter-alt"><i class="icon-twitter-sign"></i> Twitter</button>
                                                    <button class="btn btn-google-alt"><i class="icon-google-plus-sign"></i> Google+</button>
                                                    <button class="btn btn-linkedin-alt"><i class="icon-linkedin-sign"></i> Linked In</button>
                                                    <button class="btn btn-pinterest-alt"><i class="icon-pinterest-sign"></i> Pinterest</button>
                                                    <button class="btn btn-github-alt"><i class="icon-github-sign"></i> Github</button>
												</div> <!-- /controls -->	
											</div> <!-- /control-group -->
											
											<br />
											
											<div class="form-actions">
												<button type="submit" class="btn btn-primary">Save</button> <button class="btn">Cancel</button>
                                                <button class="btn btn-info">Info</button>
                                                <button class="btn btn-danger">Danger</button>
                                                <button class="btn btn-warning">Warning</button>
                                                <button class="btn btn-invert">Invert</button>
                                                <button class="btn btn-success">Success</button>
											</div>
										</fieldset>
									</form>
								</div>
								
							</div>
						  
						  
						</div>
						
						
						
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
 

</div> <!-- /main -->

@stop

@section('script')
<script>
	$(document).ready(function(){
    	$('#mainnav li').eq(1).addClass('active').show();
  	});
</script>
@stop