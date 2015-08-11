@extends('admin/applogin')

@section('title', 'Login')

@section('content')

<div class="page-form"> 
    
    {!! Form::open(array('url' => 'admin', 'class' => 'form')) !!}	
        <div class="header-content"><h1>Admin Log In</h1></div>
	
	@if(Session::has('errorMessage'))            
	<div class="alert alert-danger">
	    <ul>
		<li>{{ Session::get('errorMessage') }}</li>
	    </ul>
	</div>
	@endif
	
	@if(Session::has('message'))
	<div class="alert alert-success">
	    <ul>
		<li>{{ Session::get('message') }}</li>
	    </ul>
	</div>
	@endif
	
        <div class="body-content">
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-user"></i><input type="text" autocomplete="off" placeholder="Email Address" value="{{$admin_email}}" name="admin_email" id="admin_email" class="form-control"></div>
            </div>
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-key"></i><input type="password" autocomplete="off" placeholder="Password" value="{{$admin_password}}" name="admin_password" id="admin_password" class="form-control"></div>
            </div>
            <div class="form-group pull-left">
                <div class="checkbox-list"><label><input type="checkbox" name="remember_login" @if($admin_email) checked='checked' @endif id="remember_login" value="1">&nbsp;
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
