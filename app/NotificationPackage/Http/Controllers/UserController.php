<?php

namespace App\NotificationPackage\Http\Controllers;

use App\Base\BaseEntity;
use App\Model\User;
use Illuminate\Http\Request;

class UserController extends BaseEntity
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }
    public function getUsers(){
        return $this->model->all();
    }
}
