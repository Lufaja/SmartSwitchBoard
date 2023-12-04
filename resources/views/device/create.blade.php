@extends('layouts.master')

@section('content')

<body>
    <div class="title m-2 fs-2">
        <div class="">Add a device to your ship</div>
    </div>
    <div class="wrapper rounded">
        <div class="box rounded">
            <div class="inner-box">
                <form action="{{Route('device.store')}}" method="post">
                    @csrf
                    <div class="item">
                        <label class="badge bg-primary mb-2" for="device name">Device name:</label>
                        <div class="item-input">
                            <input class="input-group" type="text" id="name" name="name" value={{old("name")}}>
                            @error("name")
                                <span style='color:red'>{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="item">
                        <label class="badge bg-primary mb-2" for="type">Choose a brand:</label>
                        <div class="item-input">
                            <select class="form-select" name="brand" id="brand">
                                <option disabled selected value></option>
                                @foreach(range(0, 10) as $count)
                                    <option @if(old('brand') == "merk " . $count) selected @endif value="merk {{ $count }}">brand {{ $count }}</option>
                                @endforeach
                            </select>
                            <div>
                                @error("brand")
                                    <span style='color:red'>{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <label class="badge bg-primary mb-2" for="type">Choose a type:</label>
                        <div class="item-input">
                            <select class="form-select" name="type" id="type">
                                <option disabled selected value></option>
                                @foreach(range(0, 10) as $count)
                                    <option @if(old('type') == "merk " . $count) selected @endif value="type {{ $count }}">type {{ $count }}</option>
                                @endforeach
                            </select>
                            <div>
                                @error("type")
                                    <span style='color:red'>{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="submit-button ">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

@endsection

<style>
    .body{
        background: rgb(140, 132, 132)
    }

    .wrapper{
        margin: auto;
        width: 98%;
        height: auto;
        background: linear-gradient(70deg, rgb(243, 103, 23), rgb(32, 86, 174));
        padding: 4px;
    }

    .box{
        width: 100%;
        height: auto;
        background-color: white;
        padding: 10px;
        margin: 0px;
        border: 1px solid black;
        
    }
    .item{
        width: 100%;
        padding-top: 10px;
    }

    .title{
        font-size: 150%;
        font-weight: bold
    }
    
    .submit-button{
        display: flex;
        width: 100%;
        padding-top: 10px;
        justify-content: center;
    }

    .input{
        background-color: rgb(44, 196, 44);;
        border:2px solid rgb(44, 196, 44);
        border-radius: 8px;

    }
</style>