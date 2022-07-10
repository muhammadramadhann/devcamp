@extends('layouts.auth')
@section('title', 'Register')
    
@section('content')
    <section id="user-login">
        <div class="container my-5 py-2">
            <div class="card mx-auto glass-auth mx-auto p-sm-4 p-2">
                <div class="card-body">
                    <div class="text-start mb-4">
                        <a href="{{ route('home') }}"><img src="{{ asset('images/logo.svg') }}" alt="logo"></a>
                    </div>
                    <hr class="mb-4">
                    <p class="mt-3 mb-4">Ayo segera <span class="fw-bold">daftar</span> dan mulai belajar di Devcamp.</p>
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Nama</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" placeholder="Masukkan nama lengkap" autofocus>
                            @error('name')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" placeholder="Masukkan alamat Email" autofocus>
                            @error('email')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password" placeholder="Masukkan password">
                            @error('password')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary w-100">Register</button>
                        </div>
                        <div class="mb-3 d-flex">
                            <div class="col-5 px-1"><hr></div>
                            <div class="col-2 text-center">atau</div>
                            <div class="col-5 px-1"><hr></div>
                        </div>
                        <a class="btn btn-white btn-google border w-100" href="{{ route('login.google') }}">
                            <img src="{{ asset('images/ic_google.svg') }}" class="me-2" alt=""> 
                            <span class="text-start">Daftar dengan Google</span>
                        </a>
                    </form>
                    <div class="text-center mt-4">
                        Sudah punya akun? <a href="{{ Route('login') }}" class="text-decoration-none text-purple">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection