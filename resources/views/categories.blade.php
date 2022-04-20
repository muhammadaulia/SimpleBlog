{{-- Mengambil layout dari main.blade.php --}}
@extends('layouts.main') 

{{-- CSS --}}
<link rel="stylesheet" href="css/categories.style.css">

{{-- Bagian yang berbeda dari keseluruhan isi home.blade.php sehingga kita cukup memberitahu bagian ini ke bagian @yield di main.blade.php --}}

@section('page')
<div class="container">
  <div class="row">
    @foreach ($categories as $category)
    <div class="col-md-4">
      <div class="card bg-dark text-white">
        <img src="https://picsum.photos/seed/{{ $category->name }}/500/500" class="card-img-top" alt="{{ $category->name }}">
        
        {{-- d-flex dan align-items-center untuk merubah posisi tulisan ke tengah --}}
        <div class="card-img-overlay d-flex align-items-center p-0"> 
          {{-- flex-fill untuk membuat background hitam full --}}
          <a href="/categories/{{ $category->slug }}" class="text-decoration-none flex-fill" style="color: white">
            <h4 class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.7)">
              {{ $category->name }}
              <p class="card-text">
                {{-- Mengambil waktu update terakhir dengan bantuan tabel created_at database --}}
                <small class="text-muted">
                  New Post: {{ $category->created_at->diffForHumans() }}
                </small>
              </p>
            </h4>
          </a>
        </div>

      </div>
    </div>
    @endforeach
    
  </div>
</div>
@endsection





