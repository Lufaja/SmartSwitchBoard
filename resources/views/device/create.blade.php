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
        <input type="text" id="name" name="name">
        @error("name")
            <span style='color:red'>{{$message}}</span>
        @enderror
        <br>
        
        <label for="brand">Choose a brand:</label>
        <select name="brand" id="brand">
            <option disabled selected value></option>
            <option value="merk 1">merk 1</option>
            <option value="merk 2">merk 2</option>
            <option value="merk 3">merk 3</option>
            <option value="merk 4">merk 4</option>
        </select>
        @error("brand")
            <span style='color:red'>{{$message}}</span>
        @enderror
        <br>
        
        <label for="type">Choose a type:</label>
        <select name="type" id="type">
            <option disabled selected value></option>
            <option value="type 1">type 1</option>
            <option value="type 2">type 2</option>
            <option value="type 3">type 3</option>
            <option value="type 4">type 4</option>
        </select>
        @error("type")
            <span style='color:red'>{{$message}}</span>
        @enderror
        <br>
        <input type="submit" value="Submit">
    </form>
    
</html>