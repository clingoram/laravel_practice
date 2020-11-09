@extends('layouts.app')

@section('content')
    <div id='app'></div>
    <div class="container">

        <div class="row row-cols-1 row-cols-md-3">
            @foreach($items as $k)
            <div class="col mb-4">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">{{ $k->name }}</p>
                    <p class="card-text">${{ $k->price }}</p>
                </div>
              </div>
            </div>
            @endforeach
        </div>

        @yield('content')
        @include('layouts.footer')
    </div>

@endsection