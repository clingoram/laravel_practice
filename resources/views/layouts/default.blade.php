<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Scripts -->
    {{-- <script src="js/app.js"></script> --}}
</head>
<body>
    @section('sidebar')
        這是側選單
    @show

    <div class="container">
        @yield('content')
    </div>

    @include('layouts.footer')

</body>
</html>