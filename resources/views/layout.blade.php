<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script type="text/javascript" src="{{ asset('/js/jquery-ui.js') }}"></script>    
        <script type="text/javascript" src="{{ asset('/js/custom.js') }}"></script>      
        <meta name="csrf-token" content="{{ csrf_token() }}" />   
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
            
            .title {
                font-size: 30px;
                color:#286090;
                font-weight:bold;
            }
            .ui-autocomplete {
                position: absolute; cursor: default; 
            }
            .ui-autocomplete-loading { 
                background: white url('../images/indicator.gif') right center no-repeat; 
            }
        </style>
    </head>
    <body>
        <div class="top">&nbsp;</div>
        <div class="menu">&nbsp;</div>
        <div class="container">                    
            @yield('content')
        </div>
    </body>
</html>
