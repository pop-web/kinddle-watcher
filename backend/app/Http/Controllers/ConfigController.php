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
        $config = Auth::user();
        return view('config/index', ["config" => $config]);
    }

    public function edit()
    {
        $config = Auth::user();
        return view('config/edit', ["config" => $config]);
    }

    public function update(Request $request)
    {
        $config = Auth::user();
        $config->email = $request->email;
        if ($request->notice) {
            $config->notice = $request->notice;
        } else {
            $config->notice = 0;
        }
        $config->save();

        return redirect()->route("config.index");
    }

    public function delete()
    {
        Auth::user()->delete();
        return redirect()->route('home');
    }
}
