@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="css/home.css">
@endpush

@push('scripts')
    {{--    page specific script go here--}}
@endpush


@section('content')
{{--    your page specific content goes here--}}

<div class="home" id="home">
    <div class="parent">
        <div class="div1">
            <div id="div1" class="profile background item">
                <div class="ship-name">
                    <h1>Aeolus</h1>
                </div>
                <div class="logo">
                    <img src="images\AEOLUS.jpg" alt="profile_picture">
                </div>
            </div>
        </div>

        <div class="div2" >
            <div id="div2" class="background item Text">
                <div>
                    <h2 class="fw-bold">Van der leun</h2>
                </div>
                <div class="    ">
                    <div>info@royalvanderleun.com</div>
                    <div>+31 (0)184 413 288</div>
                    <div><a href="vanderleun.nl" target="_blank">vanderleun.nl</a></div>
                    <div><a href="https://www.instagram.com/royalvanderleun/" target="blank">instagram</a></div>
                    <div><a href="https://www.facebook.com/bvvanderleun/" target="blank">facebook</a></div>
                </div>
                <div class="info-logo">
                    <img src="images/logo.svg" alt="logo">
                </div>
            </div>    
        </div>

        <div class="div3">
            <div id="div3" class="ship-info background item Text">
                <h2 class="fw-bold">My ship</h2>
                <div class="">
                    <div>IMO: 9612636</div>
                    <div>General vessel type: Cargo</div>
                    <div>MMSI: 245179000</div>
                    <div>Call sign: PCRR</div>
                    <div>Gross Tonnage: 19848</div>
                    <div>Summer DWT: 6500 t</div>
                    <div>Length Overall x Breadth Extreme: 139.4 x 44.4 m</div>
                </div>
            </div>        
        </div>

        <div class="div4">

            <div id="div4" class="ship-info2 background item Text">
                <h2 class="fw-bold">location info</h2>
                <div class="">
                    <div>Position received: 2024-01-13 14:10 LT (UTC -5)</div>
                    <div>Area: USEC - US East Coast</div>
                    <div>Navigational Status: Moored</div>
                    <div>Speed/Course: 0 kn / 16 °</div>
                    <div>Reported Destination: SOUTHFORK WINDFARM</div>
                </div>
            </div>
        </div>

        <div class="div5">
            <div id="div5" class="background item">
                <h2 class="fw-bold">Logs</h2>
                <div class="logs">
                    <div>- 83f8839 (HEAD -> F-15-Homepagina, tag: v0.5.0, origin/dev, origin/F-15-Homepagina, dev) Merge pull request #32 from Lufaja/user-seeder</div>
                    <div>- b5832ff (origin/user-seeder) added user seeder for the database with test account</div>
                    <div>- 02aba8a Merge pull request #31 from Lufaja/Feat-4-templating</div>
                    <div>- 01bf659 (origin/Feat-4-templating, Feat-4-templating) Logo fix</div>
                    <div>- d9a8369 Merge pull request #29 from Lufaja/Feat-4-templating</div>
                    <div>- bd02444 Updated navbar route names</div>
                    <div>- 36f044f Updated navbar routes</div>
                    <div>- df9951d Merge pull request #23 from Lufaja/Feat-4-templating</div>
                    <div>- 6ba7621 Logo href updated</div>
                </div>
            </div>
        </div>
    </div> 


    





</div>
@endsection
