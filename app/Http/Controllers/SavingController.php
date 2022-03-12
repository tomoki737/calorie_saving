<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saving;

class SavingController extends Controller
{
    public function create()
    {
        return view('saving.create');
    }

    public function store(Request $request, Saving $saving)
    {
    }

    public function edit()
    {
    }
    public function show()
    {
    }
    public function update()
    {
    }
}
