<?php

namespace App\Events;

use App\Model\Notification;
use App\Model\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NotificationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $user;
    public $message;
    public $notification;
    public function __construct($param)
    {
        $notification = Notification::where('user_id', $param['user_id'])->get();
        $this->user = $param['user_id'];
        $this->message = $param['message'];
        $this->notification = [
            'all'   =>  $notification,
            'count' =>  count($notification)
        ];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('user.'.$this->user);
    }
}
