{{-- ################################################# --}}
@extends('unknownLayout')
@section('title', 'Login')
{{-- Do not touch layout --}}

{{-- ################################################# --}}

@section('sub-content')
{{-- This area is for the content --}}
<body>
    <div id ="form-container">
        <div id="header-login" >Sign in to PDA</div>
        <input type="text" id="input-username-login" placeholder="Username">
        <input type="password" id="input-password-login" placeholder="Password">
    
        <button onclick="location.href = '/cases/1'" id="submit-login">Sign In</button>
    </div>
    
</body>



@endsection


{{-- ################################################# --}}

@section('script')
{{-- This area is for the scripts --}}
@endsection

{{-- ################################################# --}}