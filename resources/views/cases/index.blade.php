{{-- ################################################# --}}
@extends('layout')
@section('title', 'Welcome')
{{-- Do not touch layout --}}

{{-- ################################################# --}}

@section('content')
    {{-- This area is for the content --}}
    <div></div>
    <div id="info-sympHeader">
        Case History
    </div>

    @if (count($cases) > 0)
        <div id="cases-index-container">
            @foreach ($cases as $case)
                <div id='info-caseHis'>
                    <a id='info-header' href="{{ route('cases.show', ['case' => $case['id']]) }}">{{ $case['case_id'] }} -
                        {{ $case['location'] }} - {{ $case['time']}}</a><br>
                    <div id="info-date">{{ $case['date']}} </div>

                </div><br><br><br><br><br>
            @endforeach
        </div>
    @else
        <h2>There are no cases to display</h2>
    @endif






@endsection


{{-- ################################################# --}}

@section('script')
    {{-- This area is for the scripts --}}
@endsection

{{-- ################################################# --}}
