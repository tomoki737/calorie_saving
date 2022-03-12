@extends("layouts/app")
@section('title', '作成')
@section('content')
@include('layouts/nav')
<div class="container" style="max-width: 1000px;">
    <div class="row">
        @include('layouts/error')
        <h3 class="mt-2">問題を新規作成</h3>
        <div class="mt-5">
            <input type="text" placeholder="タイトルを入力してください" class="form-control border-bottom bg-light p-0" id="title" style="border:none; border-color: inherit; box-shadow: none;">
        </div>
        <form method="post" action="{{ route('questions.store') }}">
            @csrf
            @include("question/form")
            <input type="hidden" name="google_books_id" value="{{ $book->google_books_id }}"></input>
            <input type="hidden" name="title" value="{{ $book->title }}"></input>
            <input type="hidden" name="published_date" value="{{ $book->published_date }}"></input>
            <input type="hidden" name="thumbnail_url" value="{{ $book->thumbnail_url }}"></input>
            <div class="text-end mt-3">
                <button class="btn btn-primary col-3 pt-3 pe-2 ps-2  pb-3 fs-5" type="submit">作成する</button>
            </div>
        </form>
    </div>
</div>
@endsection
