@extends('admin/app')

@section('title', 'Country List')

@section('content')

<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
	<div class="page-title">Country</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">
	<li><i class="fa fa-home"></i>&nbsp;<a href="{{URL::route('dashboard')}}">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
	<li class="active">Country Details</li>
    </ol>
    <div class="clearfix"></div>
</div>
    
<div class="page-content">
    <div class="row">
	<div class="col-lg-12">
	    @if(Session::has('succ_msg'))
	    <div class="note note-success">
		   <h3>Success!</h3>
		    <p>{{ Session::get('succ_msg') }}</p>
	    </div>	    
	    @endif
	    <div class="portlet portlet-white">
		<div class="portlet-header pam mbn">
		    <div class="caption">Country Details</div>
		    
		</div>
		<div class="portlet-body pan">
		
		   <div class="row">
			<div class="col-lg-4">
			       <label class="col-md-6 control-label"><b>Country Name</b> </label>
			       <div class="col-md-6">				  
				  {{ucwords($result->country_name)}}
			       </div>
		       </div>
			<div class="col-lg-4">
			       <label class="col-md-6 control-label"><b>Country code</b> </label>
			       <div class="col-md-6">				  
				  {{ucwords($result->country_code)}}
			       </div>
		       </div>
			<div class="col-lg-4">
			       <label class="col-md-6 control-label"><b>Country continent</b> </label>
			       <div class="col-md-6">				  
				  {{ucwords($result->continent)}}
			       </div>
		       </div>
		    </div>
		    
		</div>
	    </div>
	</div>
    </div>

</div>

@endsection
