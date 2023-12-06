<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @stack('styles')
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>
<body>

@include('layouts.nav')

@yield('content')

@include('layouts.footer')
<script src="{{asset('script/script.js')}}"></script>
@stack('scripts')
</body>
</html>
