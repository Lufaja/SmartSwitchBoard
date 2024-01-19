@extends('layouts.master')
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

@endsection