<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InjectController
{
    public function __construct()
    {
        
    }

    public function inject(TestController $test)
    {
        dd($test->test());
    }
}
