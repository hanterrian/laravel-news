<?php

namespace App\Console\Commands;

use App\Mail\StoreOrder;
use App\Store;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class StoreSend extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tstore:send';

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
        /** @var Store[] $models */
        $models = Store::where('is_sended', 0)->take(10)->get();

        foreach ($models as $model) {
            Mail::to(['myrchee@gmail.com'])->queue(new StoreOrder($model));

            $model->is_sended = 1;
            $model->save();
        }
    }
}
