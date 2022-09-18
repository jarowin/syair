@extends('dashboard.layouts.master')

@section('title')
Edit Pasaran
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-12">
        <form action="{{ route('pasaran.update', $pasarans->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Pasaran</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="nama">Nama Pasaran</label>
                        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="namaHelp"
                            placeholder="Nama Pasaran" value="{{ old('nama') ? old('nama') : $pasarans->nama }}">
                        @error('nama')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info mt-4 btn-sm">Edit Pasaran</button>
                    <a href="{{ route('pasaran.index') }}" class="btn btn-secondary mt-4 btn-sm">Kembali</a>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection