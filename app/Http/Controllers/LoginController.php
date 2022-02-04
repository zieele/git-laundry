<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{   
    public function index()
    {
        $data['title'] = 'Dashboard';
    
        return view('login.index', $data);
    }
}
