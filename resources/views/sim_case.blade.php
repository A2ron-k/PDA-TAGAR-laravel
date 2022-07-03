{{-- ################################################# --}}
@extends('layout')
@section('title', 'Prediction')
{{-- Do not touch layout --}}

{{-- ################################################# --}}

@section('sub-content')
    {{-- This area is for the content --}}

    <div>
        <img src="https://cdn-icons-png.flaticon.com/512/848/848043.png" height=179px width=179px left=86px top=136px
            id='img-patient' alt="">
        <span id='info-caseid'>Case ID: 01234567</span>
        <span id='info-chiefComplain'>Motor Accident</span>
        <div id="info-patientInfo">
            <div>Name: John Tan</div>
            <div>Age: 65</div>
            <div>Allegy: Nut, Wheat, Soy</div>
        </div>
    </div>

    <div>
        <div id="info-header">Diagnosis</div>
        <span id="result-ML-one">
            <div id="info-result">Internal Pain in Chest</div>
        </span>
        <span id="result-ML-two">
            <div id="info-result" >Blood from Head</div>
        </span>
        <span id="result-ML-three">
            <div id="info-result">Blisters on Leg</div>
        </span>
    </div>

    <div>
        <div id= 'past-medical-history'>Past Medical History</div>
        <div id= 'history-desc'>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet pellentesque dui. Curabitur convallis
            lacus sit amet sem gravida dapibus. Quisque tempor nulla erat, nec egestas tellus sodales ac. Sed suscipit velit
            ex, id commodo turpis varius eget. Donec a tempus velit. Donec vitae ligula sodales, ornare diam quis, maximus
            lectus.
        </div>
    </div>

    <div>
        <button id='btn-RSE' onclick="location.href = '/geolocation'" id="">Location</button>
    </div>


@endsection


{{-- ################################################# --}}

@section('script')
    {{-- This area is for the scripts --}}
@endsection

{{-- ################################################# --}}
