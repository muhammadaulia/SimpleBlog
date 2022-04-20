@extends('layouts.main')

@section('page')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">

        <h2>{{ $slugPost->title }}</h2>
        <h5>
          By: 
          <a href="/home?author={{ $slugPost->author->username }}" class="text-decoration-none" style="color: black">
            {{ $slugPost->author->name }}
          </a> 
        </h5>

        <h6 style="font-style: italic">
          Category: 
          <a href="/home?category={{ $slugPost->category->slug }}" class="text-decoration-none">
            {{ $slugPost->category->name }}
          </a>
        </h6>

        <img src="https://picsum.photos/seed/{{ $slugPost->category->name }}/1200/400" alt="{{ $slugPost->category->name }}" class="img-fluid">

        {{-- Dengan menggunakan cara dibawah maka sistem akan mengcompile dan menampilkan apapun yang ada di body, termasuk tag html (jika ada) akan tercompile layaknya tulisan biasa --}}
        {{-- <p>{{ $slugPost->body }}</p> --}} 

        
        {{-- Dengan menggunakan cara dibawah maka sistem akan mengcompile dan menampilkan apapun yang ada di body, tetapi perbedaannya adalah tag html akan berjalan seperti halnya fungsi dari tag tersebut --}}
        <article class="my-3">
          {!! $slugPost->body !!}
        </article>
        
        <a href="/home" class="d-block mt-3">
          Back To Home
        </a>
        
      </div>
    </div>
  </div>
@endsection