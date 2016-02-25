@extends('layouts.master')
@section('content')
<?php setlocale(LC_MONETARY, 'en_GB'); ?>

<div class='results cf'>
    @unless($leeds->price == 0 || $leeds->image_url == '')
        <div class='result result--leeds purple'>
                  <span class='bg-text'>
                    Leeds
                  </span>
            <div class='box'>
                <p class='address'>
                    {{$leeds->displayable_address}}
                </p>
                <div class='image' style="background-image: url({{$leeds->image_url}})"></div>
                <div class='price'>
                    £{{number_format($leeds->price)}}
                    @if($rent == true)
                        p/w
                    @endif
                </div>
            </div>
            <a class='cta-btn cta-btn__purple' href='{{$leeds->details_url}}'>Details</a>
        </div>
    @endunless

    @unless($london->price == 0 || $london->image_url == '')
        <div class='result result--london mint'>
                  <span class='bg-text'>
                    London
                  </span>
            <div class='box'>
                <p class='address'>
                    {{$london->displayable_address}}
                </p>
                <div class='image' style="background-image: url({{$london->image_url}})"></div>
                <div class='price'>
                    £{{number_format($london->price)}}
                    @if($rent == true)
                        p/w
                    @endif
                </div>
            </div>
            <a class='cta-btn' href='{{$london->details_url}}'>Details</a>
        </div>
    @endunless
</div>

<div class='leeds-is-ace'>
    <p class='section-text'>
        Living in
    </p>
            <span class='bg-text purple'>
              Leeds
            </span>
    @if($leeds->price < $london->price)
    <div class='box'>
        <p>Would save you</p>
        <div class='cash'>
            £{{number_format($london->price - $leeds->price)}}
            @if($rent == true)
                p/w
            @endif
        </div>
    </div>
    @endif
    <p class='quip'>
        SUDDENLY THAT COLD WEATHER ISN’T SOUNDING TOO BAD…
    </p>
</div>
<div class='again'>
    <p class='section-text'>
        STILL NOT CONVINCED?
    </p>
    <a class='cta-btn btn-lg' href='{{url('/')}}'>Search Again</a>
</div>
@stop