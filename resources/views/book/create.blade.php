@extends("layouts/app")
@section('title', '作成')
@section('content')
@include('layouts/nav')
<div class="container" style="max-width: 1000px;">
    <div class="row">
        <h3 class="mt-2">問題を新規作成</h3>
        <div class="mt-5">
            <input type="text" placeholder="タイトルを入力してください" class="form-control border-bottom bg-light p-0" id="title" style="border:none; border-color: inherit; box-shadow: none;">
        </div>
        <div class="card mt-3 p-0">
        <h5 class="card-header">1</h5>
            <div class="container-fluid card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <input type="text" placeholder="質問" class="form-control border-bottom border-2 p-0 border-dark" id="question" style="border:none; border-color: inherit; box-shadow: none; border-radius: 0px;">
                    </div>
                    <div class="col-sm-5">
                        <input type="text" placeholder="回答" class="form-control border-bottom border-2 p-0 border-dark" id="answer" style="border:none; border-color: inherit; box-shadow: none; border-radius: 0px;">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
