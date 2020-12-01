<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Goutte\Client;
use Log;

class ScrapeController extends Controller
{
    public function index(Request $request,Item $item)
    {
        $item_count = $item->where('user_id', Auth::user()->id)->count();
        if($item_count >= config('const.Items.LIMIT_COUNT')) return abort(400, '登録できるのは10件までです。');

        $client = new Client();
        $crawler = $client->request('GET', $request->targetUrl);
        $itemSubTitle = $crawler->filter('#productSubtitle')->first()->text();
        if($itemSubTitle !== "Kindle版") return abort(400, 'Kindle版ではありません。');
        $itemTitle = $crawler->filter('#productTitle')->first()->text();
        $itemUrl = $request->targetUrl;
        $itemImgUrl = $crawler->filter('#ebooksImgBlkFront')->first()->attr('src');
        $itemPrice = $crawler->filter('#buybox')->filter('.kindle-price')->filter('.a-size-large')->filter('span')->last()->text();
        return [
            "title" => $itemTitle,
            "url" => $itemUrl,
            "img_url" => $itemImgUrl,
            "registration_price" => $itemPrice
        ];
    }
}
