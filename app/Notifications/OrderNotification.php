<?php

namespace App\Notifications;


use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Http\Controllers\NotificationController;


class OrderNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        //return ['mail','database'];

        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    
                    ->line('¡Nuevo Pedido!.')
                    ->line($this->order->user->name.'Ha realizado un nuevo pedido.')
                    ->action('Ver detalle pedido', route('admin.pedido.index',$this->order));
                    
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'order_date'    => $this->order->order_date,
            'user_id'       => $this->order->user_id,
            'id'            => $this->order->id,
            'name'          => $this->order->user->name,
            'icon'          => 'fa-shopping-cart',
            'title'         => 'N.P.',    
            //'total'         => $this->order->total
        ];
    }
}
