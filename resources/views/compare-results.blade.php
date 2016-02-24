@extends('layouts.master')
@section('content')
<?php setlocale(LC_MONETARY, 'en_GB'); ?>

<h1>Leeds</h1>

@unless($leeds->price == 0 || $leeds->image_url == '')
	<div class="property">
		<span class="address"><a href="{{$leeds->details_url}}">{{$leeds->displayable_address}}</a></span>
		<img src="{{$leeds->image_url}}" alt="{{$leeds->displayable_address}}">
		<span class="price">£{{number_format($leeds->price)}}</span>
	</div>
@endunless

<h1>London</h1>
	@unless($london->price == 0 || $london->image_url == '')
		<div class="property">
			<span class="address"><a href="{{$london->details_url}}">{{$london->displayable_address}}</a></span>
			<img src="{{$london->image_url}}" alt="{{$london->displayable_address}}">
			<span class="price">£{{number_format($london->price)}}</span>
		</div>
	@endunless

<p>Want to tweet this result?</p>
<a href="{{url('result/'.$searchresult)}}">{{url('result/'.$searchresult)}}</a>
@stop