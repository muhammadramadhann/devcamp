<nav class="navbar navbar-expand-lg py-3 navbar-light bg-white position-fixed w-100">
    <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="{{ asset('images/logo.svg') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mt-lg-0 mt-3">
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
            <div class="d-lg-flex d-block">
                <a href="{{ route('login') }}" class="btn btn-master btn-secondary me-2">
                    Login
                </a>
                <a href="{{ route('register') }}" class="btn btn-master btn-primary">
                    Register
                </a>
            </div>
        </div>
    </div>
</nav>