{{-- 商品說明 --}}
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-3" style="max-width: 640px;">
            <div class="row no-gutters">

                @if(isset($product->image_path) AND $product->image_path != 'no_image.jpeg')
                    <div class="col-md-4">
                        <img style="width:200px" src="/storage/images/{{$product->image_path}}">
                    </div>
                 @endif

                <div class="col-md-8">
                    {!! Form::open(['action' => 'ShopcartController@store','method' => 'POST','enctype'=>'multipart/form-data']) !!}
                        <div class="card-body" id="{{$product->id}}">
                            {{Form::label('product_name',$product->name)}}
                            <p class="card-text">售價: $
                                {{Form::label('product_price',$product->price)}}
                            </p>
                            <p class="card-text">商品數量:
                                {{Form::label('product->amount',$product->amount)}}
                            </p>
                            {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            <p class="card-text">欲購買數量:
                                {{ Form::selectRange('purchase_number', 1, $product->amount) }}
                            </p>
                            {{ Form::hidden('product_id', $product->id) }}

                            {{ Form::submit('放進購物車',['class' => 'btn btn-primary']) }}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
@endsection