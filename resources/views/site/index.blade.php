{{-- 首頁 --}}
@extends('layouts.app')

@section('content')
    <div id='app'></div>
    <div class="container">

      @if(count($items) >= 1)
        <div class="row row-cols-1 row-cols-md-3">

            @foreach($items as $k)
              <div class="col mb-4">

                <div class="card">
                  <a href="/product/{{ $k->id }}" style="text-decoration:none">
                    @if(isset($k->image_path) AND $k->image_path != 'no_image.jpeg')
                      <img style="width:200px" src="/storage/images/{{$k->image_path}}">
                    @endif

                    <div class="card-body">
                      <h5 class="card-title">{{ $k->name }}</h5>
                      <p class="card-text">${{ $k->price }}</p>
                      <p class="card-text">商品數量: {{ $k->amount }}</p>
                    </div>
                  </a>

                </div>
                @if(Auth::check() AND Auth::user()->role == 'A')
                    <div class="card">
                        <div class="card-body">
                            <a class="nav-link" href="/product/update_{{ $k->id }}">修改商品資訊</a>
                        </div>
                    </div>
                @endif
              </div>

            @endforeach
        </div>

      @else
        <p>OOPS!!還沒有商品喔!!</p>
      @endif

        @yield('content')
        @include('layouts.footer')
    </div>

@endsection