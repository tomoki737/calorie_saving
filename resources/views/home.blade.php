@extends("layouts/app")
@section('title', 'ホーム画面')
@section('content')
@include('layouts/nav')
<div class="container" style="max-width: 1000px;">
    <div class="row">
        <h3>あなたの目標</h3>
        @if($saving)
        <h3> {{ $saving->goal_title }} </h3>
        @endif
    </div>
</div>
@endsection
