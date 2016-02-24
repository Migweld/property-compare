@extends('layouts.master')

@section('content')

@if(Session::get('message'))
	<p>{{Session::get('message')}}</p>
@endif

<form action="/compare" method="POST">
	<label for="bedrooms">Number of Bedrooms</label>
	<select name="bedrooms" id="bedrooms">
		<option value="1">One</option>
		<option value="2">Two</option>
		<option value="3">Three</option>
		<option value="4">Four</option>
		<option value="">Five</option>
	</select>

	<label for="property_type">Type of property</label>
	<select name="property_type" id="property_type">
		<option value="houses">House</option>
		<option value="flats">Flat</option>
	</select>

	<label for="sale_or_rent">Buy or Rent?</label>
	<select name="sale_or_rent" id="sale_or_rent">
		<option value="sale">Buy</option>
		<option value="rent">Rent</option>
	</select>

	<input type="submit" name="submit" value="Search" />
</form>
@stop