@extends('layouts.master')
{{-- @section > @push   and @endpush--}}
@push('styles')
<link rel="stylesheet" href="{{asset('css/starters.css')}}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- <script src="{{ asset('js/starters.js') }}"></script> --}}
@endpush

@section('content')

<div class="item-list">
    <button class="dropdown-btn" data-target="spare1">Spare 1</button>
    <button class="dropdown-btn" data-target="Engine">Engine</button>
    <button class="dropdown-btn" data-target="Transformer call 1">Transformer call 1</button>
    <!-- Add other buttons for different items -->
</div>

<div class="popup-container" id="popup-container">
    <div class="popup" id="popup">
        <h3 class="popup-title"></h3>
        <div class="switch-container">
            <label class="switch">
                <input type="checkbox" class="checkbox">
                <span class="slider"></span>
            </label>
        </div>
    </div>
</div>

@endsection


@push('scripts')
<script>
$(document).ready(function() {
    $('.dropdown-btn').click(function(e) {
        var target = $(this).data('target');
        $('.popup-title').text(target);
        
        var position = $(this).position();
        var topPosition = position.top + $(this).outerHeight();
        var leftPosition = position.left + $(this).outerWidth();
        
        $('#popup-container').css({
            'top': topPosition,
            'left': leftPosition
        }).toggle();
    });

    $('.popup-container').click(function(event) {
        if (!$(event.target).closest('.popup').length) {
            $('#popup-container').hide();
        }
    });

    // Handle individual checkboxes
    $('.checkbox').click(function(event) {
        event.stopPropagation(); // Prevent event bubbling
    });
});

</script>
@endpush