<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class singleActionController extends Controller
{    
    public function __invoke(Request $request)
    {
        echo 'Hello, World!';
    }
}
