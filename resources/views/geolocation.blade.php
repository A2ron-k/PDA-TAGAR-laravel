{{-- ################################################# --}}
@extends('layout')
@section('title', 'Prediction')
{{-- Do not touch layout --}}

{{-- ################################################# --}}

@section('sub-content')
{{-- This area is for the content --}}

<div id= "geolocation-container-case" style="top: 108px;">
    {{-- <img src="" alt=""> --}}
    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=768861+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/farm-gps/">tractor gps</a></iframe></div>
    {{-- <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q={{ $case['postal_code']}}+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/farm-gps/">tractor gps</a></iframe></div> --}}
</div>

<div id= "geolocation-container-case" style="top: 609px;">
    <img src="" alt="">
</div>

<div id= "geolocation-container-case" style="top: 1125px;">
    <img src="" alt="">
</div>



@endsection


{{-- ################################################# --}}

@section('script')
{{-- This area is for the scripts --}}
@endsection

{{-- ################################################# --}}