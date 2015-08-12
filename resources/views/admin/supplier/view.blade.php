@extends('supplier/app')

@section('title', 'Supplier Details')

@section('content')

<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
	<div class="page-title">Suppliers</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">
	<li><i class="fa fa-home"></i>&nbsp;<a href="{{URL::route('dashboard')}}">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
		<li><i class="fa fa-user"></i>&nbsp;<a href="{{URL::route('supplier_master_list')}}">Suppliers</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
	<li class="active">Supplier Details</li>
    </ol>
    <div class="clearfix"></div>
</div>
    
<div class="page-content">
    <div class="row">
	<div class="col-lg-12">
	    <div class="portlet box portlet-grey">
		<div class="portlet-header">
		    <div class="caption">Supplier Details</div>
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
			    <label class="col-md-3 control-label"><b>Profile Image</b></label>
			    <div class="col-md-9">
				   @if($result->image != '')
					<image src="{{'/upload/supplierprofile/thumb/' . $result->image}}" alt="" />
				   @endif			       
			    </div>
			</div>
				<br/>
			<div class="row">
			    <label class="col-md-3 control-label"><b>First Name</b> </label>
			    <div class="col-md-9">				  
			       {{ucwords($result->first_name)}}
			    </div>
			</div>
				<br/>
			<div class="row">
			    <label class="col-md-3 control-label"><b>Last Name</b> </label>
			    <div class="col-md-9">
			       {{ucwords($result->last_name)}}
			    </div>
			</div>
				<br/>
			<div class="row">
			    <label class="col-md-3 control-label"><b>Email</b></label>
			    <div class="col-md-9">
			       {{$result->email}}
			    </div>
			</div>
				<br/>
			<div class="row">
			    <label class="col-md-3 control-label"><b>Phone</b> </label>
			    <div class="col-md-9">
			       {{$result->phone}}
			    </div>
			</div>
				<br/>
			<div class="form-actions text-right pal">
                           
                <a href="{{URL::route('supplier_master_list')}}"><button type="button" class="btn btn-green">Return</button></a>
            </div>
			<!--<div class="form-actions pal">
				<div class="form-group mbn">
					<div class="col-md-offset-3 col-md-6">						
						<a href="{{URL::route('supplier_master_list')}}" class="btn default">Back</a>
					</div>
				</div>
			</div>-->
			
	    </div>
	</div>
    </div>

</div>

@endsection