@extends('layouts.master')

@section('content')


@push('styles')
    <link href="{{ asset('css/components.css') }}" rel="stylesheet">
@endpush
<body>
    <div class="d-flex justify-content-between">
        <h1 class="fw-bold m-2">Devices</h1>
        <form class="mt-auto" action="{{Route('device.create')}}"><button class="m-2  btn btn-primary">Add device</button></form>
    </div>

    @foreach ($devices as $device)
    <div class="wrapper rounded">
        <div class="item-main rounded-3">
            <div class="item-border">
                <div class="text-primary fs-2 fw-bold">{{$device->name}}</div>
                <div class="item">
                    <div class="badge bg-primary">Device brand</div>
                    <div>
                        - {{$device->brand}}
                    </div>
                </div>
                <div class="item">
                    <div class="badge bg-primary">Device type</div>
                    <div>
                        - {{$device->type}}
                    </div>
                </div>
            </div>

            <div class="arrow">
                <button class="btn"><i class="bi bi-arrow-down" style="font-size:25px"></i></button>
            </div>

            <div class="mt-auto">
                <form action="{{route('device.destroy',['device'=>$device->id])}}"><button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure')">Delete</button></form>
            </div>
        </div>
    </div>
    {{-- <ul class="lijst">
            <li>{{ $device->name }}</li>
            <li>{{ $device->brand }}</li>
            <li>{{ $device->type }}</li>
            <form action="{{route('device.destroy',['device'=>$device->id])}}"><button type="submit" onclick="return confirm('Are you sure')">Delete</button></form>
        </ul> --}}
    @endforeach
    
</body>
</html>
@endsection
