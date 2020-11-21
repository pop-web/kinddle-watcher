<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte\Client;

class itemScraping extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:itemScraping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.amazon.co.jp/PHP%E3%83%95%E3%83%AC%E3%83%BC%E3%83%A0%E3%83%AF%E3%83%BC%E3%82%AF-Laravel-Web%E3%82%A2%E3%83%97%E3%83%AA%E3%82%B1%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E9%96%8B%E7%99%BA-%E3%83%90%E3%83%BC%E3%82%B8%E3%83%A7%E3%83%B35-5-LTS%E5%AF%BE%E5%BF%9C/dp/4802611846/ref=pd_bxgy_img_3/357-9882718-2115317?_encoding=UTF8&pd_rd_i=4802611846&pd_rd_r=363b7d92-fb01-4010-9ff7-fea251716303&pd_rd_w=ClFc2&pd_rd_wg=9jBz2&pf_rd_p=e64b0a81-ca1b-4802-bd2c-a4b65bccc76e&pf_rd_r=4NMJR01VDTVX207JSW1D&psc=1&refRID=4NMJR01VDTVX207JSW1D');
        $crawler->filter('#title')->each(function ($title) {
            dd($title->text());
        });
    }
}
