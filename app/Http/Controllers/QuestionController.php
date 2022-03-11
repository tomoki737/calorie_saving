<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;
use App\Models\Question;
use App\Models\Book;
use GuzzleHttp\Client;

class QuestionController extends Controller
{
    public function create(Request $request, Book $book){
        $book->fill($request->all());
        return view("question/create", ['book' => $book]);
    }

    public function store(QuestionRequest $request, Question $question, Book $book)
    {
        $book->user_id = $request->user()->id;
        $book->fill($request->all());
        $book->save();
        $question->fill($request->all());
        $book->fill($request->all());
        $question->user_id = $request->user()->id;
        $question->book_id = $book->id;
        $question->save();
        return redirect('/');
    }

    public function edit(Question $question) {
        return view('question/edit', ['question' => $question]);
    }
    public function show()
    {
        dd('ai');
    }
    public function update()
    {
        dd('ai');
    }
}
