<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
    
        return view('login.index', $data);
    }
}
