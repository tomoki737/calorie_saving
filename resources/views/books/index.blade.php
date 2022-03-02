@extends("layouts/app")
@section('title', '本を検索')
@section('content')
@include('layouts/nav')
<div class="container" style="max-width: 1000px;">
    <div class="row">
        <h1 class="mt-2">本を検索</h3>
            <body>
                <form action="{{ route('books.index') }}" method="get">
                    <div class="col-sm-5">
                        <!-- <input type="text" placeholder="書籍名" class="form-control border-bottom border-2 p-0 border-dark" name="keyword" value="{{ $keyword }}" style="border:none; border-color: inherit; box-shadow: none; border-radius: 0px;"> -->
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="書籍名"  name="keyword" value="{{ $keyword }}">
</div>
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
                <hr>
                @endforeach
                @endif
    </div>
</div>
