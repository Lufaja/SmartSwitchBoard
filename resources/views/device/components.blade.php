<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($devices as $device)
            <li>{{ $device->name }} - {{ $device->brand }} - {{ $device->type }}</li>
            <form action="{{route('device.destroy',['device'=>$device->id])}}"><button type="submit" onclick="return confirm('Are you sure')">Delete</button></form>
        @endforeach
    </ul>
    <a href="{{Route('device.create')}}">Go back</a>
</body>
</html>