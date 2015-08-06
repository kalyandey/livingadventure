@extends('admin/app')

@section('title', 'Login')

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
		<div class="panel profit db mbm">
		    <div class="panel-body"><p class="icon"><i class="icon fa fa-shopping-cart"></i></p><h4 class="value"><span data-counter="" data-start="10" data-end="50" data-step="1" data-duration="0"></span><span>$</span></h4>

			<p class="description">Profit description</p>

			<div class="progress progress-sm mbn">
			    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" class="progress-bar progress-bar-success"><span class="sr-only">80% Complete (success)</span></div>
			</div>
		    </div>
		</div>
	    </div>
	    <div class="col-sm-6 col-md-3">
		<div class="panel income db mbm">
		    <div class="panel-body"><p class="icon"><i class="icon fa fa-money"></i></p><h4 class="value"><span>215</span><span>$</span></h4>

			<p class="description">Income detail</p>

			<div class="progress progress-sm mbn">
			    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" class="progress-bar progress-bar-info"><span class="sr-only">60% Complete (success)</span></div>
			</div>
		    </div>
		</div>
	    </div>
	    <div class="col-sm-6 col-md-3">
		<div class="panel task db mbm">
		    <div class="panel-body"><p class="icon"><i class="icon fa fa-signal"></i></p><h4 class="value"><span>215</span></h4>

			<p class="description">Task completed</p>

			<div class="progress progress-sm mbn">
			    <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;" class="progress-bar progress-bar-danger"><span class="sr-only">50% Complete (success)</span></div>
			</div>
		    </div>
		</div>
	    </div>
	    <div class="col-sm-6 col-md-3">
		<div class="panel visit db mbm">
		    <div class="panel-body"><p class="icon"><i class="icon fa fa-group"></i></p><h4 class="value"><span>128</span></h4>

			<p class="description">Customer Count</p>

			<div class="progress progress-sm mbn">
			    <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" class="progress-bar progress-bar-warning"><span class="sr-only">70% Complete (success)</span></div>
			</div>
		    </div>
		</div>
	    </div>
	</div>
    </div>
	
	    <div class="row">
		    <div class="col-md-6 col-sm-6">
			    <!-- BEGIN PORTLET-->
			    <div class="portlet solid bordered grey-cararra">
				    <div class="portlet-title">
					    <div class="caption">
						    <i class="fa fa-bar-chart-o"></i>Hiring Frequency
					    </div>
					    <div class="actions">
						    <div class="btn-group" data-toggle="buttons">
							    <label class="btn grey-steel btn-sm active">
							    <input type="radio" name="options" class="toggle" id="option1">New</label>
							    <label class="btn grey-steel btn-sm">
							    <input type="radio" name="options" class="toggle" id="option2">Returning</label>
						    </div>
					    </div>
				    </div>
				    <div class="portlet-body">
					    <div id="site_statistics_loading">
						    <img src="" alt="loading"/>
					    </div>
					    <div id="site_statistics_content" class="display-none">
						    <div id="site_statistics" class="chart">
						    </div>
					    </div>
				    </div>
			    </div>
			    <!-- END PORTLET-->
		    </div>
		    <div class="col-md-6 col-sm-6">
			    <!-- BEGIN PORTLET-->
			    <div class="portlet solid grey-cararra bordered">
				    <div class="portlet-title">
					    <div class="caption">
						    <i class="fa fa-bullhorn"></i>Revenue Frequency
					    </div>
					    <div class="actions">
						    <div class="btn-group pull-right">
							    <a href="" class="btn grey-steel btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							    Filter <span class="fa fa-angle-down">
							    </span>
							    </a>
							    <ul class="dropdown-menu pull-right">
								    <li>
									    <a href="javascript:;">
									    Q1 2014 <span class="label label-sm label-default">
									    past </span>
									    </a>
								    </li>
								    <li>
									    <a href="javascript:;">
									    Q2 2014 <span class="label label-sm label-default">
									    past </span>
									    </a>
								    </li>
								    <li class="active">
									    <a href="javascript:;">
									    Q3 2014 <span class="label label-sm label-success">
									    current </span>
									    </a>
								    </li>
								    <li>
									    <a href="javascript:;">
									    Q4 2014 <span class="label label-sm label-warning">
									    upcoming </span>
									    </a>
								    </li>
							    </ul>
						    </div>
					    </div>
				    </div>
				    <div class="portlet-body">
					    <div id="site_activities_loading">
						    <img src="" alt="loading"/>
					    </div>
					    <div id="site_activities_content" class="display-none">
						    <div id="site_activities" style="height: 228px;">
						    </div>
					    </div>
					    <div style="margin: 20px 0 10px 30px">
						    <div class="row">
							    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
								    <span class="label label-sm label-success">
								    Revenue: </span>
								    <h3>$13,234</h3>
							    </div>
							    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
								    <span class="label label-sm label-info">
								    Tax: </span>
								    <h3>$134,900</h3>
							    </div>
							    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
								    <span class="label label-sm label-danger">
								    Shipment: </span>
								    <h3>$1,134</h3>
							    </div>
							    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
								    <span class="label label-sm label-warning">
								    Orders: </span>
								    <h3>235090</h3>
							    </div>
						    </div>
					    </div>
				    </div>
			    </div>
			    <!-- END PORTLET-->
		    </div>
	    </div>

	
</div>


@endsection
