{{-- ################################################# --}}
@extends('layout')
@section('title', 'Prediction')
{{-- Do not touch layout --}}

{{-- ################################################# --}}

@section('sub-content')
    {{-- This area is for the content --}}

    <div id="predicted-container-case" style="top: 284px;">
        <div id="predicted-header" style="top:20px">Sprained Ankle | 92%</div>
        <div id="predicted-symptoms" style="top:64px">Symptoms: Pain, Bruising, Swelling, Restricted ROM...<br> Causes: Fall,
            Landing awkardly, Walking on uneven surface...</div>
        <a id='hf-revision' href="/case_specific">Revision Here</a>
    </div>

    <div id="predicted-container-case" style="top: 440px;">
        <div id="predicted-header" style="top:20px">Achilles Tendonities | 84%</div>
        <div id="predicted-symptoms" style="top:64px">Symptoms: Swelling near heel, Inability to stand on toes...<br>
            Causes: Over-exertion (jumping), Falling from height...</div>
        <a id='hf-revision' href="/case_specific">Revision Here</a>
    </div>

    <div id="predicted-container-case" style="top: 596px;">
        <div id="predicted-header" style="top:20px">Ankle Fracture (Broken Ankle) | 62%</div>
        <div id="predicted-symptoms" style="top:64px">Symptoms: Immediate throbbing pain, Bruising, Deformity...<br> Causes:
            Twisting, Rotating or rolling ankle, Impact or stress...</div>
        <a id='hf-revision' href="/case_specific">Revision Here</a>
    </div>

    <div id="predicted-container-case" style="top: 752px;">
        <div id="predicted-header" style="top:20px">Rhabdomyolysis | 30%</div>
        <div id="predicted-symptoms" style="top:64px">Symptoms: Muscle swelling, Weak, Tender and Sore Muscle...<br> Causes:
            High-intensity exercise, Severe Dehydration...</div>
        <a id='hf-revision' href="/case_specific">Revision Here</a>
    </div>




@endsection


{{-- ################################################# --}}

@section('script')
    {{-- This area is for the scripts --}}
@endsection

{{-- ################################################# --}}
