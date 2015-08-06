@extends('admin/app')

@section('title', 'Car Type')

@section('content')

<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
	<div class="page-title">Car Type</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">
	<li><i class="fa fa-home"></i>&nbsp;<a href="dashboard">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
	<li class="active">Update users</li>
    </ol>
    <div class="clearfix"></div>
</div>
    
<div class="page-content">
    <div class="row">
	<div class="col-lg-12">
	    <div class="portlet box portlet-grey">
		<div class="portlet-header">
		    <div class="caption">New Car Type</div>
		</div>
		<div class="portlet-body">
		    @if (count($errors) > 0)
		    
		    <div class="note note-danger">
			    <h3>Errors!</h3>
				@foreach ($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
		    </div>
		    @endif
		    
		    {!! Form::open(array('class' => 'form-horizontal form-separated', 'route' => array('car_type_edit',$result->id))) !!}
		      
		    
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			<input type="hidden" name="uid" value="{{{ $result->id }}}" />
			<div class="form-body">
			    <div class="form-group">
				<label class="col-md-3 control-label">Car Type Name <span class="require">*</span></label>
				<div class="col-md-9">
				    <input type="text" class="form-control" name="type" id="type" value="{{$result->type}}">				     
				</div>
			    </div>
			    
			    <div class="form-actions">
				<div class="col-md-offset-3 col-md-9">
				{!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
				<a href="{{URL::route('car_types')}}" class="btn btn-default">Cancel</a>
				</div
			    </div>
			</div>
			{!! Form::close() !!}
		  
		</div>
	    </div>
	</div>
    </div>

</div>

@endsection
