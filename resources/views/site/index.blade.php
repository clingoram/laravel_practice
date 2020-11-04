@extends('layouts.app')

@section('content')
    <div id='app'></div>
    <div class="container">
        @yield('content')
    </div>

    @include('layouts.footer')
@endsection