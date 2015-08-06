@extends('layout')

@section('title', 'Welcome to Living Adventure')
@section('content')
<div class="page-content">
    <h1>Flight Search</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Provider Selection</label>
                    <select name="External_FlightSearchTypeByProvider" id="External_FlightSearchTypeByProvider" class="form-control">
                        <option selected value=OnlyAmadeus>Only Amadeus Flights</option>
                        <option value=AmadeusAndExtProviders>Amadeus and low cost carriers</option>
                        <option value=OnlyExtProviders>Only low cost carriers</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Flight Type</label>
                    <select name="External_FlightFareSearch_SearchType" id="External_FlightFareSearch_SearchType" class="form-control">
                        <option selected value="RoundTrip">Round Trip</option>
                        <option value="OneWay">One Way</option>
                        <option value=MultiLeg>Multi Leg</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>From</label>
                    <input type="text" name="External_FlightFareSearch_From" id="External_FlightFareSearch_From" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>To</label>
                    <input type="text" name="External_FlightFareSearch_To" id="External_FlightFareSearch_To" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Departure Date</label>
                    <input type="text" name="External_FlightFareSearch_DepartureDate" id="External_FlightFareSearch_DepartureDate" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Departure Time</label>
                    <select name="External_FlightFareSearch_DepartureTime" id="External_FlightFareSearch_DepartureTime" class="form-control">
                        <option value="00:01" selected>NoPreference</option>
                        <option value="MORNING">Morning</option>
                        <option value="AFTERNOON">Afternoon</option>
                        <option value="EVENING">Evening</option>
                        <option value="00:00">00:00</option>
                        <option value="01:00">01:00</option>
                        <option value="02:00">02:00</option>
                        <option value="03:00">03:00</option>
                        <option value="04:00">04:00</option>
                        <option value="05:00">05:00</option>
                        <option value="06:00">06:00</option>
                        <option value="07:00">07:00</option>
                        <option value="08:00">08:00</option>
                        <option value="09:00">09:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                        <option value="19:00">19:00</option>
                        <option value="20:00">20:00</option>
                        <option value="21:00">21:00</option>
                        <option value="22:00">22:00</option>
                        <option value="23:00">23:00</option>
                    </select>
                </div>                
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Departure Date Flexibility</label>
                    <select name="External_FlightFareSearch_DepartureFlexibility" id="External_FlightFareSearch_DepartureFlexibility" class="form-control">
                        <option value="" selected>Exact Date</option>
                        <option value="2M">-2 Days</option>
                        <option value="1M">-1 Day</option>
                        <option value="1C">-1/+1 Day</option>
                        <option value="1P">+1 Day</option>
                        <option value="2P">+2 Days</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>+/- 3 Days calendar result<br>(MP calendar) <input type="checkbox" name="External_FlightFareSearch_Calendar" value="on" class="form-control"></label>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Inbound Date</label>
                    <input type="text" name="External_FlightFareSearch_ReturnDate" id="External_FlightFareSearch_ReturnDate" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Inbound Time</label>
                    <select name="External_FlightFareSearch_ArrivalTime" id="External_FlightFareSearch_ArrivalTime" class="form-control"> 
                        <option value="00:01" selected="">NoPreference</option>
                        <option value="MORNING">Morning</option>
                        <option value="AFTERNOON">Afternoon</option>
                        <option value="EVENING">Evening</option>
                        <option value="00:00">00:00</option>
                        <option value="01:00">01:00</option>
                        <option value="02:00">02:00</option>
                        <option value="03:00">03:00</option>
                        <option value="04:00">04:00</option>
                        <option value="05:00">05:00</option>
                        <option value="06:00">06:00</option>
                        <option value="07:00">07:00</option>
                        <option value="08:00">08:00</option>
                        <option value="09:00">09:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                        <option value="19:00">19:00</option>
                        <option value="20:00">20:00</option>
                        <option value="21:00">21:00</option>
                        <option value="22:00">22:00</option>
                        <option value="23:00">23:00</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Inbound Date Flexibility</label>
                    <select name="External_FlightFareSearch_ArrivalFlexibility" id="External_FlightFareSearch_ArrivalFlexibility" class="form-control">
                        <option value="" selected>Exact Date</option>
                        <option value="2M">-2 Days</option>
                        <option value="1M">-1 Day</option>
                        <option value="1C">-1/+1 Day</option>
                        <option value="1P">+1 Day</option>
                        <option value="2P">+2 Days</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Adults</label>
                    <select name="External_FlightFareSearch_NumberOfAdults" id="External_FlightFareSearch_NumberOfAdults" class="form-control">
                        <option value="0" selected="">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
        
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Infants</label>
                    <select name="External_FlightFareSearch_NumberOfInfants" id="External_FlightFareSearch_NumberOfInfants" class="form-control">
                        <option value="0" selected="">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Childs</label>
                    <select name="External_FlightFareSearch_NumberOfChilds" id="External_FlightFareSearch_NumberOfChilds" class="form-control">
                        <option value="0" selected="">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Youths</label>
                    <select name="External_FlightFareSearch_NumberOfYouths" id="External_FlightFareSearch_NumberOfYouths" class="form-control">
                        <option value="0" selected="">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Seniors</label>
                    <select name="External_FlightFareSearch_NumberOfSeniors" id="External_FlightFareSearch_NumberOfSeniors" class="form-control">
                        <option value="0" selected="">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>            
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Students</label>
                    <select name="External_FlightFareSearch_NumberOfStudents" id="External_FlightFareSearch_NumberOfStudents" class="form-control">
                        <option value="0" selected="">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Seamans</label>
                    <select name="External_FlightFareSearch_NumberOfSeamans" id="External_FlightFareSearch_NumberOfSeamans" class="form-control">
                        <option value="0" selected="">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Max Price</label>
                    <input name="External_FlightFareSearch_MaxPrice" id="External_FlightFareSearch_MaxPrice" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Cabin Class</label>
                    <select name="External_FlightFareSearch_FlightClass" id="External_FlightFareSearch_FlightClass" class="form-control">
                        <option value="" selected="">No Preference</option>
                        <option value="Y">Economy</option>
                        <option value="C">Business</option>
                        <option value="F">First</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Show Only Direct Flights</label>
                    <input type="checkbox" name="External_FlightFareSearch_OnlyDirectFlights" id="External_FlightFareSearch_OnlyDirectFlights" value="on" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Prefered Airlines</label>
                    <input type="textbox" name="External_FlightFareSearch_PrefferedAirlines" id="External_FlightFareSearch_PrefferedAirlines" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <input type="button" name="btn_search" id="btn_search" value="Search" class="btn btn-primary">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h1>Contact Us</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul style="text-align:left;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            @if(Session::has('message'))
            <div class="alert alert-success fade in">
            <ul>
                <li>{{ Session::get('message') }}</li>
            </ul>
            </div>
            @endif
            
            {!! Form::open(array('url' => 'create_contact')) !!}
            
            <div class="form-group">
                {!! Form::label('First Name') !!}
                {!! Form::text('first_name', null, 
                    array('class'=>'form-control', 
                          'placeholder'=>'First name')) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('Last Name') !!}
                {!! Form::text('last_name', null, 
                    array('class'=>'form-control', 
                          'placeholder'=>'Last name')) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('E-mail Address') !!}
                {!! Form::text('email', null, 
                    array('class'=>'form-control', 
                          'placeholder'=>'E-mail address')) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('Address') !!}
                {!! Form::text('address', null, 
                    array('class'=>'form-control', 
                          'placeholder'=>'Address')) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('City') !!}
                {!! Form::text('city', null, 
                    array('class'=>'form-control', 
                          'placeholder'=>'City')) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('Zipcode') !!}
                {!! Form::text('zipcode', null, 
                    array('class'=>'form-control', 
                          'placeholder'=>'Zipcode')) !!}
            </div>
            
            <div class="form-group">
                {!! Form::submit('Submit', 
                  array('class'=>'btn btn-primary')) !!}
            </div>
                
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection