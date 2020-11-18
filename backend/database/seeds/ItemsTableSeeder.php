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
        $items = [
            [
                'title' => 'PHPフレームワーク Laravel Webアプリケーション開発 バージョン5.5 LTS対応=',
                'url' => 'https://www.amazon.co.jp/PHP%E3%83%95%E3%83%AC%E3%83%BC%E3%83%A0%E3%83%AF%E3%83%BC%E3%82%AFLaravel-Web%E3%82%A2%E3%83%97%E3%83%AA%E3%82%B1%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E9%96%8B%E7%99%BA-%E7%AB%B9%E6%BE%A4%E6%9C%89%E8%B2%B4-ebook/dp/B07SPT6XJV/ref=tmm_kin_swatch_0?_encoding=UTF8&qid=&sr='
            ],
            [
                'title' => 'React.js & Next.js超入門',
                'url' => 'https://www.amazon.co.jp/React-js-Next-js%E8%B6%85%E5%85%A5%E9%96%80-%E6%8E%8C%E7%94%B0%E6%B4%A5%E8%80%B6%E4%B9%83-ebook/dp/B07X7DHZ9F/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&dchild=1&keywords=react&qid=1605719580&s=digital-text&sr=1-1'
            ]
        ];
        foreach ($items as $item) {
            DB::table('items')->insert([
                'title' => $item['title'],
                'url' => $item['url'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        $urls = [



        ];
        foreach ($urls as $url) {
            DB::table('items')->insert([
                'url' => $url,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
