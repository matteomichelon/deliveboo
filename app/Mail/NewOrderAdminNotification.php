<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewOrderAdminNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $new_product;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($_new_product)
    {
        
        $this->$new_product = $_new_product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $data = [
            'new_order' => $this->$new_product
        ];

        return $this->view('emails.new-order-admin-notification', $data);
    }
}
