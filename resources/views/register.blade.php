{{-- ################################################# --}}
@extends('unknownLayout')
@section('title', 'Login')
{{-- Do not touch layout --}}

{{-- ################################################# --}}


@section('sub-content')
    {{-- This area is for the content --}}

    <body>
        <div id="form-container">
            <div id="header-login">Sign up to PDA</div>
            <input type="text" id="input-username-login" placeholder="Username">
            <input type="password" id="input-password-login" placeholder="Password">

            <button onclick="register()" id="submit-login">Sign In</button>
        </div>

    </body>



@endsection


{{-- ################################################# --}}

@section('script')
    {{-- This area is for the scripts --}}

    <script type="text/javascript">
        function register() {
            alert('User registered!')
            window.location.href = "/login"
        }
    </script>

@endsection

{{-- ################################################# --}}
