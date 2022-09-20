@extends('dashboard.layouts.master')

@section('title')
Pasaran
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>@yield('title')</h3>
            </div>
            <div class="card-body table-border-style">
                @if ($pasarans->count())
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pasarans as $pasaran)
                            <tr>
                                <td>{{ $pasarans->firstItem() + $loop->index }}</td>
                                <td>{{ $pasaran->nama }}</td>
                                <td>
                                    <form method="post" action="{{ route('pasaran.destroy', $pasaran->id) }}">
                                        @method('delete')
                                        @csrf
                                        <a href="{{ route('pasaran.edit', $pasaran->id) }}"
                                            class="btn btn-warning btn-sm" title="Edit Pasaran">
                                            <i data-feather="edit-3"></i>
                                        </a>
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Pasaran"
                                            onclick="return confirm('Yakin Anda mau menghapus data pasaran ini? ')">
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
                <h4 class="text-center mt-4">Data Pasaran Belum Tersedia</h4>
                @endif
            </div>
            @if ($pasarans->hasPages())
            <div class="card-footer">
                {{ $pasarans->links('pagination::bootstrap-5') }}
            </div>
            @endif
        </div>
    </div>

    <div class="col-lg-4 col-md-12">
        <form action="{{ route('pasaran.store') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Pasaran</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="nama">Nama Pasaran</label>
                        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="namaHelp"
                            placeholder="Nama Pasaran" value="{{ old('nama') ? old('nama') : '' }}">
                        @error('nama')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection