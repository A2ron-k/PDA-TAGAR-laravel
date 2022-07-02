{{-- ################################################# --}}
@extends('layout')
@section('title', 'Welcome')
{{-- Do not touch layout --}}

{{-- ################################################# --}}

@section('sub-content')
{{-- This area is for the content --}}

<div>
    <img src="https://cdn-icons-png.flaticon.com/512/848/848043.png" id="img-user-login">
    <input type="text" id="input-username-login" placeholder="Username">
    <input type="password" id="input-password-login" placeholder="Password">

    <button onclick="location.href = '/cases/ID100000'" id="submit-login">Sign In</button>
</div>


@endsection


{{-- ################################################# --}}

@section('script')
{{-- This area is for the scripts --}}
@endsection

{{-- ################################################# --}}