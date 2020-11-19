<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateItem;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create(CreateItem $request)
    {
        $item = new Item();
        $item->url = $request->url;
        $item->title = "テスト";
        $item->save();

        return redirect()->route('mypage.index');
    }
}
