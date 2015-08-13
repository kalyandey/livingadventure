@extends('supplier/app')

@section('title', 'Create New Supplier')

@section('content')

<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
	<div class="page-title">Suppliers</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">
	<li><i class="fa fa-home"></i>&nbsp;<a href="dashboard">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
	<li><i class="fa fa-user"></i>&nbsp;<a href="{{URL::route('supplier_list')}}">Suppliers</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
	<li class="active">Create New Supplier</li>
    </ol>
    <div class="clearfix"></div>
</div>
    
<div class="page-content">
    <div class="row">
	<div class="col-lg-12">
	    <div class="portlet box portlet-grey">
		<div class="portlet-header">
		    <div class="caption">Create New Supplier</div>
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
		    
		    {!! Form::open(array('id'=>'createsupplierfrm', 'class' => 'form-horizontal', 'files'=>true, 'route' => array('supplier_add'))) !!}                                
                                    <div class="form-body pal">
                                        <div class="form-group"><label class="col-md-3 control-label">First Name <span class="required">*</span></label>

                                            <div class="col-md-9">
												{!! Form::text('first_name', '', array('class'=>'required form-control')) !!}
                                            </div>
                                        </div>
                                        <div class="form-group"><label  class="col-md-3 control-label">Last Name <span class="required">*</span></label>

                                            <div class="col-md-9">
					    
												{!! Form::text('last_name', '', array('class'=>'required form-control')) !!}
                                            </div>
                                        </div>
					 <div class="form-group"><label  class="col-md-3 control-label">Email <span class="required">*</span></label>

                                            <div class="col-md-9">
					   
												{!! Form::email('email', '', array('class'=>'required email form-control')) !!}
					   
						
                                            </div>
                                        </div>
					<div class="form-group">
						<label  class="col-md-3 control-label">Phone</label>
							<div class="col-md-9">					  
								{!! Form::text('phone', '' , array('class'=>'form-control')) !!}
							</div>
					</div>
					<div class="form-group">
						<label  class="col-md-3 control-label">Image</label>
							<div class="col-md-9">					  
								{!! Form::file('profileimage', '' , array('class'=>'form-control')) !!}
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
                                                <button type="submit" class="btn btn-primary" >Create</button>
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
