<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->first();
        $items = [
            [
                'title' => 'PHPフレームワーク Laravel Webアプリケーション開発 バージョン5.5 LTS対応=',
                'url' => 'https://www.amazon.co.jp/PHP%E3%83%95%E3%83%AC%E3%83%BC%E3%83%A0%E3%83%AF%E3%83%BC%E3%82%AFLaravel-Web%E3%82%A2%E3%83%97%E3%83%AA%E3%82%B1%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E9%96%8B%E7%99%BA-%E7%AB%B9%E6%BE%A4%E6%9C%89%E8%B2%B4-ebook/dp/B07SPT6XJV/ref=tmm_kin_swatch_0?_encoding=UTF8&qid=&sr=',
                'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51I2lZaKIoL._SX385_BO1,204,203,200_.jpg',
                'registration_price' => '￥3,871',
                'current_price' => '￥3,871'
            ],
            [
                'title' => 'React.js & Next.js超入門',
                'url' => 'https://www.amazon.co.jp/React-js-Next-js%E8%B6%85%E5%85%A5%E9%96%80-%E6%8E%8C%E7%94%B0%E6%B4%A5%E8%80%B6%E4%B9%83-ebook/dp/B07X7DHZ9F/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&dchild=1&keywords=react&qid=1605719580&s=digital-text&sr=1-1',
                'img_url' => 'https://m.media-amazon.com/images/I/51A9Ul-VM5L.jpg',
                'registration_price' => '￥2,673',
                'current_price' => '￥2,673'
            ]
        ];
        foreach ($items as $item) {
            DB::table('items')->insert([
                'title' => $item['title'],
                'url' => $item['url'],
                'img_url' => $item['img_url'],
                'registration_price' => $item['registration_price'],
                'current_price' => $item['current_price'],
                'user_id' => $user->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
