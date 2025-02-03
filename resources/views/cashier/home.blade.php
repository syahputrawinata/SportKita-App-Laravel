@extends('layout.template')
@section('content')
<div class="hero">
    @if(Session::get('success'))
        <div class="alert alert-Success" background-color="white">{{ Session::get('success') }}</div>
    @endif
    @if(Session::get('failed'))
        <div class="alert alert-Danger" background-color="white">{{ Session::get('failed') }}</div>
    @endif
        <h1>Belanja Sepatu!</h1>
        <p>Fitur Melimpah, Mudah, dan Siap Pakai</p>
        <!-- <button class="btn btn-lg" href="{{route('usertransaction.index')}}">Belanja Sekarang</button> -->
        <div>
            <a href="{{ route('cashiertransaction.index') }}" class="btn btn-lg">Belanja Sekarang</a>
        </div>
</div>

<div class="container products">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card product-card">
                <img src="https://via.placeholder.com/400x300" alt="Nyak Shoes">
                <div class="card-body">
                    <h5 class="card-title">Nyak Shoes(cashier)</h5>
                    <p class="card-text">Bantalan ekstra dan midsole melampaui tumit.</p>
                    <p class="text-danger fw-bold">Rp. 799.000</p>
                    <a href="#" class="btn btn-primary w-100">Belanja Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card product-card">
                <img src="https://via.placeholder.com/400x300" alt="Cameraparty">
                <div class="card-body">
                    <h5 class="card-title">#Cameraparty</h5>
                    <p class="card-text">Ikuti acara 17-24 Agustus!</p>
                    <a href="#" class="btn btn-primary w-100">Ikutan Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card product-card">
                <img src="https://via.placeholder.com/400x300" alt="Cepatlako Giveaway">
                <div class="card-body">
                    <h5 class="card-title">Cepatlako Giveaway</h5>
                    <p class="card-text">Promo spesial tahun ini!</p>
                    <a href="#" class="btn btn-primary w-100">Belanja Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection    