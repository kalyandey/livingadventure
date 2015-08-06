@extends('admin/app')

@section('title', 'Site Settings')

@section('content')
	
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
	<div class="page-title">Site Settings</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">	
	<li class="active">Site Settings</li>
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
		    @if ($errors->has('site_name'))<li>{!!$errors->first('site_name')!!}</li>@endif
		    @if ($errors->has('default_page_title'))<li>{!!$errors->first('default_page_title')!!}</li>@endif
		    @if ($errors->has('default_meta_keywords'))<li>{!!$errors->first('default_meta_keywords')!!}</li>@endif
		    @if ($errors->has('default_meta_description'))<li>{!!$errors->first('default_meta_description')!!}</li>@endif
		    @if ($errors->has('contact_email'))<li>{!!$errors->first('contact_email')!!}</li>@endif
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
		<div class="panel-heading">Site Settings</div>
		<div class="panel-body pan">		    
		    {!! Form::open(array('url' => 'admin/site_settings', 'class' => 'form-horizontal')) !!}
			<div class="form-body pal">
			    <div class="form-group">
				{!! HTML::decode(Form::label('site_name', 'Site Name <span class="require">*</span>', array('class' => 'col-md-3 control-label'))) !!}
				<div class="col-md-9">{!! Form::text('site_name', $settings->site_name, array('class' => 'form-control')) !!}</div>
			    </div>
			    <div class="form-group">
				{!! HTML::decode(Form::label('default_page_title', 'Default Page Title <span class="require">*</span>', array('class' => 'col-md-3 control-label'))) !!}
				<div class="col-md-9">{!! Form::text('default_page_title', $settings->default_page_title, array('class' => 'form-control')) !!}</div>
			    </div>
			    <div class="form-group">
				{!! HTML::decode(Form::label('default_meta_keywords', 'Default Meta Keywords <span class="require">*</span>', array('class' => 'col-md-3 control-label'))) !!}
				<div class="col-md-9">{!! Form::textarea('default_meta_keywords', $settings->default_meta_keywords, array('class' => 'form-control')) !!}</div>
			    </div>
			    <div class="form-group">
				{!! HTML::decode(Form::label('default_meta_description', 'Default Meta Description <span class="require">*</span>', array('class' => 'col-md-3 control-label'))) !!}
				<div class="col-md-9">{!! Form::textarea('default_meta_description', $settings->default_meta_description, array('class' => 'form-control')) !!}</div>
			    </div>
			    <div class="form-group">
				{!! HTML::decode(Form::label('contact_email', 'Contact Email <span class="require">*</span>', array('class' => 'col-md-3 control-label'))) !!}
				<div class="col-md-9">{!! Form::text('contact_email', $settings->contact_email, array('class' => 'form-control')) !!}</div>
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
