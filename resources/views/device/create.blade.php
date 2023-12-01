@extends('layouts.master')

@section('content')

<body>
    <div class="box">
        <div class="inner-box">
            <div class="title">
                <div>Add a component to your ship</div>
                {{-- <div><img src="vanDerLeun-kroon.png" alt=""></div> --}}
            </div>
            <form action="{{Route('device.store')}}" method="post">
                @csrf
                <div class="item">
                    <label for="device name">Device name:</label>
                    <div class="item-input">
                        <input class="input-group" type="text" id="name" name="name" value={{old("name")}}>
                        @error("name")
                            <span style='color:red'>{{$message}}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="item">
                    <label for="type">Choose a brand:</label>
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
                    <label for="type">Choose a type:</label>
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
</body>
</html>

@endsection

<style>
    .body{
        background: rgb(140, 132, 132)
    }

    .box{
        margin-left: 25%; 
        width: 40%;
        height: auto;
        background-color: #f36717;
        padding: 10px;
        border-radius: 10px;
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

    .item-input input{
        /* width: 95%; */

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