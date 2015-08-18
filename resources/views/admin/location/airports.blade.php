@extends('admin/app')

@section('title', 'Country List')

@section('content')

<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
	<div class="page-title">Airport</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">
	<li><i class="fa fa-home"></i>&nbsp;<a href="{{URL::route('dashboard')}}">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
	<li class="active">Airport List</li>
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
		    <div class="caption">Airport List</div>
		    
		</div>
		<div class="portlet-body pan">
		   
		    
		    <table class="table table-hover table-striped table-bordered table-advanced tablesorter mbn">
			<thead class="warning">
			<tr>
			    <th>Country Code</th>
                            <th>Country Name</th>
                            <th>City Name</th>
			    <th>Airport Name</th>			 
			    <th>Airport Code</th>
			    <th>Status</th>
                            
			</tr>
			</thead>
			<tbody>
			@if($result->count() > 0)
			    @foreach($result AS $r)
				<tr class="warning">
					<td>{{$r->country_code}}</td>
                                        <td>{{$r->country_name}}</td>
                                        <td>@if($r->city_name=='') {{ 'N/A' }} @else {{ $r->city_name }} @endif
                                        </td>
                                        <td>{{ucwords($r->airport_name)}}</td>				   					
					<td>{{$r->airport_code}}</td>
					<td>@if($r->active=='1') {{ 'Active' }} @else {{ 'Inactive' }} @endif
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
