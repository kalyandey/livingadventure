@extends('admin/app')

@section('title', 'Account Settings')

@section('content')
	
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
	<div class="page-title">Account Settings</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">	
	<li class="active">Account Settings</li>
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
		    @if ($errors->has('first_name'))<li>{!!$errors->first('first_name')!!}</li>@endif
		    @if ($errors->has('last_name'))<li>{!!$errors->first('last_name')!!}</li>@endif
		    @if ($errors->has('email'))<li>{!!$errors->first('email')!!}</li>@endif
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
		<div class="panel-heading">Account Settings</div>
		<div class="panel-body pan">		    
		    {!! Form::open(array('url' => 'admin/account_settings', 'class' => 'form-horizontal')) !!}
			<div class="form-body pal">
			    <div class="form-group">
				{!! HTML::decode(Form::label('first_name', 'First Name <span class="require">*</span>', array('class' => 'col-md-3 control-label'))) !!}
				<div class="col-md-9">{!! Form::text('first_name', $settings->first_name, array('class' => 'form-control')) !!}</div>
			    </div>
			    <div class="form-group">
				{!! HTML::decode(Form::label('last_name', 'Last Name <span class="require">*</span>', array('class' => 'col-md-3 control-label'))) !!}
				<div class="col-md-9">{!! Form::text('last_name', $settings->last_name, array('class' => 'form-control')) !!}</div>
			    </div>
			    <div class="form-group">
				{!! HTML::decode(Form::label('email', 'Email Address <span class="require">*</span>', array('class' => 'col-md-3 control-label'))) !!}
				<div class="col-md-9">{!! Form::text('email', $settings->email, array('class' => 'form-control')) !!}</div>
			    </div>			    
			    <div class="form-group">
				{!! HTML::decode(Form::label('phone', 'phone', array('class' => 'col-md-3 control-label'))) !!}
				<div class="col-md-9">{!! Form::text('phone', $settings->phone, array('class' => 'form-control')) !!}</div>
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
