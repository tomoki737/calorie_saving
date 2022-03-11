<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\User;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $user = $request->user()->id ?? null;
        $my_question = Question::where('user_id', $user)->first();
        return view('home', ['my_question' => $my_question]);
    }
}
