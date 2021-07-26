<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewOrderGuestNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $order;
    protected $restaurantName;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($_order, $_restaurantName)
    {
        $this->order = $_order;
        $this->restaurantName = $_restaurantName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [
            'order' => $this->order,
            'restaurantName' => $this->restaurantName
        ];

        return $this->view('emails.new-order-guest-notification', $data);
    }
}
