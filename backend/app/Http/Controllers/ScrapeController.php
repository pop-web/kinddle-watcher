<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Log;

class ScrapeController extends Controller
{
    public function index(Request $request)
    {
        $client = new Client();
        $crawler = $client->request('GET', $request->targetUrl);
        $itemTitle = $crawler->filter('#title')->each(function ($title) {
            return $title->text();
        });
        return ["title" => $itemTitle[0]];
    }
}
