<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Scriptotek\GoogleBooks\GoogleBooks;
class BooksController extends Controller
{
    public function index(Request $request) {
        $data = [];
        $items = null;

        if(!empty($request->keyword))
        {
            $title = urlencode($request->keyword);
            $url = 'https://www.googleapis.com/books/v1/volumes?q=' . $title . '&country=JP&tbm=bks';
            $client = new Client();
            $response = $client->request("GET", $url);
            $body = $response->getbody();
            $bodyArray = json_decode($body, true);
            $items = $bodyArray['items'];
            $data = [
                'items' => $items,
                'keyword' => $request->keyword,
            ];
            return view('books/search', $data);
        }
    }
}
