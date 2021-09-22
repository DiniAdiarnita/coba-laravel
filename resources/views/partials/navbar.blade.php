  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    {{-- Fluid pada class container dihapus agar navbar berpindah ke tengah --}}
    <div class="container"> 
      <a class="navbar-brand" href="/">Luxury Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            {{-- jika kita lagi berada di halaman home, maka tambahkan kelas active, jika tidak dihalaman home maka tidak usa ditambahkan kelas active --}}
            <a class="nav-link {{ ($title === "Home")? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About")? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Posts")? 'active' : '' }}" href="/blog">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>