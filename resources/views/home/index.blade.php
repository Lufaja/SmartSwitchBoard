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
            <div class="profile background">
                <div class="ship-name">
                    <h1>Scopus</h1>
                </div>
                <div class="logo">
                    <img src="images\empty_profile_picture.png" alt="profile_picture">
                </div>
            </div>
        </div>

        <div class="div2">
            <div class="information background">
                <div>
                    <h2 class="fw-bold">Van der leun</h2>
                </div>
                <div class="contact">
                    Nummer
                    Website
                    instagram
                    facebook
                </div>
            </div>    
        </div>

        <div class="div3">
            <div class="ship-info background">
                <h2 class="fw-bold">My ship</h2>
            </div>        
        </div>

        <div class="div4">
            <div class="ship-info2 background">
                .
            </div>
        </div>

        <div class="div5">
            <div class="log background">
                .
            </div>
        </div>
    </div> 


    





</div>
@endsection




