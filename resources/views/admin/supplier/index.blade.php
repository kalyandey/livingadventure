@extends('admin/app')

@section('title', 'Suppliers List')

@section('content')

<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
	<div class="page-title">Suppliers</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">
	<li><i class="fa fa-home"></i>&nbsp;<a href="{{URL::route('dashboard')}}">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
	<li class="active">Suppliers List</li>
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
		    <div class="caption">Suppliers List</div>
		    <div class="actions">
				<a class="btn green" href="{{URL::route('supplier_master_add')}}">Create New Supplier</a>
		    </div>
		</div>
		<div class="portlet-body pan">
		   
		    
		    <table class="table table-hover table-striped table-bordered table-advanced tablesorter mbn">
			<thead>
			<tr>
			    <th >Name</th>			 
			    <th>Email</th>
				<th>Phone</th>
				<th>Status</th>
				<th>Actions</th>
			</tr>
			</thead>
			<tbody>
			@if($result->count() > 0)
			    @foreach($result AS $r)
				<tr>
				    <td>{{ucwords($r->first_name).' '.ucwords($r->last_name)}}</td>				   					
					<td>{{$r->email}}</td>
					<td>{{$r->phone}}</td>
					<td>{{$r->status}}</td>
					<td>
					
					<a href="{{URL::route('supplier_master_show',$r->id)}}" class="tablectrl_small bDefault tipS" title="Edit">
						<button type="button" class="btn btn-info"><i class="fa fa-list-alt"></i>
						</button>
					</a>
						 &nbsp;
					<a href="{{URL::route('supplier_master_edit',$r->id)}}" class="tablectrl_small bDefault tipS" title="Edit">
						<button type="button" class="btn btn-info"><i class="fa fa-edit"></i>
						</button>
					</a>
						 &nbsp;
					
						<a href="{{URL::route('supplier_master_delete',$r->id)}}" class="tablectrl_small bDefault tipS" title="Remove" onclick="return confirm('Are you sure?');">
						<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i>
						</button>
						</a>
                                                        
					
					
						<!--<a href="{{URL::route('supplier_master_show',$r->id)}}" class="btn-sm btn-default">View</a>
						<a href="{{URL::route('supplier_master_edit',$r->id)}}" class="btn-sm btn-default">Edit</a>
						<a href="{{URL::route('supplier_master_delete',$r->id)}}" onclick="return confirm('Are you sure!');" class="btn-sm btn-default">Delete</a>-->
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
