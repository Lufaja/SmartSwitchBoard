@extends('layouts.master')
{{-- @section > @push   and @endpush--}}
@push('styles')
<link rel="stylesheet" href="{{asset('css/starters.css')}}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- <script src="{{ asset('js/starters.js') }}"></script> --}}
@endpush

@section('content')

{{-- These are the buttons for the starters --}}
<div class="button-grid">
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">HOISTING CRANE ENGINE ROOM</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">FUEL OIL COALISTER FILTER</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">DECK CRANE LADDER GANTRY</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">DECK CRANE MID SHIP</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">DECK CRANE AFT SHIP</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">DAVIT FOR M.O.B. BOAT</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">LIGHTING TRANSFORMER 1</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">FUEL OIL SEPARATOR 1</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">FUEL OIL SEPARATOR 2</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">BILGE OIL WATER SEPARATOR</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">WORKING AIR COMPRESSOR</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">FRESH WATER HYDROPHORE UNIT</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">DRILLING MACHINE</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">GRINDING MACHINE</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">WELDING RECTIFIER A</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">WELDING RECTIFIER B</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">HYDRAULIC PUMP 1 SLIDE VALVES</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">HYDRAULIC PUMP 2 SLIDE VALVES</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">HYDRAULIC OIL TRANSFER PUMP MAIN SPUD</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">HYDRAULIC OIL PUMP 3 SPUDS</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">HYDRAULIC OIL TRANSFER PUMP</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">FUEL OIL TRANSFER PUMP</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">FUEL OIL TRANSFER PUMP</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">LUB. OIL TRANSFER PUMP DREDGE ENGINE</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">WASTE OIL TRANSFER PUMP</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">RAW COOL WATER PUMP LT AUX. SYSTEM</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">ST-BY RAW C.W PUMP LT AUX SYS</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">FRESH AUX COOL WATER PUMP</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">ST-BY FRESH AUX. COOL WATER PUMP</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">EMERGENCY HOISTING LADDER WINCH</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">HYDRAULIC FILTER/COOLING PUMP</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">CIRC. PUMP INT. COOL WATER</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">DREDGE PUMP DRIVE</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">CIRC. PUMP INT. COOL WATER CUTTER DRIVE</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">FAN BRAKE RESISTOR</button>
    <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">LUB.OIL TRANSFER PUMP GENERATOR ENG</button>
    
</div>



@endsection


@push('scripts')
{{-- Add your script in here example:  --}}
{{-- <script src="{{asset('script/gauge.js')}}"></script> --}}
@endpush