<?php

namespace App\Notifications\User;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ConfirmOrderNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $order;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }


    public function via($notifiable)
    {
        return ['database','broadcast'];
    }


    public function toDatabase($notifiable)
    {
        return [
            'customer_name' => $this->order->name,
            'order_id' => $this->order->id,
            'amount' => $this->order->amount,
            'created_date' => $this->order->created_at->format('M d, Y'),
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'data' => [
                'customer_name' => $this->order->name,
                'order_id' => $this->order->id,
                'amount' => $this->order->amount,
                'created_date' => $this->order->created_at->format('M d, Y'),
            ],
            'onConnection' => ('redis'),
            'onQueue'  =>('broadcasts')
        ]);
    }
}
