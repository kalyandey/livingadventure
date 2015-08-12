@extends('agent/app')

@section('title', 'Login')

@section('content')
	
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
	<div class="page-title">Profile</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">	
	<li class="active">Profile</li>
    </ol>
    <div class="clearfix"></div>
</div>
<div class="page-content">
	
<div class="row">
                        <div class="col-lg-12">
                        <div class="panel panel-yellow">
                            <div class="panel-heading"></div>
                            <div class="panel-body pan">
			    {!! Form::open(array('id'=>'profilefrm', 'class' => 'form-horizontal profile_form', 'files'=>true, 'route' => array('agent_profile'))) !!}
                                
                                    <div class="form-body pal">
                                        <div class="form-group"><label class="col-md-3 control-label">First Name</label>

                                            <div class="col-md-9">
					    <label class="control-label textval">
                                                {{ $record['first_name'] }}
					    </label>
						
						{!! Form::text('first_name', $record['first_name'], array('required', 'class'=>'form-control')) !!}
                                            </div>
                                        </div>
                                        <div class="form-group"><label  class="col-md-3 control-label">Last Name</label>

                                            <div class="col-md-9">
					    <label  class="control-label textval">
					      {{ $record['last_name'] }}
					    </label>
						{!! Form::text('last_name', $record['last_name'], array('required', 'class'=>'form-control')) !!}
                                            </div>
                                        </div>
					 <div class="form-group"><label  class="col-md-3 control-label">Email</label>

                                            <div class="col-md-9">
					    <label  class="control-label">
					      {{ $record['email'] }}
					    </label>
						
                                            </div>
                                        </div>
					<div class="form-group"><label  class="col-md-3 control-label">Phone</label>

                                            <div class="col-md-9">
					    <label  class="control-label textval">
					      {{ $record['phone'] }}
					    </label>
					   {!! Form::text('phone', $record['phone'], array('class'=>'form-control')) !!}
                                            </div>
                                        </div>
					<div class="form-group form-pass"><label class="col-md-3 control-label">Password</label>

                                            <div class="col-md-9">
					    
					   {!! Form::password('password',  array('class'=>'form-control')) !!}
                                            </div>
                                        </div>


				    </div>
                                    <div class="form-actions pal">
                                        <div class="form-group mbn">
                                            <div class="col-md-offset-3 col-md-6">
                                                <button type="submit" class="btn btn-primary update_profile" >Update Profile</button>
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
@if(isset($successmsg))
    var  succ_msg = '{{ $successmsg }}';
     $(function(){
        if (succ_msg) {
              $.scojs_message(succ_msg, $.scojs_message.TYPE_OK);
        }
    });
@endif
</script>

@endsection
