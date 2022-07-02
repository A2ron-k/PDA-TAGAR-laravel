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
                <h3>{{ $case['case_id'] }}</h3>
                <ul>
                    <li>
                        {{ $case['location'] }}
                        {{ $case['location'] /* Age */ }} 
                        
                        {{ $case['location'] /* Age */  }}
                        {{ $case['location'] }}
                    </li>
                </ul>
        </div>






@endsection


{{-- ################################################# --}}

@section('script')
    {{-- This area is for the scripts --}}
@endsection

{{-- ################################################# --}}
