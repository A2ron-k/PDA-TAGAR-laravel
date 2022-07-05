{{-- ################################################# --}}
@extends('layout')
@section('title', 'Prediction')
{{-- Do not touch layout --}}

{{-- ################################################# --}}

@section('content')
    {{-- This area is for the content --}}

    <div id=info-sympHeader style="">Locate Patient</div>
    <div id="geolocation-container-case">
        <div>
            <iframe id='geolocation-overview'
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=399738+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                    href="https://www.gps.ie/farm-gps/">tractor gps</a></iframe>
        </div>
        {{-- Code below is to draw the postal code from patient to locate--}}
        {{-- <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q={{ $case['postal_code']}}+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/farm-gps/">tractor gps</a></iframe></div> --}}
    </div>

    <div id="geolocation-container-case">
        <img id="geolocation-zoomed"
            src="https://www.moricondo.sg/wp-content/uploads/2021/07/Project_Fascade_For_MORI_Condo_at_Guillemard_Road_Jalan_Molek_Geylang_By_Roxy_Pacific.jpg">
    </div>

    <div id="geolocation-container-case">
        <img id='geolocation-floorplan'
            src="https://mori-residences.sg/wp-content/uploads/2021/11/Mori-Residences-Sitemap-Large.jpg" alt="">
    </div>



@endsection


{{-- ################################################# --}}

@section('script')
    {{-- This area is for the scripts --}}
@endsection

{{-- ################################################# --}}
