<!DOCTYPE html>
<html lang="en">
<head>	
	<title>Administrator Panel | Agent  - @yield('title') </title>
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
	<link type="text/css" rel="stylesheet" href="{{ asset('/admin/vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('/admin/vendors/font-awesome/css/font-awesome.min.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('/admin/vendors/bootstrap/css/bootstrap.min.css') }}">
	<!--LOADING STYLESHEET FOR PAGE-->
	<link type="text/css" rel="stylesheet" href="{{ asset('/admin/vendors/intro.js/introjs.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('/admin/vendors/calendar/zabuto_calendar.min.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('/admin/vendors/sco.message/sco.message.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('/admin/vendors/intro.js/introjs.css') }}">
	<!--Loading style vendors-->
	<link type="text/css" rel="stylesheet" href="{{ asset('/admin/vendors/animate.css/animate.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('/admin/vendors/jquery-pace/pace.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('/admin/vendors/iCheck/skins/all.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('/admin/vendors/jquery-notific8/jquery.notific8.min.css') }}">
	<!--Loading style-->
	<link type="text/css" rel="stylesheet" href="{{ asset('/admin/css/themes/style1/orange-blue.css') }}" class="default-style">
	<link type="text/css" rel="stylesheet" href="{{ asset('/admin/css/themes/style1/orange-blue.css') }}" id="theme-change" class="style-change color-change">
	<link type="text/css" rel="stylesheet" href="{{ asset('/admin/css/style-responsive.css') }}">
</head>
<body id="signin-page">	

	@yield('content')

	<!-- Scripts -->
<script src="{{ asset('/admin/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('/admin/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('/admin/js/jquery-ui.js') }}"></script>
<!--loading bootstrap js-->
<script src="{{ asset('/admin/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/admin/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js') }}"></script>
<script src="{{ asset('/admin/js/html5shiv.js') }}"></script>
<script src="{{ asset('/admin/js/respond.min.js') }}"></script>
<script src="{{ asset('/admin/vendors/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('/admin/vendors/iCheck/custom.min.js') }}"></script>
<script>//BEGIN CHECKBOX & RADIO
$('input[type="checkbox"]').iCheck({
    checkboxClass: 'icheckbox_minimal-grey',
    increaseArea: '20%' // optional
});
$('input[type="radio"]').iCheck({
    radioClass: 'iradio_minimal-grey',
    increaseArea: '20%' // optional
});
//END CHECKBOX & RADIO
</script>
</body>
</html>
