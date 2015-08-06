@extends('admin/app')

@section('title', 'Account Settings')

@section('content')
	
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
	<div class="page-title">Change Password</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">	
	<li class="active">Change Password</li>
    </ol>
    <div class="clearfix"></div>
</div>
<div class="page-content">
    <div class="row">
	<div class="col-lg-12">
	    @if(Session::has('errors'))
            
	    <div class="alert alert-danger">
		<strong>Errors!!</strong><br><br>
		<ul>
		    @if ($errors->has('current_password'))<li>{!!$errors->first('current_password')!!}</li>@endif
		    @if ($errors->has('new_password'))<li>{!!$errors->first('new_password')!!}</li>@endif
		    @if ($errors->has('confirm_password'))<li>{!!$errors->first('confirm_password')!!}</li>@endif
		</ul>
	    </div>
	    @endif
	    
	    @if(Session::has('error'))
            
	    <div class="alert alert-danger">
		<strong>Errors!!</strong><br><br>
		<ul>
		   <li>{{ Session::get('error') }}</li>
		</ul>
	    </div>
	    @endif
	    
	    @if(Session::has('success'))
            
	    <div class="alert alert-success">
		    <strong>Success!</strong><br><br>
		    <ul>
			<li>{{ Session::get('success') }}</li>
		    </ul>
	    </div>
	    @endif
	    
	    <div class="panel panel-blue">
		<div class="panel-heading">Change Password</div>
		<div class="panel-body pan">		    
		    {!! Form::open(array('url' => 'admin/change_password', 'class' => 'form-horizontal')) !!}
			<div class="form-body pal">
			    <div class="form-group">
				{!! HTML::decode(Form::label('current_password', 'Current Password <span class="require">*</span>', array('class' => 'col-md-3 control-label'))) !!}
				<div class="col-md-9">{!! Form::text('current_password', '', array('class' => 'form-control')) !!}</div>
			    </div>
			    <div class="form-group">
				{!! HTML::decode(Form::label('new_password', 'new Password <span class="require">*</span>', array('class' => 'col-md-3 control-label'))) !!}
				<div class="col-md-9">{!! Form::text('new_password', '', array('class' => 'form-control')) !!}</div>
			    </div>
			    <div class="form-group">
				{!! HTML::decode(Form::label('new_password_confirmation', 'Confirm Password <span class="require">*</span>', array('class' => 'col-md-3 control-label'))) !!}
				<div class="col-md-9">{!! Form::text('new_password_confirmation', '', array('class' => 'form-control')) !!}</div>
			    </div>
			</div>
			<div class="form-actions top none-bg">
			    <div class="col-md-offset-3 col-md-9">
				<button type="submit" class="btn btn-primary">Send</button>				
			    </div>
			</div>
		    {!! Form::close() !!}
		</div>
	    </div>
	</div>
    </div>
</div>


@endsection
