<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saving;
use App\Models\Record;

class SavingController extends Controller
{
    public function create()
    {
        return view('saving.create');
    }

    public function store(Request $request, Saving $saving, Record $record)
    {
        $saving->fill($request->all());
        $saving->user_id = $request->user()->id;
        $saving->save();
        return redirect('/');
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
