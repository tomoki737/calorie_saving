@extends("layouts/app")
@section('title', '本を検索')
@section('content')
@include('layouts/nav')
<div class="container" style="max-width: 1000px;">
    <div class="row">
        <h1 class="mt-2">本を検索</h3>
            <form action="{{ route('books.index') }}" method="get">
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="書籍名" name="keyword" value="{{ $keyword }}">
                </div>
            </form>
            @if ($items == null)
            <p>書籍名を入力してください。</p>
            @else (count($items) > 0)
            <p>「{{ $keyword }}」の検索結果</p>
            <hr>
            @foreach ($items as $item)
            <h2>{{ $item['volumeInfo']['title']}}</h2>
            @if (array_key_exists('imageLinks', $item['volumeInfo']))
            <img src="{{ $item['volumeInfo']['imageLinks']['thumbnail']}}" style="max-width: 200px"><br>
            @endif
            @if (array_key_exists('description', $item['volumeInfo']))
            <p>発売年月:{{ $item['volumeInfo']['publishedDate']}}</p>
            @endif
            @if (array_key_exists('description', $item['volumeInfo']))
            <p>概要:{{ $item['volumeInfo']['description']}}</p>
            @endif
            <form action="{{ route('questions.create', ['book' => $item['volumeInfo']['title']]) }}" method="get">
                <input type="hidden" name="google_books_id" value="{{ $item['id'] }}"></input>
                <button type="submit
                " class="btn btn-primary text-white">作成する</button>
            </form>
            <hr>
            @endforeach
            @endif
    </div>
</div>
