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
  <div class="center">
    <label for="lube">Lube oil</label>
  </div>
      <div class="button-grid">
          <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">LUB.OIL TRANSFER PUMP GENERATOR ENG</button>
          <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">LUB. OIL TRANSFER PUMP DREDGE ENGINE</button>
          <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">EMERGENCY HOISTING LADDER WINCH</button>
      </div>
      {{-- 2 --}}
<div class="center"><label for="workshop">Workshop</label></div>
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
<div class="center"><label for="cool-water">Cool water</label></div>
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
<div class="center"><label for="hydrolic-oil">Hydrolic oil</label></div>
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
<div class="center"><label for="fuel-oil">Fuel oil</label></div>
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
<div class="center"><label for="accelerie-systems">Accelerie systems</label></div>
  <div class="button-grid">
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">LIGHTING TRANSFORMER 1</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">BILGE OIL WATER SEPARATOR</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">ST-BY RAW C.W PUMP LT AUX SYS</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">DREDGE PUMP DRIVE</button>
        </div>
    </div>
  </div>
  {{-- 7 --}}
<div class="center"><label for="vents">Vents</label></div>
  <div class="button-grid">
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">WORKING AIR COMPRESSOR</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">WASTE OIL TRANSFER PUMP</button>
            <button class="grid-button" onclick="window.location.href = '{{ route('engines') }}'">FAN BRAKE RESISTOR</button>

        </div>
    </div>
  </div>


  
  {{-- These are the buttons for the starters
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
      
  </div> --}}
  
  




@endsection


@push('scripts')
{{-- Add your script in here example:  --}}
{{-- <script src="{{asset('script/gauge.js')}}"></script> --}}
@endpush