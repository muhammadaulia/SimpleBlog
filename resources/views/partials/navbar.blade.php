<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.youtube.com/watch?v=kTJczUoc26U&ab_channel=TheKidLAROIVEVO">Don't Click</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          {{-- Jika title halaman sama dengan title di web.php, maka beri highlight di tombol --}}
          <a class="nav-link {{ ($title === 'Halaman Home') ? 'active' : '' }}" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Halaman About') ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Halaman Contact') ? 'active' : '' }}" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Halaman Categories') ? 'active' : '' }}" href="/categories">Categories</a>
        </li>
      </ul>
    </div>
  </div>
</nav>