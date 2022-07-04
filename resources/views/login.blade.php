{{-- ################################################# --}}
@extends('layout')
@section('title', 'Login')
{{-- Do not touch layout --}}

{{-- ################################################# --}}

@section('sub-content')
{{-- This area is for the content --}}
<body>
    <div>
        <img src="{{url('img/vector-user.png')}}" id="img-user-login">
        <input type="text" id="input-username-login" placeholder="Username">
        <input type="password" id="input-password-login" placeholder="Password">
    
        <button onclick="location.href = '/cases/ID100000'" id="submit-login">Sign In</button>
    </div>
    
</body>



@endsection


{{-- ################################################# --}}

@section('script')
{{-- This area is for the scripts --}}
@endsection

{{-- ################################################# --}}