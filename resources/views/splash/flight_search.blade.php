@extends('layout')

@section('title', 'Welcome to Living Adventure')
@section('content')

<script>
$(document).ready(function () {
    $("#EPower").load(function () {
        $("#DivImgLoading").hide();
    });
});    
function IFrameEPower(Name) {
    var ulrPage = window.location.href;
    var dataUrl = ulrPage.split('?');
    var URLFinal = "https://staging.epower.amadeus.com/xyztravel/" + Name + ".aspx?";      
      if (dataUrl.length > 1) {
        URLFinal += "&" + dataUrl[1];
    }
    URLFinal += "&Culture=en-US";
    $("#EPower").attr("src", URLFinal);
}
//resize
$( window ).resize(function() {
  reziseEpower();
});

$(document).ready(function(){
  reziseEpower();
});

function reziseEpower()
{
  var top = $(".top").height();
  var menu = $(".menu").height();
  var total = $( window ).height() - 56;
  
  $(".DivGeneralQuickSearchxyz").height(total-menu-top);
}
var ePFrame = "<div style=\"background:white; height:50px; position:absolute; z-index:7000; display:block; width:100%\"></div><iFrame id='EPower' src=\"\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0px;padding-top:-50px; position:relative;z-index:5\"></iFrame>";
</script>
<style>
    .DivImgLoading {
    margin-left: 550px;
    top: 40%;
    position: absolute;
    z-index: 1;
}
.DivGeneralQuickSearchxyz {
    /*height: 475px;*/
	height: 100%; 
	overflow:hiden;
	
}

.DivGeneralQuickSearchCruise {
	min-height: 400px;
    margin-top:24px;
}
</style>
<div class="DivGeneralQuickSearchxyz">
        <div id="DivImgLoading" class="DivImgLoading">
            <img src="../images/887710.gif" />
        </div>
        <script type="text/javascript">document.write(ePFrame);</script>
    </div>
<script type="text/javascript">
    IFrameEPower("flightfaresearch");
</script> 
@endsection