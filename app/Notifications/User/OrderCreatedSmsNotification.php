<?php

namespace App\Notifications\User;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Notification;

class OrderCreatedSmsNotification extends Notification
{
    use Queueable;

    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }


    public function via($notifiable)
    {
        return ['nexmo'];
    }

    public function toNexmo($notifiable)
    {

        $message = new NexmoMessage();
        $message->content('The order was purchased for'.$this->order->amount);
        return $message;
    }
}
