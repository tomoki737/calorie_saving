<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\User;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        return view('home');
    }
}
