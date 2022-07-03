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
                        <div>
                        {{ $case['name']}}
                        </div>

                        <div>
                        {{ $case['age']}}
                        </div>

                        <div>
                        {{ $case['location']}}
                        </div>

                        <div>
                        {{ $case['allergies']}}
                        </div>

                        <div>
                        {{ $case['chief_complain']}}
                        </div>

                        <div>
                        {{ $case['medical_history']}}
                        </div>
                    </li>
                </ul>
        </div>






@endsection


{{-- ################################################# --}}

@section('script')
    {{-- This area is for the scripts --}}
@endsection

{{-- ################################################# --}}
