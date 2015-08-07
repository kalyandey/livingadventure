@extends('admin/app')

@section('title', 'Provider Details')

@section('content')

<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
	<div class="page-title">Providers</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">
	<li><i class="fa fa-home"></i>&nbsp;<a href="dashboard">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
		<li><i class="fa fa-user"></i>&nbsp;<a href="{{URL::route('supplier_list')}}">Suppliers</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
	<li class="active">Provider Details</li>
    </ol>
    <div class="clearfix"></div>
</div>
    
<div class="page-content">
    <div class="row">
	<div class="col-lg-12">
	    <div class="portlet box portlet-grey">
		<div class="portlet-header">
		    <div class="caption">Provider Details</div>
		</div>
		<div class="portlet-body">
		    @if (count($errors) > 0)
		
		    <div class="note note-danger">
			    <h3>Errors!</h3>
				@foreach ($errors as $error)
					<p>{{ $error }}</p>
				@endforeach
		    </div>
		    @endif
			
			<div class="row">
			    <label class="col-md-3 control-label">First Name </label>
			    <div class="col-md-9">
			       {{ucwords($result->first_name)}}
			    </div>
			</div>
			<div class="row">
			    <label class="col-md-3 control-label">First Name </label>
			    <div class="col-md-9">
			       {{ucwords($result->last_name)}}
			    </div>
			</div>
			<div class="row">
			    <label class="col-md-3 control-label">Email</label>
			    <div class="col-md-9">
			       {{$result->email}}
			    </div>
			</div>
			<div class="row">
			    <label class="col-md-3 control-label">Phone </label>
			    <div class="col-md-9">
			       {{$result->phone}}
			    </div>
			</div>
		
			<div class="form-actions pal">
				<div class="form-group mbn">
					<div class="col-md-offset-3 col-md-6">						
						<a href="{{URL::route('supplier_list')}}" class="btn default">Back</a>
					</div>
				</div>
			</div>
			
	    </div>
	</div>
    </div>

</div>

@endsection