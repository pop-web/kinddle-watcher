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

        // S3画像URLの生成
        $config->file_url = Storage::disk('s3')->url($config->file_name);

        return view('config/index', ["config" => $config]);
    }

    public function create()
    {
        $config = Auth::user();

        // S3画像URLの生成
        $config->file_url = Storage::disk('s3')->url($config->file_name);

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

        if ($request->file('file_name')) {
            // 現在画像ファイルの削除
            Storage::disk('s3')->delete('/', $config->file_name,'public');

            $path = Storage::disk('s3')->putFile('/', $request->file('file_name'), 'public');
            $config->file_name = $path;
        }

        $config->save();

        return redirect()->route("config.index");
    }

    public function destroy($id)
    {
        Auth::user()->delete();
        return redirect()->route('home');
    }
}
