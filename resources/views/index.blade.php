<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  <title>Online Shop</title>
</head>

<body>
  <div id="app">
    <!-- header here-->
    <header-component></header-component>
    <!-- content here-->
    <index-component></index-component>
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
  {{-- Vue Dev. Tools --}}
  <script src="http://localhost:8098"></script>
</body>

</html>