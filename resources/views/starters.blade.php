@extends('layouts.master')
@section('style')
<link rel="stylesheet" href="{{asset('css/starters.css')}}">

@endsection

@section('content')

<body>
    {{-- A dropside menu for  --}}
    <div class="dropup">
        <button class="dropbtn1">Dropup</button>
        <div class="dropup-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>  
</body>




@endsection
