<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showNumber() {
        return view('contact', [
            "title" => "Halaman Contact",
            "phone" => Contact::all()
        ]);
    }
}
