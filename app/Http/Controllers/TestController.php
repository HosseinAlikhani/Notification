<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController
{
    public $user;
    public function __construct($user)
    {
        $this->user = $user;
    }

    public function test()
    {
        dd('Test Controller Called');
    }
}
