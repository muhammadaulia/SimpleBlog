@extends('layouts.main')

@section('page')

{{-- CSS --}}
<link rel="stylesheet" href="css/contact.style.css">


<div class="header">
  <h1>Ini Halaman Contact</h1>
  <h2>Berikut ini Email dan Kontak tiap-tiap member: </h2>
</div>



<div class="container">
  <div class="row">

    @foreach ($phone as $number)
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">
            {{ $number->name }}
          </h5>
          <p class="card-text">
            {{ $number->email }}
          </p>
          <p class="card-text">
            {{ $number->contact }}
          </p>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>


@endsection


  {{-- <div class="card">
    <div class="card-header">
      {{ $number->name }}
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        Email: {{  $number->email }}
      </li>
      <li class="list-group-item">
        Kontak: {{ $number->contact }}
      </li>
    </ul>
  </div> --}}

  