<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Item::orderBy('created_at', 'desc')->get();
        return view('mypage/index',["items" => $items]);
    }

    public function create(Request $request)
    {
        $item = new Item();
        $item->url = $request->url;
        $item->title = $request->title;
        $item->img_url = $request->img_url;
        $item->price = $request->price;
        Auth::user()->items()->save($item);

        return redirect()->route('mypage.index');
    }

    public function delete(Request $request)
    {
        $item = Item::find($request->item_id);
        $item->delete();
        return redirect()->route('mypage.index');
    }
}
