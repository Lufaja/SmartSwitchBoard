@extends('layouts.master')
{{-- @section > @push   and @endpush--}}
@push('styles')
<link rel="stylesheet" href="{{asset('css/starters.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

{{-- <script src="{{ asset('js/starters.js') }}"></script> --}}
@endpush

@section('content')
{{-- 1 --}}
<p>
    <a class="btn btn-primary" data-toggle="collapse" href="#lube-oil" role="button" aria-expanded="false" aria-controls="lube-oil">
      Lube oil
    </a>
  </p>
  <div class="collapse" id="lube-oil">
    <div class="card card-body">
        <div class="button-grid">
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">LUB.OIL TRANSFER PUMP GENERATOR ENG</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">LUB. OIL TRANSFER PUMP DREDGE ENGINE</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">EMERGENCY HOISTING LADDER WINCH</button>
        </div>
    </div>
  </div>
  {{-- 2 --}}
<p>
    <a class="btn btn-primary" data-toggle="collapse" href="#workshop" role="button" aria-expanded="false" aria-controls="workshop">
      Workshop
    </a>
  </p>
  <div class="collapse" id="workshop">
    <div class="card card-body">
        <div class="button-grid">
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">HOISTING CRANE ENGINE ROOM</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">DECK CRANE LADDER GANTRY</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">DECK CRANE MID SHIP</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">DECK CRANE AFT SHIP</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">DAVIT FOR M.O.B. BOAT</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">DRILLING MACHINE</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">GRINDING MACHINE</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">WELDING RECTIFIER A</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">WELDING RECTIFIER B</button>
        </div>
    </div>
  </div>
  {{-- 3 --}}
<p>
    <a class="btn btn-primary" data-toggle="collapse" href="#cool-water" role="button" aria-expanded="false" aria-controls="cool-water">
      Cool water
    </a>
  </p>
  <div class="collapse" id="cool-water">
    <div class="card card-body">
        <div class="button-grid">
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">FRESH WATER HYDROPHORE UNIT</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">RAW COOL WATER PUMP LT AUX. SYSTEM</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">FRESH AUX COOL WATER PUMP</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">CIRC. PUMP INT. COOL WATER CUTTER DRIVE</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">HYDRAULIC FILTER/COOLING PUMP</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">ST-BY FRESH AUX. COOL WATER PUMP</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">CIRC. PUMP INT. COOL WATER</button>
        </div>
    </div>
  </div>
  {{-- 4 --}}
<p>
    <a class="btn btn-primary" data-toggle="collapse" href="#hydrolic-oil" role="button" aria-expanded="false" aria-controls="hydrolic-oil">
      Hydrolic oil
    </a>
  </p>
  <div class="collapse" id="hydrolic-oil">
    <div class="card card-body">
        <div class="button-grid">
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">HYDRAULIC PUMP 1 SLIDE VALVES</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">HYDRAULIC PUMP 2 SLIDE VALVES</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">HYDRAULIC OIL TRANSFER PUMP MAIN SPUD</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">HYDRAULIC OIL PUMP 3 SPUDS</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">HYDRAULIC OIL TRANSFER PUMP</button>
        </div>
    </div>
  </div>
  {{-- 5 --}}
<p>
    <a class="btn btn-primary" data-toggle="collapse" href="#fuel-oil" role="button" aria-expanded="false" aria-controls="fuel-oil">
      Fuel oil
    </a>
  </p>
  <div class="collapse" id="fuel-oil">
    <div class="card card-body">
        <div class="button-grid">
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">FUEL OIL COALISTER FILTER</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">FUEL OIL SEPARATOR 1</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">FUEL OIL SEPARATOR 2</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">FUEL OIL TRANSFER PUMP</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">FUEL OIL TRANSFER PUMP</button>
    
        </div>
    </div>
  </div>
  {{-- 6 --}}
<p>
    <a class="btn btn-primary" data-toggle="collapse" href="#accelerie-systems" role="button" aria-expanded="false" aria-controls="accelerie-systems">
      Accelerie systems
    </a>
  </p>
  <div class="collapse" id="accelerie-systems">
    <div class="card card-body">
        <div class="button-grid">
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">LIGHTING TRANSFORMER 1</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">BILGE OIL WATER SEPARATOR</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">ST-BY RAW C.W PUMP LT AUX SYS</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">DREDGE PUMP DRIVE</button>
        </div>
    </div>
  </div>
  {{-- 7 --}}
<p>
    <a class="btn btn-primary" data-toggle="collapse" href="#vents" role="button" aria-expanded="false" aria-controls="vents">
      Vents
    </a>
  </p>
  <div class="collapse" id="vents">
    <div class="card card-body">
        <div class="button-grid">
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">WORKING AIR COMPRESSOR</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">WASTE OIL TRANSFER PUMP</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">FAN BRAKE RESISTOR</button>

        </div>
    </div>
  </div>


  <p>
    <a class="btn btn-primary" data-toggle="collapse" href="#all" role="button" aria-expanded="false" aria-controls="all">
      All
    </a>
  </p>
  <div class="collapse" id="all">
    <div class="card card-body">
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
        </div>
    </div>
  </div>
{{-- These are the buttons for the starters --}}




@endsection


@push('scripts')
{{-- Add your script in here example:  --}}
{{-- <script src="{{asset('script/gauge.js')}}"></script> --}}
@endpush