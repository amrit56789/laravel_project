<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userComponent extends Controller
{
    function show($id)
    {
        return "Hello from controller $id";
    }
}
