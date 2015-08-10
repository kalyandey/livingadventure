<!DOCTYPE html>
<html lang="en">
<head>	
	<title>Administrator Panel  - @yield('title') </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
	<link rel="shortcut icon" href="images/icons/favicon.ico">
	<link rel="apple-touch-icon" href="images/icons/favicon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
	<!--Loading bootstrap css-->
	<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
	<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
	<link type="text/css" rel="stylesheet" href="{{ asset('/backend/vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('/backend/vendors/font-awesome/css/font-awesome.min.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('/backend/vendors/bootstrap/css/bootstrap.min.css') }}">
	<!--LOADING STYLESHEET FOR PAGE-->
	<link type="text/css" rel="stylesheet" href="{{ asset('/backend/vendors/intro.js/introjs.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('/backend/vendors/calendar/zabuto_calendar.min.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('/backend/vendors/sco.message/sco.message.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('/backend/vendors/intro.js/introjs.css') }}">
	
	<link href="{{ asset('/backend/vendors/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('/backend/css/components.css') }}" id="style_components" rel="stylesheet" type="text/css"/>
	
	<!--Loading style vendors-->
	<link type="text/css" rel="stylesheet" href="{{ asset('/backend/vendors/animate.css/animate.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('/backend/vendors/jquery-pace/pace.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('/backend/vendors/iCheck/skins/all.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('/backend/vendors/jquery-notific8/jquery.notific8.min.css') }}">
	<!--Loading style-->
	<link type="text/css" rel="stylesheet" href="{{ asset('/backend/css/themes/style1/orange-blue.css') }}" class="default-style">
	<link type="text/css" rel="stylesheet" href="{{ asset('/backend/css/themes/style1/orange-blue.css') }}" id="theme-change" class="style-change color-change">
	<link type="text/css" rel="stylesheet" href="{{ asset('/backend/css/style-responsive.css') }}">
	
	<link type="text/css" rel="stylesheet" href="{{ asset('/backend/css/bootstrap-datetimepicker.min.css') }}">
	
</head>
<body>
<div>   
    <!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP--><!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="/agent/index" class="navbar-brand"><span class="fa fa-rocket">vascript:;</span><span class="logo-text">Living Adventure</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main">
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle">
			<span class="hidden-xs">{{ Session::get('BACKEND_NAME') }}</span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="{{URL::route('agent_profile')}}"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="{{ URL::route('agent_logout') }}"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--BEGIN MODAL CONFIG PORTLET-->
        <div id="modal-config" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                        <h4 class="modal-title">Modal title</h4></div>
                    <div class="modal-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie. Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor vitae quam dictum
                        condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut ultricies felis.</p></div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--END MODAL CONFIG PORTLET--></div>
	<!--END TOPBAR-->
	<div id="wrapper"><!--BEGIN SIDEBAR MENU-->
	    <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
		<div class="sidebar-collapse menu-scroll">
		    <ul id="side-menu" class="nav">
			<li class="user-panel">
			    

			    <div class="info"><p>{{ Session::get('BACKEND_ACCESS_FNAME') }}</p>
				<ul class="list-inline list-unstyled">
				    <li><a href="{{URL::route('agent_profile')}}" data-hover="tooltip" title="Profile"><i class="fa fa-user"></i></a></li>				    
				    <li><a href="{{ URL::route('agent_logout') }}" data-hover="tooltip" title="Logout"><i class="fa fa-sign-out"></i></a></li>

				</ul>
			    </div>
			    <div class="clearfix"></div>
			</li>

		    </ul>
		</div>
	    </nav>
	    <!--END SIDEBAR MENU-->
	    <!--BEGIN PAGE WRAPPER-->
	    <div id="page-wrapper">
		    @yield('content')
	    </div>
	    <!--BEGIN FOOTER-->
	    <div id="footer">
		<div class="copyright">{{date("Y")}} &copy; Admin Panel</div>
	    </div>
	    <!--END FOOTER-->
	    <!--END PAGE WRAPPER-->
	</div>
</div>


	<!-- Scripts -->
<script src="{{ asset('/backend/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('/backend/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('/backend/js/jquery-ui.js') }}"></script>
<!--loading bootstrap js-->
<script src="{{ asset('/backend/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/backend/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js') }}"></script>
<script src="{{ asset('/backend/js/html5shiv.js') }}"></script>
<script src="{{ asset('/backend/js/respond.min.js') }}"></script>
<script src="{{ asset('/backend/vendors/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('/backend/vendors/slimScroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('/backend/vendors/jquery-cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('/backend/vendors/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('/backend/vendors/iCheck/custom.min.js') }}"></script>
<script src="{{ asset('/backend/vendors/jquery-notific8/jquery.notific8.min.js') }}"></script>
<script src="{{ asset('/backend/vendors/jquery-highcharts/highcharts.js') }}"></script>
<script src="{{ asset('/backend/js/jquery.menu.js') }}"></script>
<script src="{{ asset('/backend/vendors/jquery-pace/pace.min.js') }}"></script>
<script src="{{ asset('/backend/vendors/holder/holder.js') }}"></script>
<script src="{{ asset('/backend/vendors/responsive-tabs/responsive-tabs.js') }}"></script>
<script src="{{ asset('/backend/vendors/jquery-news-ticker/jquery.newsTicker.min.js') }}"></script>
<script src="{{ asset('/backend/js/main.js') }}"></script>

<!--<script src="{{ asset('/backend/vendors/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>
<script src="{{ asset('/backend/vendors/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>
<script src="{{ asset('/backend/vendors/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
<script src="{{ asset('/backend/vendors/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>
<script src="{{ asset('/backend/vendors/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>
<script src="{{ asset('/backend/vendors/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
<script src="{{ asset('/backend/vendors/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>-->

<script src="{{ asset('/backend/vendors/flot/jquery.flot.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/backend/vendors/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/backend/vendors/flot/jquery.flot.categories.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/backend/vendors/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
	
<script src="{{ asset('/backend/js/jquery.pulsate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/backend/js/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/backend/js/jquery.sparkline.min.js') }}" type="text/javascript"></script>
	
<script src="{{ asset('/backend/js/metronic.js')}}" type="text/javascript"></script>
<script src="{{ asset('/backend/js/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{ asset('/backend/js/scripts/quick-sidebar.js')}}" type="text/javascript"></script>
<script src="{{ asset('/backend/js/scripts/demo.js')}}" type="text/javascript"></script>
<script src="{{ asset('/backend/js/scripts/index.js')}}" type="text/javascript"></script>
<script src="{{ asset('/backend/js/scripts/tasks.js') }}" type="text/javascript"></script>
	
<script src="{{ asset('/backend/js/bootstrap-datepicker/js/moment.js') }}" type="text/javascript"></script>
<script src="{{ asset('/backend/js/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<!--<script src="{{ asset('/backend/js/bootstrap-datepicker/daterangepicker.js') }}" type="text/javascript"></script>-->
<script src="{{ asset('/backend/js/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
<!--<script src="{{ asset('/backend/js/bootstrap-datepicker/js/bootstrap-timepicker.js') }}" type="text/javascript"></script>-->


<script src="{{ asset('/backend/js/bootstrap-markdown.js') }}"></script>
<script src="{{ asset('/backend/js/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{ asset('/backend/js/ckeditor.js') }}"></script>
<script src="{{ asset('/backend/js/summernote.js')}}"></script>
<script src="{{ asset('/backend/js/ui-editors.js')}}"></script>
<script src="{{ asset('/agent_asset/js/custom_script.js')}}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('/agent_asset/css/custom_style.css') }}">
<script>//BEGIN CHECKBOX & RADIO


</script>

<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   
});
</script>
</body>
</html>
