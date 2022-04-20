<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>{{ $title }}</title>
  </head>
  <body>
    {{-- Karena navbar tidak ada perubahan, maka kita bisa jadikan menjadi 1 buah komponen di dalam file yang berbeda dan memanggilnya dengan code di bawah. Dengan begini maka kita bisa mengatur navbar untuk ada atau tidak di masing-masing halaman --}}
    @include('partials.navbar')

    <div class="container-fluid mt-2" >
      @yield('page') 
      {{-- Karena tiap halaman punya bagian yang berisi  berbeda, maka kita gunakan yield untuk mengambil bagian yang berbeda tersebut saja dari masing-masing halaman. Sedangkan untuk bagian yang lain sama isinya (Contoh: tiap halaman punya navbar) --}}
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>