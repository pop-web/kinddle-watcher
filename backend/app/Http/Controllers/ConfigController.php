<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfigController extends Controller
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
     * Show the config.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $config = Auth::user()->first();
        return view('config/index',["config" => $config]);
    }

    public function edit()
    {
        $config = Auth::user()->first();
        return view('config/edit',["config" => $config]);
    }
}
