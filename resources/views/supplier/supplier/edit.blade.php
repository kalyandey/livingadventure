@extends('supplier/app')

@section('title', 'Car Type')

@section('content')

<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
	<div class="page-title">Suppliers</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">
	<li><i class="fa fa-home"></i>&nbsp;<a href="dashboard">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
	<li class="active">Update Suppliers</li>
    </ol>
    <div class="clearfix"></div>
</div>
    
<div class="page-content">
    <div class="row">
	<div class="col-lg-12">
	    <div class="portlet box portlet-grey">
		<div class="portlet-header">
		    <div class="caption">Edit Suppliers</div>
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
		    
		   {!! Form::open(array('id'=>'supplier_update_form', 'class' => 'form-horizontal', 'files'=>true, 'route' => array('supplier_edit',$result->id))) !!}                                
					<div class="form-body pal">
						<div class="form-group"><label class="col-md-3 control-label">First Name <span class="required">*</span></label>
							<div class="col-md-9">
								{!! Form::text('first_name', $result->first_name, array('class'=>'required form-control')) !!}
							</div>
						</div>
						<div class="form-group"><label  class="col-md-3 control-label">Last Name <span class="required">*</span></label>

							<div class="col-md-9">
		
								{!! Form::text('last_name',  $result->last_name, array('class'=>'required form-control')) !!}
							</div>
					</div>
					 <div class="form-group">
						<label  class="col-md-3 control-label">Email </label>
							<div class="col-md-9">					   
								{{$result->email}}
							</div>
						</div>
					<div class="form-group">
						<label  class="col-md-3 control-label">Phone</label>
							<div class="col-md-9">					  
								{!! Form::text('phone', $result->phone , array('class'=>'form-control')) !!}
							</div>
					</div>
					<div class="form-group">
						<label  class="col-md-3 control-label">Image</label>
							<div class="col-md-9">
							    @if($result->image != '')
								<image src="{{'/upload/supplierprofile/thumb/' . $result->image}}" alt="" />
							   @endif	
								{!! Form::file('profileimage',  '' , array('class'=>'form-control')) !!}
							</div>
					</div>
					<div class="form-group form-pass"><label class="col-md-3 control-label">Password <span class="required">*</span></label>
                         <div class="col-md-9">
							{!! Form::password('password',  array('class'=>'required form-control')) !!}
                        </div>
					</div>

				    </div>
					<div class="form-actions pal">
						<div class="form-group mbn">
							<div class="col-md-offset-3 col-md-6">
								<button type="submit" class="btn btn-primary" >Update</button>
								<a href="{{URL::route('supplier_list')}}" class="btn default">Cancel</a>
							</div>
						</div>
					</div>
            {!! Form::close() !!}
		  
		</div>
	    </div>
	</div>
    </div>

</div>

@endsection
