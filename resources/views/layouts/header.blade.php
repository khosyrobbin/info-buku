<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="{{route('home')}}" class="logo d-flex align-items-center  me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <i class="bi bi-book"></i>
            <h1>INFO BUKU</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ Request()->is('home') ? 'active' : '' }}">Beranda</a></li>
                <li><a href="{{ route('tentang') }}" class="{{ Request()->is('tentang') ? 'active' : '' }}">Tentang</a></li>
                <li class="dropdown"><a href="#"><span>Kategori</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ asset('template') }}/gallery.html">Fiksi</a></li>
                        <li><a href="{{ asset('template') }}/gallery.html">Non Fiksi</a></li>
                        <li><a href="{{ asset('template') }}/gallery.html">Gaya Hidup</a></li>
                        <li><a href="{{ asset('template') }}/gallery.html">Teknologi</a></li>
                        <li><a href="{{ asset('template') }}/gallery.html">Kesehatan</a></li>
                        <li><a href="{{ asset('template') }}/gallery.html">Pendidikan</a></li>
                        <li><a href="{{ asset('template') }}/gallery.html">Biografi</a></li>
                    </ul>
                </li>
            </ul>
        </nav><!-- .navbar -->

        <div class="header-social-links">
            <ul class="navbar-nav ml-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->username }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

        </div>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header>
