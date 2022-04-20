<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Category;
use App\Models\User;

class HomeController extends Controller
{

    public function index() {
        
        # Code Untuk Mengubah Judul Halaman Berdasarkan Author atau Category

        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('home', [
            'title' => "Post" . $title,

            // Menampilkan data berdasarkan waktu terbaru dengan latest()
            // Dengan menambahkan method with()->jika relationship dengan 1 tabel 
            // atau with([])->jika relationship dengan lebih dari 1 tabel maka kita merubah query data dari database dari lazy loading menjadi eager loading untuk menangani N+1 Problem
            
            "postingan" => Home::with(['author', 'category'])->latest()->filter(request(['search_input', 'category', 'author']))->get() 
            
        ]);
    }

    // Single post dari slug
    public function onePost(Home $post) {
        return view('singlepost', [
            'title' => "Halaman Single Post",
            "slugPost" => $post
        ]);
    }
}
