<nav class="navbar navbar-expand-xl py-3 navbar-light bg-white position-fixed w-100">
    <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="{{ asset('images/logo.svg') }}" alt="logo" width="175">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mt-lg-0 mt-2">
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mentor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Business</a>
                </li>
            </ul>
            @auth
                <div class="d-flex user-logged nav-item dropdown d-lg-block d-none">
                    <a class="dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                        <span class="rounded-circle bg-white">
                            <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" class="rounded-circle user-photo">
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-2 py-0" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item py-2" href="#">My Dashboard</a></li>
                        <li><a class="dropdown-item py-2" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </ul>
                </div>
                <div class="d-flex flex-column d-lg-none d-block">
                    <a href="" class="btn btn-secondary mb-2">My Dashboard</a>
                    <a href="#" class="btn btn-logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </div>
            @else
                <div class="d-lg-flex d-block">
                    <a href="{{ route('login') }}" class="btn btn-master btn-secondary me-2">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-master btn-primary">
                        Register
                    </a>
                </div>
            @endauth
        </div>
    </div>
</nav>