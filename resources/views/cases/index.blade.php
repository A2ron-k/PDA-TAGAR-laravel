{{-- ################################################# --}}
@extends('layout')
@section('title', 'Welcome')
{{-- Do not touch layout --}}

{{-- ################################################# --}}

@section('content')
    {{-- This area is for the content --}}

    @if (count($cases) > 0)
        <div>
            @foreach ($cases as $case)
                <h3>
                    <a href="{{ route('cases.show', ['case'=> $case['id']]) }}">{{ $case['case_id'] }}</a>
                    
                    </h3>
                <ul>
                    <li>
                        {{ $case['location'] }}
                    </li>
                </ul>
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
