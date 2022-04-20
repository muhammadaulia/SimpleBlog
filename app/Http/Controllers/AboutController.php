<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function showImage() {
        return view('about', [
            "title" => "Halaman About",
            "foto" => About::all()
        ]);
    }
}
