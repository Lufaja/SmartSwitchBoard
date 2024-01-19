@extends('layouts.master')
{{-- @section > @push   and @endpush--}}
@push('styles')
<link rel="stylesheet" href="{{asset('css/engines.css')}}">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

{{-- <script src="{{ asset('js/starters.js') }}"></script> --}}
@endpush

@section('content')

<!-- Grid class="wrapper" The One to Six are the grids  -->
<div class="wrapper">
    <div class="one">
        {{-- Go back Button to return to the previous page --}}
        <a href="{{ route('starters') }}"><button class="button">Go Back</button></a>
        <div class="gauge">
            <div class="gauge__body">
                <div class="gauge__limit"></div>
                <div class="gauge__fill"></div>
                <div class="gauge__fill__80-100"></div>
                <div class="gauge__cover num" data-val="500">
                    <!-- <img src="vanDerLeun-kroon.jpg" alt="kroon">
                    50% -->
                </div>
            <div class="gauge__pin"></div>
            <!-- <div class="gauge__cover2"></div> -->
            <div class="gauge__10"></div>
            <div class="gauge__20"></div>
            <div class="gauge__30"></div>
            <div class="gauge__40"></div>
            <div class="gauge__50"></div>
            <div class="gauge__60"></div>
            <div class="gauge__70"></div>
            <div class="gauge__80"></div>
            <div class="gauge__90"></div>
            </div>
    </div>

    <div class="graph">
        <div class="graph__body">

        </div>
    </div>

    <script>
    </script>
    </div>



  <div class="three">
    
    
  <div style="max-width:600px; height: 250px;">
        <canvas id="engine-temp"></canvas>
    </div>
    <div style="width:300px; height: 100;">
        <canvas id="myChart"></canvas>
    </div>
</div>
  <div class="four"></div>
  <div class="five"></div>
</div>
@endsection

@push('scripts')
<script src="{{asset('script/gauge.js')}}"></script>

@endpush