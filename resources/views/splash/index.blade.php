@extends('splash')

@section('title', 'Welcome to Living Adventure')
@section('content')
  <div class="main">
    <div class="mainWrap glbCls">
      <div class="searchPanel">
        <h2>Experience Tailor made itineraries</h2>
        <div class="srchContainer glbCls clearfix">
        <input name="_token" type="hidden" value="{{ csrf_token() }}">
        <input type="hidden" id="fromAirport" value="">
        <input type="hidden" id="toAirport" value="">
        <input type="hidden" name="flight_type" id="flight_type" />
          <div class="location leftCls">
            <input class="citySearchBox leftCls inputBox" type="text" placeholder="Where do you want to go?" name="form_airport" value=""  id="form_airport">
	    <input class="toCity rightCls inputBox" type="text" placeholder="Where" name="to_airport"  id="to_airport" value="">
          </div>
          <div class="srchDate leftCls">
            <input type="text" placeholder="Departure Date" class="leftCls date inputBox"  name="form_date" id="form_date" value="">
            <input type="text" placeholder="Arrival Date" class="rightCls date inputBox"  name="to_date"  id="to_date" value="">
          </div>
          <div class="noAdults leftCls">
            <input class="adultBox inputBox" type="text" placeholder="Number of Adults" name="adults" id="adults" value="">
          </div>
          <div class="srchBtn rightCls">
            <input type="button" name="Search" id="flight_search" value="Search">
          </div>
        </div>
        <div class="iconTab glbCls clearfix">
          <div class="eachIcon icon1"> <em class="spriteImg"></em> Flights </div>
          <div class="eachIcon icon2"> <em class="spriteImg"></em> Tour </div>
          <div class="eachIcon icon3"> <em class="spriteImg"></em> Hotel </div>
          <div class="eachIcon icon4"> <em class="spriteImg"></em> Cruises </div>
          <div class="eachIcon icon5"> <em class="spriteImg"></em> Cars </div>
          <div class="eachIcon icon6"> <em class="spriteImg"></em> Events </div>
          <div class="eachIcon icon7"> <em class="spriteImg"></em> Independent </div>
        </div>
      </div>
    </div>
  </div>

@endsection