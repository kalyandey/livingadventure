<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>splash</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script type="text/javascript" src="{{ asset('/js/jquery-ui.js') }}"></script>    

<link rel="stylesheet" type="text/css" href="{{ asset('/css/styles.css') }}">
<script src="{{ asset('/js/script.js') }}" ></script>
    
    
<meta name="csrf-token" content="{{ csrf_token() }}" />   
</head>

<body class="home">
<div class="page">
  <div class="banner glbCls"> <img src="images/background1.jpg" alt="bg"> <span class="hdrOverly"> </span> </div>
    
    <!-- header -->
    @include('layout.splash_header');

    @yield('content')

<!-- footer -->
    @include('layout.splash_footer');

</div>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script>
$(document).ready(function(){
			$(".flag .clickLag").click(function(){ 
				$(".con").slideToggle();
			});
		});
</script> 

</body>
</html>
