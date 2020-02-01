<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $names = ['reni', 'dewi', 'ida'];
        return view('home', compact('names'));
    }
}
