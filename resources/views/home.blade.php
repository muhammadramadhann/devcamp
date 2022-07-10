@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <section id="banner">
        <div class="container mt-lg-5 mt-3 pt-2">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-11 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 copywriting">
                            <p class="story">
                                BERSAMA KAMI
                            </p>
                            <h1 class="header">
                                Mulai Karir Menjadi <span class="text-purple">Developer </span>Hebat
                            </h1>
                            <p class="support">
                                Melalui program super coding bootcamp membantu pemula menjadi developer profesional dan siap kerja pada bidang Full-Stack Development.
                            </p>
                            <p class="cta align-items-center">
                                <a href="#" class="btn btn-master btn-primary mb-md-4 mb-2">
                                    Daftar Bootcamp
                                </a>
                            </p>
                        </div>
                        <div class="col-lg-6 col-12 text-center">
                            <a href="#">
                                <img src="{{ asset('images/banner.svg') }}" class="img-fluid" alt="banner">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="benefits">
        <div class="container">
            <div class="row text-center pb-5">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        SUPER BENEFIT
                    </p>
                    <h2 class="primary-header">
                        Belajar di Devcamp
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{ asset('images/ic_globe.png') }}" class="icon" alt="">
                        <h3 class="title">
                            Connection
                        </h3>
                        <p class="support">
                            Bertemu dengan teman baru yang berasal darimana saja untuk menambah koneksi
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{ asset('images/ic_globe-1.png') }}" class="icon" alt="">
                        <h3 class="title">
                            Real World Project
                        </h3>
                        <p class="support">
                            Projek Real standar industri global untuk menguji kemampuan teknikal peserta
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{ asset('images/ic_globe-2.png') }}" class="icon" alt="">
                        <h3 class="title">
                            Profesional Mentor
                        </h3>
                        <p class="support">
                            Bimbingan bersama mentor berpengalaman dan expert dibidangnya
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{ asset('images/ic_globe-3.png') }}" class="icon" alt="">
                        <h3 class="title">
                            Future Job
                        </h3>
                        <p class="support">
                            Raih pekerjaan impianmu di berbagai perusahaan terbaik di Indonesia (Gila Belajar)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="steps">
        <div class="container">
            <div class="row item-step pb-5">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{ asset('images/step1.png') }}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <p class="story">
                        PERSIAPAN BOOTCAMP
                    </p>
                    <h2 class="primary-header">
                        Student Placement
                    </h2>
                    <p class="support">
                        Tentukan pilihan program yang kamu inginkan, kami akan melakukan tes berupa tes psikologi dan wawancara denganmu untuk mengetahui minat dan karakter anda lebih jauh.
                    </p>
                    <p class="mt-4">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            Lebih Lanjut
                        </a>
                    </p>
                </div>
            </div>
            <div class="row item-step pb-5">
                <div class="col-lg-6 col-12 text-left copywriting pl-120">
                    <p class="story">
                        MULAI BELAJAR
                    </p>
                    <h2 class="primary-header">
                        Finish The Study & Assassment
                    </h2>
                    <p class="support">
                        Kamu akan ditempatkan dalam kelompok kecil untuk bimbingan belajar, mengerjakan projek sederhana dan penilaian secara rutin oleh mentor.
                    </p>
                    <p class="mt-4">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            Dokumentasi
                        </a>
                    </p>
                </div>
                <div class="col-lg-6 col-12 text-center order-lg-last order-first">
                    <img src="{{ asset('images/step2.png') }}" class="cover" alt="">
                </div>
            </div>
            <div class="row item-step pb-5">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{ asset('images/step3.png') }}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <p class="story">
                        KARIR DAN SOFT SKILLS
                    </p>
                    <h2 class="primary-header">
                        Career Guidance
                    </h2>
                    <p class="support">
                        Penilaian akhir program bootcamp dimana kamu akan mempresentasikan projek akhir yang dikerjakan bersama dalam kelompok didepan seluruh siswa lainnya.
                    </p>
                    <p class="mt-4">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            Dokumentasi
                        </a>
                    </p>
                </div>
            </div>
            <div class="row item-step">
                <div class="col-lg-6 col-12 text-left copywriting pl-120">
                    <p class="story">
                        PROJEK AKHIR
                    </p>
                    <h2 class="primary-header">
                        Amazing Project
                    </h2>
                    <p class="support">
                        Penilaian akhir program bootcamp dimana kamu akan mempresentasikan projek akhir yang dikerjakan bersama dalam kelompok didepan seluruh siswa lainnya.
                    </p>
                    <p class="mt-4">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            Portfolio Peserta
                        </a>
                    </p>
                </div>
                <div class="col-lg-6 col-12 text-center order-lg-last order-first">
                    <img src="{{ asset('images/step4.png') }}" class="cover" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="pricing" id="pricing">
        <div class="container">
            <div class="row pb-64">
                <div class="col-lg-5 col-12 header-wrap copywriting">
                    <p class="story">
                        INVESTASI BELAJAR
                    </p>
                    <h2 class="primary-header text-white">
                        Mulai Karirmu Sekarang
                    </h2>
                    <p class="support">
                        Belajar hard skills dan soft skills sekaligus dalam satu program super bootcamp full-stack development hanya di Devcamp.
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-thirdty me-3">
                            Lihat Silabus
                        </a>
                    </p>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 mb-lg-0 mb-3">
                            <div class="table-pricing paket-gila">
                                <p class="story text-center">
                                    GILA BELAJAR
                                </p>
                                <h1 class="price text-center">
                                    $280K
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        Pro Techstack Kit
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        iMac Pro 2021 & Display
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        1-1 Mentoring Program
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        Final Project Certificate
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        Offline Course Videos
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        Future Job Opportinity
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        Premium Design Kit
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        Website Builder
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="{{ route('transaction.checkout', 'gila-belajar') }}" class="btn btn-master btn-primary w-100 mt-3">
                                        Take This Plan
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-biasa">
                                <p class="story text-center">
                                    BARU MULAI
                                </p>
                                <h1 class="price text-center">
                                    $140K
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        1-1 Mentoring Program
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        Final Project Certificate
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        Offline Course Videos
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        Future Job Opportinity
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="{{ route('transaction.checkout', 'baru-mulai') }}" class="btn btn-master btn-secondary w-100 mt-3">
                                        Start With This Plan
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="row text-center pb-64">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        PENDAPAT MEREKA
                    </p>
                    <h2 class="primary-header">
                        Sukses Bersama Devcamp
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-12 mb-lg-0 mb-3">
                            <div class="item-review">
                                <img src="{{ asset('images/stars.svg') }}" alt="star" width="180">
                                <p class="message">
                                    Struktur belajar di Devcamp sangat baik dan membantu saya untuk mendapatkan pekerjaan impian saya
                                </p>
                                <div class="user">
                                    <img src="{{ asset('images/fanny_photo.png') }}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Fanny
                                        </h4>
                                        <p class="role">
                                            Engineer di Tokopedia
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 mb-lg-0 mb-3">
                            <div class="item-review">
                                <img src="{{ asset('images/stars.svg') }}" alt="star" width="180">
                                <p class="message">
                                    Tidak hanya belajar hard skills, kami juga diberikan bimbingan karir dan soft skills yang bermanfaat di dunia kerja
                                </p>
                                <div class="user">
                                    <img src="{{ asset('images/angga.png') }}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Angga
                                        </h4>
                                        <p class="role">
                                            Developer di Google
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 mb-lg-0 mb-3">
                            <div class="item-review">
                                <img src="{{ asset('images/stars.svg') }}" alt="star" width="180">
                                    <p class="message">
                                        Berasal dari background desain, Devcamp membuat saya dapat mengembangkan produk seutuhnya
                                    </p>
                                <div class="user">
                                    <img src="{{ asset('images/beatrice.png') }}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Beatrice
                                        </h4>
                                        <p class="role">
                                            Designer di Traveloka
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11 col-12 text-center pt-5">
                    <a href="#" class="btn btn-master btn-primary">
                        Lihat Semua
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection