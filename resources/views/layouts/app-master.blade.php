<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>It-точка | @yield('title')</title>
    @vite(['resources/css/bootstrap.css', 'resources/css/app.css', 'resources/js/bootstrap.bundle.js', 'resources/js/app.js'])
</head>
<body>

@include('layouts.partials.app-header')

@yield('content')

</body>
</html>
