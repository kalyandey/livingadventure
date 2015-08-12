@extends('admin/app')
@section('title', 'Agent Management')
@section('content')
     <!--BEGIN TITLE & BREADCRUMB PAGE-->
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
        <div class="page-title">View Agent Details</div>
    </div>
 <!--For breadcrump-->    
  <ol class="breadcrumb page-breadcrumb pull-right">
   
      <li><i class="">&nbsp;&nbsp;</i><a href="javascript:void(0);"><i class="fa fa-user">                        
				    </i>Agent</a>
	
      </li>&nbsp;&nbsp; > 
    
      <li><i class="">&nbsp;&nbsp;</i><a href="{{ url('/admin/agent_show',$agent_data->id) }}"><i class="fa fa-user">                        
				    </i>Agent Details</a>
	
      </li>
   
  </ol>  
  <!--For breadcrump end-->
    <div class="clearfix"></div>
</div>
<!--END TITLE & BREADCRUMB PAGE-->
<!--BEGIN CONTENT-->
        <div class="page-content">
        <div id="form-layouts" class="row">
        <div class="col-lg-12">
         <div style="background: transparent; border: 0; box-shadow: none !important;" class="pan mtl mbn responsive">
                            <div id="tab-form-seperated" class="tab-pane">
                                <div class="row">
                                    <div class="col-lg-12">
                                        
                                    
                                        
                            <div class="panel panel-yellow portlet box portlet-yellow">
                            <div class="portlet-header">
                                    <div class="caption">Admin Agent Form</div>
                                    <div class="tools">
                                        <i class="fa fa-chevron-up"></i>
                                    </div>
                            </div>
                        <div class="portlet-body panel-body pan">
                        
						<input type="hidden" name="action" value="Process">
                        <div class="form-body">
                        
                        <div class="form-group" style="clear:both;">
                       
                        {!! HTML::decode(Form::label('first_name', '<b>First Name</b>', array('class' => 'col-md-6 control-label'))) !!}

                        <div class="col-md-6">
                        {!! $agent_data->first_name !!}
                                                        
                        </div>
                            
                        </div>
                            <br/>
                        <div class="form-group" style="clear:both;">
                        {!! HTML::decode(Form::label('last_name', '<b>Last Name</b>', array('class' => 'col-md-6 control-label'))) !!}

                        <div class="col-md-6">
                                
                            {!! $agent_data->last_name !!}
                        </div>
                        </div>
                            <br/>
                        <div class="form-group" style="clear:both;">
                        
                        {!! HTML::decode(Form::label('email', '<b>Email Address</b>', array('class' => 'col-md-6 control-label'))) !!}
                            <div class="col-md-6">
                                 <span>{!! $agent_data->email !!}</span> 
                            </div>
                        </div>
                        <br/>
                        

                        <div class="form-group" style="clear:both;">
                            <label  class="col-md-6 control-label"><b>Image Preview</b> </label>
                            <div class="col-md-6">
							    @if($agent_data->image != '' && file_exists(public_path('upload/agentprofile/' .$agent_data->image)))
								<image src="{{'/upload/agentprofile/thumb/' . $agent_data->image}}" alt="" />
                           @else
                                    <img src="{{ asset('backend/images/no_img.jpg') }}" height="60" />
							   
							@endif
							</div>
                        </div>
                            <br/>
                        <div class="form-group" style="clear:both;">
                        
                        {!! HTML::decode(Form::label('phone', '<b>Phone</b> ', array('class' => 'col-md-6 control-label'))) !!}

                            <div class="col-md-6">
                               {!! $agent_data->phone !!}
                               
                            </div>
                        </div>
                                                <div class="form-actions text-right pal">
                           
                            <a href="{{ url('/admin/agent_management') }}"><button type="button" class="btn btn-green">Return</button></a>
                        </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
         </div>
        </div>
        </div>
        </div>
<!--END CONTENT-->
<!--BEGIN CONTENT QUICK SIDEBAR-->

<!--END CONTENT QUICK SIDEBAR-->
@endsection