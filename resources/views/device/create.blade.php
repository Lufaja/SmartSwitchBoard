<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
</body>
    <form action="{{Route('device.store')}}" method="post">
        @csrf
        <label for="device name">Device name:</label>
        <input type="text" id="name" name="name" value={{old("name")}}>
        @error("name")
            <span style='color:red'>{{$message}}</span>
        @enderror
        <br>
        
        <label for="type">Choose a brand:</label>
        <select name="brand" id="brand">
            <option disabled selected value></option>
            @foreach(range(0, 10) as $count)
                <option @if(old('brand') == "merk " . $count) selected @endif value="merk {{ $count }}">brand {{ $count }}</option>
            @endforeach
        </select>

        @error("brand")
            <span style='color:red'>{{$message}}</span>
        @enderror
        <br>
        
        <label for="type">Choose a type:</label>
        <select name="type" id="type">
            <option disabled selected value></option>
            @foreach(range(0, 10) as $count)
                <option @if(old('type') == "merk " . $count) selected @endif value="type {{ $count }}">type {{ $count }}</option>
            @endforeach
        </select>
        @error("type")
            <span style='color:red'>{{$message}}</span>
        @enderror
        <br>
        <input type="submit" value="Submit">
    </form>
    
</html>