{{-- 產品管理頁面(上傳、刪除、更新) --}}
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-sm-9">
        <div class="row">
            <div class="col-4">
                <h6>商品名稱</h6>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="col-2"></div>
        </div>
    </div>

    <div class="col-sm-9">
        <div class="row">
            <div class="col-4">
                <h6>商品價錢</h6>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="col-2"></div>
        </div>
    </div>

</div>
@endsection