<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        # login.index -> menampilkan view dengan nama index di dalam folder bernama login
        return view('login.index', [
            'title' => 'Login'
        ]);
    }
}
