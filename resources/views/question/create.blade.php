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
        <form method="post" action="{{ route('questions.store',['book' => $book]) }}">
            @csrf
            <div class="card mt-3 p-0">
                <h5 class="card-header">1</h5>
                <div class="container-fluid card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <input type="text" name="question" placeholder="問題" class="form-control border-bottom border-2 p-0 ps-1 border-dark"  style="border:none; border-radius: 0px;">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="answer"placeholder="回答" class="form-control border-bottom border-2 p-0 ps-1 border-dark"style="border:none;  border-radius: 0px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end mt-3">
                <button class="btn btn-primary col-3 pt-3 pe-2 ps-2  pb-3 fs-5" type="submit">作成する</button>
            </div>
        </form>
    </div>
</div>
@endsection
