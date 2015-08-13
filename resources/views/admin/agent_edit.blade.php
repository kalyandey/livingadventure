@extends('admin/app')
@section('title', 'Agent Management')
@section('content')
     <!--BEGIN TITLE & BREADCRUMB PAGE-->
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
        <div class="page-title">Edit Agent</div>
    </div>
 <!--For breadcrump-->    
  <ol class="breadcrumb page-breadcrumb pull-right">
   
      <li><i class="">&nbsp;&nbsp;</i><a href="javascript:void(0);"><i class="fa fa-user">                        
				    </i>Agent</a>
	
      </li>&nbsp;&nbsp; > 
    
      <li><i class="">&nbsp;&nbsp;</i><a href="{{ url('/admin/agent_edit',$agent_data->id) }}"><i class="fa fa-user">                        
				    </i>Agent Edit</a>
	
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
                                        
                                      @if (count($errors) > 0)
		
                                    <div class="alert alert-danger">
                                        <h3>Errors!</h3>
                                        @foreach ($errors->all() as $error)
                                            <p>{{ $error }}</p>
                                        @endforeach
                                    </div>
                                    @endif  
                                        
                                        
                                        
                            <div class="panel panel-yellow portlet box portlet-yellow">
                            <div class="portlet-header">
                                    <div class="caption">Admin Agent Form</div>
                                    <div class="tools">
                                        <i class="fa fa-chevron-up"></i>
                                    </div>
                            </div>
                        <div class="portlet-body panel-body pan">
                        {!! Form::open(array('route' => array('agent_update',$agent_data->id),'files'=>true, 'class' => 'form-horizontal form-seperated')) !!}
						<input type="hidden" name="action" value="Process">
                        <div class="form-body">
                        
                        <div class="form-group">
                       
                        {!! HTML::decode(Form::label('first_name', 'First Name <span class="require">*</span>', array('class' => 'col-md-3 control-label'))) !!}

                        <div class="col-md-4">
                        {!! Form::text('first_name', $agent_data->first_name , array('class' => 'form-control required first_name','placeholder' => 'First Name')) !!}
                                                        
                        </div>
                        </div>
                        <div class="form-group">
                        {!! HTML::decode(Form::label('last_name', 'Last Name <span class="require">*</span>', array('class' => 'col-md-3 control-label'))) !!}

                        <div class="col-md-4">
                                
                            {!! Form::text('last_name', $agent_data->last_name , array('class' => 'form-control required last_name','placeholder' => 'Last Name')) !!}
                        </div>
                        </div>
                        <div class="form-group">
                        
                        {!! HTML::decode(Form::label('email', 'Email Address', array('class' => 'col-md-3 control-label'))) !!}
                            <div class="col-md-4">
                                 <span>{!! $agent_data->email !!}</span> 
                            </div>
                        </div>
                        <div class="form-group">
                        
                        {!! HTML::decode(Form::label('password', 'Password', array('class' => 'col-md-3 control-label'))) !!}
                            <div class="col-md-4">
                                {!! Form::password('password' , array('class' => 'form-control required password','placeholder' => 'Password')) !!}
                                
                            </div>
                        </div>
                        
                        <div class="form-group">
                        
                        {!! HTML::decode(Form::label('user_image', 'Upload Picture ', array('class' => 'col-md-3 control-label'))) !!}

                            <div class="col-md-4">
                               {!! Form::file('user_image', array('class' => 'form-control')) !!}
                               <!--&nbsp;<strong>[image size maximum 1200x800 | extension must be .jpg or .jpeg or .gif or .png]</strong>-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-3 control-label">Image Preview </label>
                            <div class="col-md-4">
							    @if($agent_data->image != '' && file_exists(public_path('upload/agentprofile/' .$agent_data->image)))
								<image src="{{'/upload/agentprofile/thumb/' . $agent_data->image}}" alt="" />
                           @else
                                    <img src="{{ asset('backend/images/no_img.jpg') }}" height="60" />
							   
							@endif
							</div>
                        </div>
                        <div class="form-group">
                        
                        {!! HTML::decode(Form::label('phone', 'Phone ', array('class' => 'col-md-3 control-label'))) !!}

                            <div class="col-md-4">
                               {!! Form::text('phone', $agent_data->phone , array('class' => 'form-control')) !!}
                               
                            </div>
                        </div>
                        
                                                        
                        <div class="form-actions text-right pal">
                            <button type="submit" class="btn btn-primary">Edit Agent User</button>
                            &nbsp;
                            <a href="{{ url('/admin/agent_management') }}"><button type="button" class="btn btn-green">Return</button></a>
                        </div>
                       {!! Form::close() !!}
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