@extends('dashboard.layouts.master')

@section('title')
Detail Prediksi
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="container">
            <div class="row mt-4 mx-1">
                <div class="card card-bg">
                    <div class="card-header text-center">
                        <h1>Mbah Gendeng AH Pamungkas</h1>
                    </div>
                    <div class="card-body card-body-bg">
                        <div class="card-title text-center">
                            <h2 class="card-title text-info">{{ $prediksis->pasaran->nama }}</h2>
                            <h3 class="text-warning">{{ Carbon\Carbon::parse($prediksis->tanggal)->format('d M Y') }}</h3>
                        </div>
                        <div class="row py-4">
                            <div class="d-md-inline-flex">
                                <div class="col-md-4 text-white px-2">
                                    <h4 class="text-success">Angka Main</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4 class="text-danger"><strong>{{ $prediksis->am1 }}</strong></h4>
                                        </div>
                                        <div class="col-md-4">
                                            <h4 class="text-warning"><strong>{{ $prediksis->am2 }}</strong></h4>
                                        </div>
                                        <div class="col-md-4">
                                            <h4 class="text-info"><strong>{{ $prediksis->am3 }}</strong></h4>
                                        </div>
                                    </div>
                                    <h4 class="text-info">Jaga Angka</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4 class="text-white">{{ $prediksis->ja1 }}</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <h4 class="text-white">{{ $prediksis->ja2 }}</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <h4 class="text-white">{{ $prediksis->ja3 }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-2">
                                    <img src="{{ $prediksis->url_gambar }}" alt="" width="300" height="300" class="img-fluid" />
                                </div>
                                <div class="col-md-4 text-white px-2">
                                    <h4>SYAIR:</h4>
                                    <div class="d-block">
                                        <div class="col f18">Mau Uang: <span class="text-warning"><strong>{{ $prediksis->mau }}</strong></span></div>
                                        <div class="col f18">Binatangnya: <span class="text-danger"><strong>{{ $prediksis->binatang }}</strong></span></div>
                                        <div class="col f18">Shio: <span class="text-success"><strong>{{ $prediksis->shio }}</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-lg-2 col-md-3 col-sm-3 mx-auto">
                            <button class="btn btn-secondary disabled btn-lg" type="button" style="font-size: 18px">MK : {{ $prediksis->makau }}</button>
                        </div>
                        <div class="row py-4 text-white text-center">
                            <span class="px-5 py-4 f15">
                                {{ $prediksis->syair->judul }}
                            </span>
                            <hr>
                            <h4 class="text-white">Angka Prediksi</h4>
                            <h1 class="text-white">{{ $prediksis->angka }}</h1>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <h4 class="text-white">Join untuk cuan. Hanya disini</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<style type="text/css">
    .card-bg {
        background-color: crimson;
    }

    .card-body-bg {
        background-image: url(https://i.postimg.cc/90s86gNp/game-bg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }

    .f15 {
        font-size: 15px;
    }

    .f18 {
        font-size: 18px;
    }

    @media (max-width: 575.98px) {
        .col-md-4 {
            text-align: center;
            margin-top: 10px;
        }
    }
</style>
@endpush