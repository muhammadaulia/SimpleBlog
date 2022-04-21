<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        # register.index -> menampilkan view dengan nama index di dalam folder bernama register
        return view('register.index', [
            'title' => 'Register'
        ]);
    }
}
