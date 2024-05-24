<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\OrderNotification;
use App\Models\Order;

class NotificationController extends Controller
{
    public function __construct()
    {
        /* $this->middleware('auth');
        $this->middleware([
            'permission:mark_all_notifications',
            'permission:mark_a_notification'
        ]); */
    }

    public static function mark_all_notifications(){
        auth()->user()->unreadNotifications->markAsRead();
        return redirect()->route('admin.pedido.index')->with('toast_info', '¡Todas las notificaciones se marcaron como leídas!');
    }
    public function mark_a_notification($notification_id, $order_id){
        auth()->user()->unreadNotifications->when($notification_id, function($query) use ($notification_id){
            return $query->where('id',$notification_id);
        })->markAsRead();
        $order = Order::find($order_id);
        return redirect()->route('orders.show', $order)->with('toast_info', '¡La notificación se marcó como leída!');
    }
}