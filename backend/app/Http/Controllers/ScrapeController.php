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
        $itemTitle = $crawler->filter('#title')->first()->text();
        $itemUrl = $request->targetUrl;
        $itemImgUrl = $crawler->filter('#ebooksImgBlkFront')->first()->attr('src');
        $itemPrice = $crawler->filter('#buybox')->filter('.kindle-price')->filter('.a-size-large')->first()->text();
        return [
            "title" => $itemTitle,
            "url" => $itemUrl,
            "img_url" => $itemImgUrl,
            "price" => $itemPrice
        ];
    }
}
