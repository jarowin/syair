@extends('layouts.main')

@section('content')
    <div class="container">
        <h2 class="text-center text-white mt-4">Syair Mbah Gendeng AH Pamungkas</h2>
        <div class="row text-center mx-auto">
            @foreach ($prediksis as $key => $prediksi)   
            <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                <div class="card">
                    <img src="{{ $prediksi->url_gambar }}" class="card-img-top" alt="{{ $prediksi->pasaran->nama }}" height="150px">
                    <div class="card-body">
                        <p class="card-text"><strong>{{ $prediksi->pasaran->nama }}</strong> <br> {{ Carbon\Carbon::parse($prediksi->tanggal)->format('d-M-Y') }}</p>
                        <a class="btn btn-primary" href="{{ route('post_detail', $prediksi->id) }}">Lihat Syair</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @if ($prediksis->hasPages())
        <div class="row mt-4">
            {{ $prediksis->links('pagination::bootstrap-5') }}
        </div>
        @endif
    </div>
@endsection
