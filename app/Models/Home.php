<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Data sudah dari database
class Home extends Model
{
    use HasFactory;

    # Untuk bisa melakukan mass assigment maka perlu menambahkan code dibawah
/*
    // Arti code dibawah : hanya title, author, dan body yang boleh diisi, sisanya tidak bisa diisi
    protected $fillable = ['title', 'author', 'body'];
    // Arti code dibawah : hanya id yang tidak boleh diisi, sisanya boleh
*/
    protected $guarded = ['id'];
    protected $with = ['author', 'category'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        # Laravel secara default mencari user_id di dalam tabel Home karena yang menghubungkan antara tabel ini dan tabel User adalah variabel tersebut sehingga jika hendak mengganti namanya kita perlu memasukkan paramater tambahan yang merupakan foreign key-nya (Dalam kasus ini adalah user_id) sehingga tidak akan error
        return $this->belongsTo(User::class, 'user_id');
    }

    # Query Scope Local Dan Fitur Pencarian
    public function scopeFilter($query, array $filters) {
        
        # Cara Pertama
        // isset() -> Untuk Melakukan Pengecekan Apakah Variabel Telah Digunakan Atau Tidak NULL
        if(isset($filters['search_input']) ? $filters['search_input'] : false) {
            return $query->where('title', 'like', '%' . $filters['search_input'] . '%');
        }
        
        # Cara Kedua Dengan Bantuan Fitur when dan ?? PHP Versi 7
        // $query->when($filters['search_input'] ?? false, function($query, $search) {
        //     return $query->where('title', 'like', '%' . $search . '%');
        // });

        # whereHas() -> Digunakan untuk reference ke Tabel Yang Ada Di Database Jika Terdapat Relasi
        $query->when($filters['category'] ?? false, fn($query, $category) => 
            $query->whereHas('category', fn($query) => $query->where('slug', $category))
        );

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) => $query->where('username', $author))
        );
    }
}
