<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->
</head>
<body>
    <!-- header -->
    <!-- nav -->
    @include('layouts.partials.header')

    @yield('content')
    <!-- footer -->
    {{-- @include('layouts.partials.footer')

    {{-- flotante --}}
    {{-- @include('layouts.partials.flotante') --}}
    <!-- script -->
    {{-- <script src="{{asset('js/app.js')}}"></script> --}}
    
    
</body>
</html>