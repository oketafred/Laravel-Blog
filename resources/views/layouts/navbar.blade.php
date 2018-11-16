<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="/">Laravel Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::is('/') ? "active" : "" }}">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item {{ Request::is('about') ? "active" : "" }}">
                <a class="nav-link" href="/about">About Us</a>
            </li>
            <li class="nav-item {{ Request::is('blog') ? "active" : "" }}">
                <a class="nav-link" href="/blog">Blog</a>
            </li>
            <li class="nav-item {{ Request::is('contact') ? "active" : "" }}">
                <a class="nav-link" href="/contact">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">

            @if(Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Hello {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('posts.index') }}">Posts</a>
                        <a class="dropdown-item" href="{{ route('categories.index') }}">Categories</a>
                        <a class="dropdown-item" href="{{ route('tags.index') }}">Tags</a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                            {{ csrf_field() }}
                            <a class="dropdown-item" onclick="document.getElementById('logout-form').submit()">Logout</a>
                        </form>
                    </div>
                </li>
            @else
                <li class="nav-item pr-3">
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="btn btn-success">Register</a>
                </li>
            @endif

        </ul>
    </div>
</nav>
<!-- /Navbar -->
