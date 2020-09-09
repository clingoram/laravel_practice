{{-- 首頁 --}}
@extends('layouts.default')


@foreach($items as $k)
    <li>Name: {{ $k->name}}</li>
    <li>Price: {{ $k->price }}</li>
@endforeach
