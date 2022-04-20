<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showPostByCategory(Category $category) {
        return view ('home', [
            'title' => "Post By Category: $category->name", // Kegunaan ada di navbar.blade.php
            'postingan' => $category->home->load('category', 'author') // Melalukan lazy eager loading dengan menambah method load()
        ]);
    }
}
