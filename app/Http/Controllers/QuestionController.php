<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests\QuestionRequest;
use App\Models\Question;

class QuestionController extends Controller
{
    public function create() {
        return view('question.create');
    }

    public function store(QuestionRequest $request, Question  $question) {
        $question->question = $request->question;
        $question->answer = $request->answer;
        $question->user_id = $request->user()->id;
        $question->save();
        return redirect()->route('questions.index');
        return view('home');
    }

}
