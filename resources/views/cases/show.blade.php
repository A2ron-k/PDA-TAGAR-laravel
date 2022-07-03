{{-- ################################################# --}}
@extends('layout')
@section('title', 'Welcome')
{{-- Do not touch layout --}}

{{-- ################################################# --}}

@php
// subjected to removal
// $tagging_processed = $case['tagging_results'];
@endphp


@section('content')
    {{-- This area is for the content --}}

    <div>
        <img src="{{url('img/vector-user.png')}}" height=179px width=179px left=86px top=136px
            id='img-patient' alt="">
        <span id='info-caseid'>Case ID: {{ $case['case_id'] }}</span>
        <span id='info-chiefComplain'>{{ $case['chief_complain'] }}</span>
        <div id="info-patientInfo">
            <div>Name: {{ $case['name'] }}</div>
            <div>Age: {{ $case['age'] }}</div>
            <div>Allegy: {{ $case['allergies'] }}</div>
        </div>
    </div>

    <div>
        <div id="info-header">Diagnosis</div>
        <span id="result-ML-one">
            <div id="info-result">{{ $case['tagging_result_1'] }}</div>
        </span>
        <span id="result-ML-two">
            <div id="info-result">{{ $case['tagging_result_2'] }}</div>
        </span>
        <span id="result-ML-three">
            <div id="info-result">{{ $case['tagging_result_3'] }}</div>
        </span>
    </div>

    <div>
        <div id='past-medical-history'>Past Medical History</div>
        <div id='history-desc'>
            <span></span>
            {{ $case['medical_history'] }}
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
