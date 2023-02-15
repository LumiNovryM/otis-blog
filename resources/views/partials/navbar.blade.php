{{-- Navbar Start --}}
<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
<div class="container">
    <a class="navbar-brand" href="#">Otis Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link {{ ($title == "Home") ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ ($title == "About") ? 'active' : '' }}" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ ($title == "Blog") ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
        </li>
    </ul>
    </div>
</div>
</nav>
{{-- Navbar End --}}