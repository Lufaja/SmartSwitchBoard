@extends('layouts.master')

@section('content')


@push('styles')
    <link href="{{ asset('css/components.css') }}" rel="stylesheet">
@endpush
<body>
    <ul class="lijst">
        @foreach ($devices as $device)
            <li>{{ $device->name }} - {{ $device->brand }} - {{ $device->type }}</li>
            <form action="{{route('device.destroy',['device'=>$device->id])}}"><button type="submit" onclick="return confirm('Are you sure')">Delete</button></form>
        @endforeach
    </ul>
    <a href="{{Route('device.create')}}">Go back</a>
</body>
</html>
@endsection
