@extends("layouts/app")
@section('title', 'ホーム画面')
@section('content')
@include('layouts/nav')
<div class="container" style="max-width: 1000px;">
    <div class="row">
        <h3>あなたの問題</h3>
        <hr>
        @if($my_question)
        <a href="#"><img src="{{ $my_question->book->thumbnail_url }}" style="max-width: 200px"></a>
        <p>{{ $my_question->created_at }}</p>
        @endif
    </div>
</div>
@endsection
