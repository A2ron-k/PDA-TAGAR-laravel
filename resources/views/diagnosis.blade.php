{{-- ################################################# --}}
@extends('layout')
@section('title', 'Diagnosis')
{{-- Do not touch layout --}}

{{-- ################################################# --}}

@php

$case_diagnosis = [
    [
        'Diagnosis' => 'Sprained Ankle',
        'Percentage' => '92%',
        'Symptoms' => 'Pain, Bruising, Swelling, Restricted ROM...',
        'Causes' => 'Fall, Landing awkardly, Walking on uneven surface...',
        'link' => '/jit',
    ],
    [
        'Diagnosis' => 'Achilles Tendonities',
        'Percentage' => '84%',
        'Symptoms' => 'Swelling near heel, Inability to stand on toes...',
        'Causes' => 'Over-exertion (jumping), Falling from height...',
        'link' => '/jit',
    ],
    [
        'Diagnosis' => 'Ankle Fracture (Broken Ankle)',
        'Percentage' => '62%',
        'Symptoms' => 'Immediate throbbing pain, Bruising, Deformity...',
        'Causes' => 'Twisting, Rotating or rolling ankle, Impact or stress...',
        'link' => '/jit',
    ],
    [
        'Diagnosis' => 'Rhabdomyolysis',
        'Percentage' => '30%',
        'Symptoms' => 'Muscle swelling, Weak, Tender and Sore Muscle...',
        'Causes' => ' High-intensity exercise, Severe Dehydration...',
        'link' => '/jit',
    ],
];

@endphp

@section('content')
    {{-- This area is for the content --}}
    <div id="cases-index-container">
        @foreach ($case_diagnosis as $diagnosis)
            <div id="diagnosis-container-case">
                <div id="predicted-header">{{ $diagnosis['Diagnosis'] }} | {{ $diagnosis['Percentage'] }}
                </div>
                <div id="predicted-symptoms">Symptoms: {{ $diagnosis['Symptoms'] }}<br> Causes:
                    {{ $diagnosis['Causes'] }}</div>
                <a id='hf-revision' href="{{$diagnosis['link']}}">More Info</a>
            </div><br><br><br><br><br><br><br>
        @endforeach
    </div>

@endsection


{{-- ################################################# --}}

@section('script')
    {{-- This area is for the scripts --}}
@endsection

{{-- ################################################# --}}
