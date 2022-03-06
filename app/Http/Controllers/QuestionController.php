<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Question;
use GuzzleHttp\Client;

class QuestionController extends Controller
{
    public function create($book)
    {
        return view('question.create', ['book' => $book]);
    }

    public function store(QuestionRequest $request, Question $question, $book)
    {
        $items = null;
        $url = 'https://www.googleapis.com/books/v1/volumes?q=' . $book . '&country=JP&tbm=bks&maxResults=1';
        $client = new Client();
        $response = $client->request("GET", $url);
        $body = $response->getbody();
        $bodyArray = json_decode($body, true);
        $item = $bodyArray['items'];
        dd($item);
        $question->fill($request->all());
        $question->user_id = $request->user()->id;
        $question->save();
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
