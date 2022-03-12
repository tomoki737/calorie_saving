<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saving;
use App\Models\User;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $user_id = $request->user()->id ?? null;
        $saving = Saving::where('user_id', $user_id)->first();
        return view('home', ['saving' => $saving]);
    }
}
