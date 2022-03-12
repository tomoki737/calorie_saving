@extends("layouts/app")
@section('title', '作成')
@section('content')
@include('layouts/nav')
<div class="container" style="max-width: 1000px;">
    <div class="row">
        @include('layouts/error')
        <form action="{{route('savings.store')}}" method="post">
            @csrf
            <h3 class="mt-2">目標を作成</h3>
            <p class="mt-5">目標の内容</p>
            <input type="text" class="form-control" name="goal_title">
            <p class="mt-3">目標のカロリー</p>
            <input type="text" class="form-control" name="goal_calorie">
            <div class="text-end mt-3">
                <button class="btn btn-primary col-3 pt-3 pe-2 ps-2  pb-3 fs-5" type="submit">作成する</button>
            </div>
        </form>
    </div>
</div>
@endsection
