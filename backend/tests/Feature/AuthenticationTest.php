<?php

namespace Tests\Feature;

use App\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;

class AuthenticationTest extends TestCase
{
    // テストケースごとにデータベースをリフレッシュしてマイグレーションを再実行する
    //use RefreshDatabase;

    /** @test */
    public function ログイン画面表示()
    {
        $response = $this->get('login');

        $response->assertStatus(200);
    }
    /** @test */
    public function マイページからログイン画面リダイレクト()
    {
        $this->get('mypage')
            ->assertRedirect('login');
    }

    /** @test */
//    public function ユーザログイン認証()
//    {
//        // ユーザーを１つ作成
//        $user = factory(User::class)->create([
//            'password'  => bcrypt('test1234')
//        ]);
//
//        // まだ、認証されていない
//        $this->assertFalse(Auth::check());
//
//        // ログインを実行
//        $response = $this->post('login', [
//            'email'    => $user->email,
//            'password' => 'test1111'
//        ]);
//        dd($response);
//    }
}
