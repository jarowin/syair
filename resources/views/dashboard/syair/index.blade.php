@extends('dashboard.layouts.master')

@section('title')
Syair
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>@yield('title')</h3>
            </div>
            <div class="card-body table-border-style">
                @if ($syairs->count())
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul Syair</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($syairs as $syair)
                            <tr>
                                <td>{{ $syairs->firstItem() + $loop->index }}</td>
                                <td>{{ $syair->judul }}</td>
                                <td>
                                    <form method="post" action="{{ route('syair.destroy', $syair->id) }}">
                                        @method('delete')
                                        @csrf
                                        <a href="{{ route('syair.edit', $syair->id) }}"
                                            class="btn btn-warning btn-sm" title="Edit Syair">
                                            <i data-feather="edit-3"></i>
                                        </a>
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Syair"
                                            onclick="return confirm('Yakin Anda mau menghapus data Syair ini? ')">
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
                <h4 class="text-center mt-4">Data Syair Belum Tersedia</h4>
                @endif
            </div>
            @if ($syairs->hasPages())
            <div class="card-footer">
                {{ $syairs->links('pagination::bootstrap-5') }}
            </div>
            @endif
        </div>
    </div>

    <div class="col-lg-4 col-md-12">
        <form action="{{ route('syair.store') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Syair</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="judul">Syair</label>
                        <textarea class="form-control" name="judul" id="judul" rows="5" placeholder="Judul Syair">{{ old('judul') ? old('judul') : '' }}</textarea>
                        @error('judul')
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