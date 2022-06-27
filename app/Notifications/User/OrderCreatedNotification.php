<?php

namespace App\Notifications\User;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Notification;

class OrderCreatedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $order;
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function via($notifiable)
    {
        return ['database', 'broadcast'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'customer_id' => $this->order->user_id,
            'customer_name' => $this->order->name,
            'order_id' => $this->order->id,
            'amount' => $this->order->amount,
            'order_url' => route('order.details', $this->order->id),
            'created_date' => $this->order->created_at->format('M d, Y'),
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'data' => [
                'customer_id' => $this->order->user_id,
                'customer_name' => $this->order->name,
                'order_id' => $this->order->id,
                'amount' => $this->order->amount,
                'order_url' => route('order.details', $this->order->id),
                'created_date' => $this->order->created_at->format('M d, Y'),
            ],
             'onQueue'  =>('broadcasts')
        ]);
    }

//    public function toNexmo($notifiable)
//    {
//        $body = sprintf(
//            '%s تم شراء طلب مبلغ بقيمة %s',
//            $this->order->amount,
//
//        );
//        $message = new NexmoMessage();
//        $message->content($body);
//
//        return $message;
//    }
}
