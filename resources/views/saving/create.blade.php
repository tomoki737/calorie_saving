@extends("layouts/app")
@section('title', '作成')
@section('content')
@include('layouts/nav')
<div class="container" style="max-width: 1000px;">
    <div class="row">
        @include('layouts/error')
        <h3 class="mt-2">目標を作成</h3>
        
    </div>
</div>
@endsection
