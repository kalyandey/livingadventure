@extends('supplier/app')

@section('title', 'Create Supplier')

@section('content')
	
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
	<div class="page-title">Create Supplier</div>
    </div>
    
    <div class="clearfix"></div>
</div>
<div class="page-content">
	
<div class="row">
                        <div class="col-lg-12">
			@if(Session::has('errmsg'))
			    <div class="alert alert-danger"><ul>
			    
			    @foreach (Session::get('errmsg')[0] as $error)
				    <p>{{ $error }}</p>
			    @endforeach
			    </ul></div>
			
			@endif
                        <div class="panel panel-yellow">
                            <div class="panel-heading"></div>
                            <div class="panel-body pan">
			    {!! Form::open(array('id'=>'createsupplierfrm', 'class' => 'form-horizontal', 'files'=>true, 'route' => array('add_supplier'))) !!}
                                
                                    <div class="form-body pal">
                                        <div class="form-group"><label class="col-md-3 control-label">First Name <span>*</span></label>

                                            <div class="col-md-9">
					   
						{!! Form::text('first_name', '', array('class'=>'required form-control')) !!}
                                            </div>
                                        </div>
                                        <div class="form-group"><label  class="col-md-3 control-label">Last Name</label>

                                            <div class="col-md-9">
					    
						{!! Form::text('last_name', '', array('class'=>'required form-control')) !!}
                                            </div>
                                        </div>
					 <div class="form-group"><label  class="col-md-3 control-label">Email</label>

                                            <div class="col-md-9">
					   
					      {!! Form::email('email', '', array('class'=>'required email form-control')) !!}
					   
						
                                            </div>
                                        </div>
					<div class="form-group"><label  class="col-md-3 control-label">Phone</label>

                                            <div class="col-md-9">
					  
					   {!! Form::text('phone', '' , array('class'=>'form-control')) !!}
                                            </div>
                                        </div>
					<div class="form-group form-pass"><label class="col-md-3 control-label">Password</label>

                                            <div class="col-md-9">
					    
					   {!! Form::password('password',  array('class'=>'required form-control')) !!}
                                            </div>
                                        </div>


				    </div>
                                    <div class="form-actions pal">
                                        <div class="form-group mbn">
                                            <div class="col-md-offset-3 col-md-6">
                                                <button type="submit" class="btn btn-primary" >Create</button>
                                            </div>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

</div>
	
</div>
<script>
@if(Session::has('successmsg'))
    var  succ_msg = '{{ Session::get('successmsg') }}';
     $(function(){
        if (succ_msg) {
              $.scojs_message(succ_msg, $.scojs_message.TYPE_OK);
        }
    });
@endif
</script>

@endsection
