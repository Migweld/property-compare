@extends('layouts.master')

@section('content')

@if(isset($message) && $message != '')
	<p>{{$message}}</p>
@endif

<span class='leeds bg-text purple'>Leeds</span>

<form action="/compare" method="POST" class="search-form">
    <div class="box">
        <select name="bedrooms" id="bedrooms" class="standard-select">
            <option disabled='true' selected='true' value=''>Number of Bedrooms</option>
            <option value="1">One Bedroom</option>
            <option value="2">Two Bedrooms</option>
            <option value="3">Three Bedrooms</option>
            <option value="4">Four Bedrooms</option>
            <option value="">Five Bedrooms</option>
        </select>

        <select name="property_type" id="property_type" class="standard-select">
            <option disabled='true' selected='true' value=''>Type of property</option>
            <option value="houses">House</option>
            <option value="flats">Flat</option>
        </select>

        <select name="sale_or_rent" id="sale_or_rent" class="standard-select">
            <option disabled='true' selected='true' value=''>Buy or Rent</option>
            <option value="sale">Buy</option>
            <option value="rent">Rent</option>
        </select>
    </div>
    <input type="submit" name="submit" value="Search" class="cta-btn"/>
</form>

<span class='london bg-text mint'>London</span>
@stop