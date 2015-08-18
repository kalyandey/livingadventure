@extends('layout')

@section('title', 'Welcome to Living Adventure')
@section('content')

<script>
var ePFrame="<iframe src=\"https://staging.amadeusepower.com/xyztravel/\" width=\"100%\" height=\"580\" frameborder=\"0\"></iframe>";
</script>

    
<div class="page-content">

    <h1>Flight Search</h1>
<!--    <script type="text/javascript">document.write(ePFrame);</script>-->
    
    <div class="row">
        <div class="col-md-12" style="">
            <div class="col-md-3">    
            <div class="form-group">
                    <label>Flight Type</label>
                    <select name="flight_type" id="flight_type" class="form-control">
                        <option selected value="RoundTrip">Round Trip</option>
                        <option value="OneWay">One Way</option>
                        <option value=MultiLeg>Multi Leg</option>
                    </select>
                </div>
            </div> 
          </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <div class="form-group">
                    <label>From</label>
                    <input type="text" name="form_date" id="form_airport" class="form-control airportForm">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>To</label>
                    <input type="text" name="to_date" id="to_airport" class="form-control airportTo">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Departure Date</label>
                    <input type="text" name="form_airport" id="form_date" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Return Date</label>
                    <input type="text" name="to_airport" id="to_date" class="form-control">
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-2">
                <div class="form-group">
                    <label>Adult (18+)</label>
                    <select name="adults" id="adults" class="form-control" style="width:100px;">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Child (2-11)</label>
                    <select name="childs" id="childs" class="form-control" style="width:100px;">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Infants (0-1)</label>
                    <select name="infants" id="infants" class="form-control" style="width:100px;">
                        <option value="0" selected="">0</option>
                        <option>0</option>
                        <option>1</option>
                    </select>
                </div>
            </div>
         </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="col-md-3">
            <div class="form-group">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input type="hidden" id="fromAirport" value="">
                <input type="hidden" id="toAirport" value="">
                <input type="button" name="btn_search" id="flight_search" value="Search" class="btn btn-primary">
        </div>
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