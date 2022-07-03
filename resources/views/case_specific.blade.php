{{-- ################################################# --}}
@extends('layout')
@section('title', 'Case Specific JIT')
{{-- Do not touch layout --}}

{{-- ################################################# --}}

@section('content')
{{-- This area is for the content --}}

<h2 id=case-specific-header>RIB FRACTURE</h2>

<div id= "predicted-container-case" style="top: 196px; height:222px">
    <div id="predicted-header">Symptoms</div>
    <div id="predicted-symptoms">Severe Chest pain, Coughing, Pain when breathing </div>
</div>
<div id= "predicted-container-case" style="top: 442px; height:222px">
    <div id="predicted-header">Causes</div>
    <div id="predicted-cause">Causes: Motor Accident, Fall, Severe coughing</div>
</div>
<div id= "predicted-container-case" style="top: 688px; height:222px">
    <div id="predicted-header">Treatment</div>
    <div id="predicted-symptoms">XXXXX</div>
    <div id="predicted-cause">XXXXXX</div>
</div>






@endsection


{{-- ################################################# --}}

@section('script')
{{-- This area is for the scripts --}}
@endsection

{{-- ################################################# --}}