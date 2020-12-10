<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte\Client;
use App\Item;
use App\Mail\EmailNotification;
use Illuminate\Support\Facades\Mail;

class ItemScraping extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ItemScraping';

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
        $items = Item::all();
        foreach ($items as $item){
            $client = new Client();
            $crawler = $client->request('GET', $item->url);
            $itemPrice = $crawler->filter('#buybox')->filter('.kindle-price')->filter('.a-size-large')->filter('span')->last()->text();
            $intItemPrice = (int)str_replace(',', '',preg_replace('/￥/','',$itemPrice));
            if(($item->registration_price > $intItemPrice) && ($item->status == config('const.ITEM_STATUS.NORMAL'))){
                $item->status = config('const.ITEM_STATUS.SALE');
                $item->current_price = $intItemPrice;
                $item->save();
                $user = Item::find($item->id)->user;
                $email = new EmailNotification($item);
                Mail::to($user->email)->send($email);
            }
        }
    }
}
