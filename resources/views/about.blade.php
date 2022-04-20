@extends('layouts.main')

{{-- CSS --}}
<link rel="stylesheet" href="css/about.style.css">

@section('page')

<div class="container">
  <div class="row">
    @foreach ($foto as $person)
    
    {{-- Grid bootstrap --}}
      <div class="col-md-3">

        <div class="card-deck">
          <div class="card">
            <!-- selain menggunakan php echo, kita bisa pakai ?= $name -->
            <img src="img/<?= $person["image"]; ?>" class="card-img-top" 
            alt="<?php echo $person["name"]; ?>">

            <div class="card-body">
              <h5 class="card-title">Name:</h5>
              <p class="card-text">
                {{ $person["name"] }}
              </p>
              <p class="card-text">
                <small class="text-muted">
                  Nationality: {{ $person["nationality"] }}
                </small>
              </p>
            </div>
          </div>
        </div>

      </div>
    @endforeach
  </div>
</div>

@endsection
  