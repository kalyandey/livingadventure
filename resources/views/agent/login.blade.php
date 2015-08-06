
@extends('agent/applogin')
@section('title', 'Login')

@section('content')

<div class="page-form"> 

    {!! Form::open(array('route' => 'agent_login', 'class' => 'form')) !!}	
        <div class="header-content"><h1>Agent Log In</h1></div>
	
	@if(Session::has('message'))
	    <div class="alert alert-danger"><ul>
	    @foreach (Session::get('message') as $error)
				<li>{{ $error }}</li>
			@endforeach
	    </ul></div>

	@endif
        <div class="body-content">
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-user"></i><input type="text" autocomplete="off" placeholder="Email Address" value="{{$agent_email}}" name="agent_email" id="agent_email" class="form-control"></div>
            </div>
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-key"></i><input type="password" autocomplete="off" placeholder="Password" value="{{$agent_password}}" name="agent_password" id="agent_password" class="form-control"></div>
            </div>
            <div class="form-group pull-left">
                <div class="checkbox-list"><label><input type="checkbox" name="remember_login" @if($agent_email) checked='checked' @endif id="remember_login" value="1">&nbsp;
                    Keep me signed in</label></div>
            </div>
            <div class="form-group pull-right">
                <button type="submit" class="btn btn-success">Log In
                    &nbsp;<i class="fa fa-chevron-circle-right"></i></button>
            </div>
            <div class="clearfix"></div>            
            <hr>
        </div>
    {!! Form::close() !!}
</div>

@endsection
