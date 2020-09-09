<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('../../asset/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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