{{-- ################################################# --}}
@extends('layout')
@section('title', 'Prediction')
{{-- Do not touch layout --}}

{{-- ################################################# --}}

@php
$case = ['case_id' => 'SIM MODE', 'chief_complain' => 'Motor Accident', 'name' => 'John Tan', 'age' => '65', 'allergies' => 'Nut, Wheat, Soy', 'tagging_result_1' => 'Internal Pain in Chest', 'tagging_result_2' => 'Blood from Head', 'tagging_result_3' => 'Blisters on Leg', 'medical_history' => 'Patient is Asthmathic, Diabetic and has High Blood Pressure.'];
@endphp


@section('content')
    {{-- This area is for the content --}}

    <div>
        <img src="{{ url('img/vector-user.png') }}" height=179px width=179px left=86px top=136px id='img-patient'
            alt="">
        <span id='info-caseID'>Case ID: {{ $case['case_id'] }}</span>
        <span id='info-chiefComplain'>{{ $case['chief_complain'] }}</span>
        <div id="info-patientInfo">
            {{ $case['name'] }} | {{ $case['age'] }}
            <br>
            Allegy: {{ $case['allergies'] }}
        </div>
    </div>

    <div>
        <div id="info-sympHeaderOne">Diagnosis</div>
        <div id="result-ML" style="left: 24px;">
            <div id="info-symp">{{ $case['tagging_result_1'] }}</div>
        </div>
        <span id="result-ML" style="left: 289px;">
            <div id="info-symp">{{ $case['tagging_result_2'] }}</div>
        </span>
        <span id="result-ML" style="left: 555px;">
            <div id="info-symp">{{ $case['tagging_result_3'] }}</div>
        </span>
    </div>

    <div>
        <a href="#" id='hf-deepdive'>View more</a>
    </div>

    <div>
        <div id='past-medical-history'>Past Medical History</div>
        <div id='history-desc-bg'>
            <span id='info-pastPatientInfo'>
                {{ $case['medical_history'] }}
            </span>
        </div>
    </div>

    <div>
        <button id='btn-locate' onclick="location.href = '/geolocation'" id="">Location</button>
    </div>

@endsection


{{-- ################################################# --}}

@section('script')
    {{-- This area is for the scripts --}}
@endsection

{{-- ################################################# --}}
