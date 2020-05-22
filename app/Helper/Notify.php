<?php
namespace App\Helper;

use App\Model\Notification;
use Illuminate\Support\Facades\Auth;

class Notify {
    public static function count()
    {
        $notify = Notification::where('user_id', Auth::id())->get();
        return $notify->first() ? count($notify) : 0 ;
    }
}