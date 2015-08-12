@extends('admin/app')

@section('title', 'Dashboard')

@section('content')
	
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
	<div class="page-title">Dashboard</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">	
	<li class="active">Dashboard</li>
    </ol>
    <div class="clearfix"></div>
</div>
<div class="page-content">
    <div id="tab-general">	
	<div id="sum_box" class="row mbl">
	    <div class="col-sm-6 col-md-3">
		<div class="panel visit db mbm">
		    <div class="panel-body"><p class="icon"><i class="icon fa fa-group"></i></p><h4 class="value"><span>128</span></h4>
			<p class="description">Agents Count</p>
		    </div>
		</div>
	    </div>
	    <div class="col-sm-6 col-md-3">
		<div class="panel visit db mbm">
		    <div class="panel-body"><p class="icon"><i class="icon fa fa-group"></i></p><h4 class="value"><span>128</span></h4>
			<p class="description">Suppliers Count</p>
		    </div>
		</div>
	    </div>
	</div>
    </div>
</div>


@endsection
