<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        dd(auth()->user());

        return view('index', [
            'title' => 'Index',
        ]);
    }
}
