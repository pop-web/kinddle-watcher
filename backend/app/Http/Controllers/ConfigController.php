<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function create()
    {
        $config = Auth::user();
        return view('config/edit', ["config" => $config]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email:rfc,dns|max:255|unique:users,email,' . Auth::user()->id . 'id',
            'file_name' => ['file', 'mimes:jpeg,png,jpg,bmb', 'max:2048'],
        ]);
        $config = Auth::user();
        $config->email = $request->email;
        if ($request->notice) {
            $config->notice = $request->notice;
        } else {
            $config->notice = 0;
        }

        // 現在画像ファイルの削除
        Storage::delete('public/images/' . $config->file_name);

        $path = $request->file('file_name')->store('public/images');
        $config->file_name = basename($path);

        $config->save();

        return redirect()->route("config.index");
    }

    public function destroy($id)
    {
        Auth::user()->delete();
        return redirect()->route('home');
    }
}
