@extends('admin/app')

@section('title', 'Car Types')

@section('content')

<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
	<div class="page-title">Car Types</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">
	<li><i class="fa fa-home"></i>&nbsp;<a href="dashboard">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
	<li class="active">Car Types</li>
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
		    <div class="caption">Car Types List</div>
		    <div class="actions">
			
		    </div>
		</div>
		<div class="portlet-body pan">
		   
		    
		    <table class="table table-hover table-striped table-bordered table-advanced tablesorter mbn">
			<thead>
			<tr>
			    <th >Type</th>			 
			    <th>Actions</th>
			</tr>
			</thead>
			<tbody>
			@if($result->count() > 0)
			    @foreach($result AS $r)
				<tr>
				    <td></td>				   
				    <td>					
					<a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp;
					    Edit
					</a>
					
				    </td>
				</tr>
			    @endforeach
			@endif			
			
			</tbody>
		    </table>
		    <div class="pagination-panel">
		    {{ $result->render() }}
		    </div>
		</div>
	    </div>
	</div>
    </div>

</div>

@endsection
