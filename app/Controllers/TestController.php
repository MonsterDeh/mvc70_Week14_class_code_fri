<?php

namespace App\Controllers;

use Core\View;

class TestController 
{

    public function index() 
    {
        (new View)->show('home', [
            'name' => 'mohammad',
            'friends' => [
                'ali', 'admid', 'reze'
            ]
        ]);
    }
}