@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="css/home.css">
@endpush

@push('scripts')
    {{--    page specific script go here--}}
@endpush


@section('content')
{{--    your page specific content goes here--}}
<div class="home">
    <div class="parent">
        <div class="div1">
            <div class="profile background item">
                <div class="ship-name">
                    <h1>Scopus</h1>
                </div>
                <div class="logo">
                    <img src="images\empty_profile_picture.png" alt="profile_picture">
                </div>
            </div>
        </div>

        <div class="div2">
            <div class="background item">
                <div>
                    <h2 class="fw-bold">Van der leun</h2>
                </div>
                <div class="Text">
                    <div>Nummer</div>
                    <div>Website</div>
                    <div>instagram</div>
                    <div>facebook</div>
                </div>
            </div>    
        </div>

        <div class="div3">
            <div class="ship-info background item">
                <h2 class="fw-bold">My ship</h2>
                <div class="Text">
                    <div>Ship info</div>
                    <div>Ship info</div>
                    <div>Ship info</div>
                    <div>Ship info</div>
                </div>
            </div>        
        </div>

        <div class="div4">
            <div class="ship-info2 background item">
                <h2 class="fw-bold">info</h2>
                <div class="Text">
                    <div>info</div>
                    <div>info</div>
                    <div>info</div>
                    <div>info</div>
                </div>
            </div>
        </div>

        <div class="div5">
            <div class="background item">
                <h2 class="fw-bold">Logs</h2>
                <div class="logs">
                    
                </div>
            </div>
        </div>
    </div> 


    





</div>
@endsection




