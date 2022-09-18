@extends('dashboard.layouts.master')

@section('title')
Prediksi
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>@yield('title')</h3>
                    <a href="{{ route('prediksi.create') }}" class="btn btn-primary btn-sm">Tambah Prediksi</a>
                </div>
            </div>
            <div class="card-body table-border-style">
                @if ($prediksis->count())
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tgl</th>
                                <th>Pasaran</th>
                                <th>Gambar</th>
                                <th>Shio</th>
                                <th>Syair</th>
                                <th>Angka</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prediksis as $prediksi)
                            <tr>
                                <td>{{ $prediksis->firstItem() + $loop->index }}</td>
                                <td>{{ Carbon\Carbon::parse($prediksi->tanggal)->format('d/m/Y') }}</td>
                                <td>{{ $prediksi->pasaran->nama }}</td>
                                <td>
                                    <img src="{{ $prediksi->url_gambar }}" width="50" height="50">
                                </td>
                                <td>{{ $prediksi->shio }}</td>
                                <td>{{ $prediksi->syair->judul }}</td>
                                <td>{{ $prediksi->angka }}</td>
                                <td>
                                    <form method="post" action="{{ route('prediksi.destroy', $prediksi->id) }}">
                                        @method('delete')
                                        @csrf
                                        <a href="{{ route('prediksi.show', $prediksi->id) }}"
                                            class="btn btn-info btn-sm" title="Detail prediksi">
                                            <i data-feather="eye"></i>
                                        </a>
                                        <a href="{{ route('prediksi.edit', $prediksi->id) }}"
                                            class="btn btn-warning btn-sm" title="Edit prediksi">
                                            <i data-feather="edit-3"></i>
                                        </a>
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete prediksi"
                                            onclick="return confirm('Yakin Anda mau menghapus data prediksi ini? ')">
                                            <i data-feather="trash-2"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <h4 class="text-center mt-4">Data prediksi Belum Tersedia</h4>
                @endif
            </div>
            @if ($prediksis->hasPages())
            <div class="card-footer">
                {{ $prediksis->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection