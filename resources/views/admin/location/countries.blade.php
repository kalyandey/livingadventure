@extends('admin/app')

@section('title', 'Country List')

@section('content')

<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
	<div class="page-title">Country</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">
	<li><i class="fa fa-home"></i>&nbsp;<a href="{{URL::route('dashboard')}}">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
	<li class="active">Country List</li>
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
		    <div class="caption">Country List</div>
		    
		</div>
		<div class="portlet-body pan">
		   
		    
		    <table class="table table-hover table-striped table-bordered table-advanced tablesorter mbn">
			<thead>
			<tr>
			    <th >Name</th>			 
			    <th>Code</th>
				
				<th>Is Europe</th>
				<th>Actions</th>
			</tr>
			</thead>
			<tbody>
			@if($result->count() > 0)
			    @foreach($result AS $r)
				<tr>
				    <td>{{ucwords($r->country_name)}}</td>				   					
					<td>{{$r->country_code}}</td>
					<td>@if($r->active=='1') {{ 'Yes' }} @else {{ 'No' }} @endif</td>
					<td>
					
					<a href="{{URL::route('country_master_details',$r->id)}}" class="tablectrl_small bDefault tipS" title="View Details">
						<button type="button" class="btn btn-info"><i class="fa fa-list-alt"></i>
						</button>
					</a>
					</td>
				</tr>
			    @endforeach
			@else				
				<tr><td colspan="5" align="center">Record not found</td></tr>
			@endif			
			
			</tbody>
		    </table>
		    <div class="pagination-panel">
		    {!! $result->render() !!}
		    </div>
		</div>
	    </div>
	</div>
    </div>

</div>

@endsection
