{{-- ################################################# --}}
@extends('unknownLayout')
@section('title', 'Login')
{{-- Do not touch layout --}}

{{-- ################################################# --}}

@section('sub-content')
    {{-- This area is for the content --}}

    <body>
        <div id="form-container">
            <div id="header-login">Sign in to PDA</div>
            <form>
                <input type="text" id="input-username-login" placeholder="Username" required>
                <input type="password" id="input-password-login" placeholder="Password" required>

                <button onclick="location.href = '/cases/1'" id="submit-login">Sign In</button>
            </form>
        </div>

    </body>



@endsection


{{-- ################################################# --}}

@section('script')
    {{-- This area is for the scripts --}}
@endsection

{{-- ################################################# --}}
