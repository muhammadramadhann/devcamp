@extends('layouts.app')

@section('title', 'Checkout')
    
@section('content')
    <section id="checkout">
        <div class="container mt-5 pt-2">
            <div class="row text-center pb-64">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        YOUR FUTURE CAREER
                    </p>
                    <h2 class="primary-header">
                        Start Invest Today
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <div class="item-bootcamp">
                                <img src="{{ asset('images/item_bootcamp.png') }}" alt="" class="cover">
                                <h1 class="package">
                                    GILA BELAJAR
                                </h1>
                                <p class="description">
                                    Bootcamp ini akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar sampai membangun sebuah projek real.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12"></div>
                        <div class="col-lg-6 col-12">
                            <form action="{{ route('success-checkout') }}" class="basic-form">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap">
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan alamat Email">
                                </div>
                                <div class="mb-4">
                                    <label for="occupation" class="form-label">Status Pekerjaan</label>
                                    <select class="form-select" name="occupation" aria-label="Default select example">
                                        <option selected disabled>-- Pilih status saat ini --</option>
                                        <option value="Mahasiswa">Mahasiswa</option>
                                        <option value="Karyawan">Karyawan</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="card_number" class="form-label">Nomor Kartu</label>
                                    <input type="number" class="form-control" id="card_number" name="card_number" placeholder="Masukkan nomor kartu debit/kredit">
                                </div>
                                <div class="mb-5">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                            <label for="expired" class="form-label">Expired</label>
                                            <input type="date" class="form-control" id="expired" name="expired" placeholder="Masukkan tanggal kadaluarsa kartu">
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <label for="cvc" class="form-label">CVC</label>
                                            <input type="text" class="form-control" id="cvc" name="cvc" placeholder="Masukkan CVC kartu">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="w-100 btn btn-primary">Lanjut ke Pembayaran</button>
                                <p class="text-center subheader mt-4">
                                    <img src="{{ asset('images/ic_secure.svg') }}" alt=""> Your payment is secure and encrypted.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection