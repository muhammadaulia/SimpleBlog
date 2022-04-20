{{-- Mengambil layout dari main.blade.php --}}
@extends('layouts.main') 

{{-- CSS --}}
<link rel="stylesheet" href="css/home.style.css">

{{-- Bagian ini adalah bagian yang berbeda dari keseluruhan isi home.blade.php sehingga kita cukup memberitahu bagian ini ke bagian @yield di main.blade.php dengan menggunakan @section --}}

@section('page')

{{-- Judul Halaman --}}
<div style="text-align: center">
  <h2>{{ $title }}</h2>
</div>

{{-- Search Box --}}
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-5 m-3">
      <form action="/home">
        {{-- Mengimplementasi Fitur Pencarian Yang Ada Di Home.php --}}
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        
        @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukkan Judul Post" name="search_input" value="{{ request('search_input') }}">
          <div class="input-group-append">
            <button class="btn btn-dark" type="submit">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

  {{-- Menghitung jumlah postingan dan menampilkan postingan terbaru ($postingan[0]) menjadi bagian hero --}}
  @if ($postingan->count()) 
    <div class="card mb-3 text-center">

      {{-- Menggunakan bantuan picsum untuk mengambil gambar random berdasarkan category --}}
      <img src="https://picsum.photos/seed/{{ $postingan[0]->category->name }}/1200/400" class="card-img-top" alt="{{ $postingan[0]->category->name }}">

      <div class="card-body">
        <a href="/home/{{ $postingan[0]->slug }}" class="hyperlink">
          <h5 class="card-title">
            {{ $postingan[0]->title }}
          </h5>
        </a>

        <p>
          By: 
          <a href="/home?author={{ $postingan[0]->author->username }}" class="text-decoration-none" style="color: black">
            {{ $postingan[0]->author->name }}
          </a> 
          in 
          <a href="/home?category={{ $postingan[0]->category->slug }}" class="text-decoration-none" style="color: black">
            {{ $postingan[0]->category->name }}
          </a>
        </p>

        <p class="card-text">{{ $postingan[0]->excerpt }}</p>

        <p class="card-text">
          {{-- Mengambil waktu update terakhir dengan bantuan tabel created_at database --}}
          <small class="text-muted">
            Last update: {{ $postingan[0]->created_at->diffForHumans() }}
          </small>
        </p>

      </div>
    </div>

  {{-- Membuat card masing-masing postingan --}}
  <div class="container">
    <div class="row">
      {{-- Dengan menambah fitur skip(1), maka kita melewati 1 buah postingan yang dalam kasus ini adalah $postingan[0] atau postingan terbaru --}}
      @foreach ($postingan->skip(1) as $post)
        <div class="col-md-4 mb-3">

          <div class="card">
            <div class="position-absolute bg-dark p-2 text-white">
              <a href="/home?category={{ $post->category->slug }}" style="text-decoration: none" class="text-white">
                {{ $post->category->name }}
              </a>
            </div>

            <img src="https://picsum.photos/seed/{{ $post->category->name }}/500/500" class="card-img-top" alt="{{ $post->category->name }}">
            
            <div class="card-body">
              <h5 class="card-title">
                <a href="/home/{{ $post->slug }}" class="hyperlink">
                  {{ $post->title }}
                </a>
              </h5>

              <p>By: 
                <a href="/home?author={{ $post->author->username }}" class="text-decoration-none" style="color: black">
                  {{ $post->author->name }}
                </a> 
                {{ $post->created_at->diffForHumans() }}
              </p>

              <p class="card-text">
                {{ $post->excerpt }}
              </p>

            </div>
          </div>

        </div>
      @endforeach
    </div>
  </div>

  @else
    <p class="text-center fs-4">No post found</p>
    
  @endif

@endsection