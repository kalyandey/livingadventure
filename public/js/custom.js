// JavaScript Document

(function($) {
$(document).ready(function() {

$("#form_date" ).datepicker({
minDate:0,
dateFormat: 'dd/mm/yy'
});
$("#to_date" ).datepicker({
minDate:0,
dateFormat: 'dd/mm/yy'
}
);
$.widget("custom.catcomplete", $.ui.autocomplete, {

_renderItem:function (ul, item) {
                return $("<li>")
                .data("item.autocomplete", item)
                .append("<strong>" + item.airport_name + "</strong>----<strong>" + item.airport_code + "</strong>")
                .appendTo(ul);
}
});
$(document).on("focus.autocomplete",".airportForm",function(e){
    $(this).catcomplete({
    delay: 0,
    source:'splashs/get_airport_list',
    select:function(evt, ui){ 
       $('#fromAirport').val(ui.item.airport_code);
    },

    });
})
$(document).on("focus.autocomplete",".airportTo",function(e){
   $(this).catcomplete({
       source:'splashs/get_airport_list',
       minLength:1,
       select:function(evt, ui)
       { 
           $('#toAirport').val(ui.item.airport_code);
       }

       });
   });   				

$('#flight_search').click(function (evento) {
 
    var From=$('#fromAirport').val();
    var To=$('#toAirport').val();
    var DepartureDate=$('#form_date').val();
    var ReturnDate=$('#to_date').val();
    var Adults=$('#adults').val();
    var Childrens=$('#childs').val();
    var Infants=$('#infants').val();
    var From2='';
    var To2='';
    var DepartureDate2='';
    var From3='';
    var To3='';
    var DepartureDate3='';
    
    var path = "splashs/search_flight?AdtCount=" + Adults + "&ChdCount=" + Childrens + "&InfCount=" + Infants + "&DepartureDate="+ DepartureDate +"&FlightType=RoundTrip&From=" + From + "&Method=Search&Page=Result&QFrom=A&QTo=A&ReturnDate=" + ReturnDate + "&To=" + To;
    window.location =path;
});
/*$(document).on("focus.autocomplete",".airportForm",function(e){
   $(this).autocomplete({
       source:'http://192.168.2.5/test_amadeus/ajax/get_Airport.php',
       minLength:1,
       _renderItem:function (ul, item) {
								return $("<li>")
								.data("item.autocomplete", item)
								.append("<a>" + item.value + "</a>")
								.appendTo(ul);
						},
       select:function(evt, ui)
       {
           //$('#form_airport').val(ui.item.customer_code);
       }

       });
   });*/
   


});   // End $(document).ready() 
})(jQuery);