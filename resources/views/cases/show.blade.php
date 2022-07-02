{{-- ################################################# --}}
@extends('layout')
@section('title', 'Welcome')
{{-- Do not touch layout --}}

{{-- ################################################# --}}

@section('content')
    {{-- This area is for the content --}}

        <div>
                <h3>{{ $case['case_id'] }}</h3>
                <ul>
                    <li>
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
