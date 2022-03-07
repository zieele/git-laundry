<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlgorithmController extends Controller
{
    public function index()
    {
        return view('algorithm.index', [
            'title' => 'Algorithm'
        ]);
    }
}
