{{-- ################################################# --}}
@extends('layout')
@section('title', 'Welcome')
{{-- Do not touch layout --}}

{{-- ################################################# --}}

@php
$photo_arr = ['Mprofilepic', 'Mprofilepic4', 'Fprofilepic2', 'Fprofilepic3'];

$chosen = $photo_arr[rand(0, count($photo_arr) - 1)];

@endphp



@section('content')
    {{-- This area is for the content --}}

    <div id='info-sympHeader'>{{ $case['case_id'] }}</div>

    <div id="patient-profile">
        <img src="{{ url('img/' . "$chosen" . '.jpeg') }}" height=179px width=179px left=86px top=136px id='img-patient'
            alt="">
        <span id='info-chiefComplain'>{{ $case['chief_complain'] }}</span>
        <div id="info-patientInfo">
            {{ $case['name'] }} | {{ $case['age'] }}
            <br>
            Allergy: {{ $case['allergies'] }}
        </div>
    </div>

    <div>
        <div id="info-sympHeader" style="top:373px">Symptoms</div>
        <div id="symptoms-container">
            <div id="result-ML" style="left: 0px;">
                <div id="info-symp">{{ $case['tagging_result_1'] }}</div>
            </div>
            <span id="result-ML" style="left: 245px;">
                <div id="info-symp">{{ $case['tagging_result_2'] }}</div>
            </span>
            <span id="result-ML" style="left: 489px;">
                <div id="info-symp">{{ $case['tagging_result_3'] }}</div>
            </span>
        </div>
    </div>

    <div id="med-history-container">
        <div id='past-medical-history'>Past Medical History</div>
        <div id='history-desc-bg'>
            <span id='info-pastPatientInfo'>
                {{ $case['medical_history'] }}
            </span>
        </div>
    </div>

    <div id ="btn-container">
        <div>
            <button id='btn-diagnose' onclick="location.href = '../diagnosis'" id="">Diagnose Patient</button>
        </div>

        <div>
            <button id='btn-locate' onclick="location.href = '/geolocation'" id="">Locate Patient</button>
        </div>
    </div>

@endsection


{{-- ################################################# --}}

@section('script')
    {{-- This area is for the scripts --}}
@endsection

{{-- ################################################# --}}
