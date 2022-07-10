@extends('layouts.app')

@section('title', 'My Dashboard')
    
@section('content')
    <section id="dashboard">
        <div class="container mt-5 pt-5">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">DASHBOARD</p>
                    <h2 class="primary-header">My Bootcamps</h2>
                </div>
            </div>
            @if (session('registered'))
                <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
                    {{ session('registered') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="my-3 table-responsive">
                <table class="table">
                    <tbody>
                        @forelse ($checkouts as $checkout)
                            <tr class="align-middle">
                                <td width="18%">
                                    <img src="{{ asset('images/item_bootcamp.png') }}" height="120" alt="">
                                </td>
                                <td>
                                    <p class="mb-2"><strong>{{ $checkout->camp->title }}</strong></p>
                                    <p>{{ $checkout->created_at->format('d M, Y') }}</p>
                                </td>
                                <td>
                                    <strong>{{ $checkout->camp->price }}</strong>
                                </td>
                                <td>
                                    @if ($checkout->is_paid)
                                        <strong class="text-success"><small>Payment Success</small></strong>
                                    @else
                                        <strong><small>Waiting for Payment</small></strong>
                                    @endif
                                </td>
                                <td>
                                    <a href="https://wa.me/6281282650022?text=Halo, saya ingin bertanya terkait transaksi pada bootcamp {{ $checkout->camp->title }}" class="btn btn-primary">Contact</a>
                                </td>
                            </tr>
                        @empty
                            <td colspan="5">
                                <h5 class="text-muted">Belum ada transaksi</h5>
                            </td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection