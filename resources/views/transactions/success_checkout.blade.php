@extends('layouts.app')

@section('title', 'Success Checkout')
    
@section('content')
    <section id="checkout">
        <div class="container mt-5 pt-2">
            <div class="row text-center">
                <div class="col-lg-12 col-12">
                    <img src="{{ asset('images/ill_register.png') }}" class="success-checkout" class="mb-5" alt=" ">
                </div>
                <div class="col-lg-12 col-12 mt-4">
                    <p class="story mb-0">
                        WHAT A DAY!
                    </p>
                    <h2 class="primary-header mt-2">
                        Pembayaran Berhasil!
                    </h2>
                    <a href="#" class="btn btn-primary mt-4">
                        My Dashboard
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection