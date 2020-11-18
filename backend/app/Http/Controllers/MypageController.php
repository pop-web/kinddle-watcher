<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

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
        $items = Item::all();
        return view('mypage/index',["items" => $items]);
    }
}
