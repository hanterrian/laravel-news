<?php

namespace App\Mail;

use App\Store;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class StoreOrder extends Mailable
{
    use Queueable, SerializesModels;

    /** @var Store */
    public $store;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('myrchee@gmail.com')
            ->subject("Form data from: {$this->store->site}")
            ->view('mail.storeOrder')
            ->with(['store' => $this->store]);
    }
}
