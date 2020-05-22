<?php

namespace App\Model;

use App\Base\BaseModel;

class Notification extends BaseModel
{
    public function user()
    {
        return $this->hasOne(User::class,
            'id',
            'user_id'
            );
    }
}
