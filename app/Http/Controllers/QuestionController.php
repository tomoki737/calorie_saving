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
        $question->fill($request->all());
        $book->fill($request->all());
        $question->user_id = $request->user()->id;
        $question->save();
        $book->user_id = $request->user()->id;
        $book->question_id = $question->id;
        $book->save();
        return view('home');
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
