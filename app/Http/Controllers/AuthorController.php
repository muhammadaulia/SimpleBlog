<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function showByAuthor(User $author) {
        return view('home', [
            'title' => "Post By Author: $author->name",
            'postingan' => $author->home->load('category', 'author') // Melalukan lazy eager loading karena routes model binding
        ]);
    }
}
