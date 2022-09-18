@extends('dashboard.layouts.master')

@section('title')
Edit Syair
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-12">
        <form action="{{ route('syair.update', $syairs->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Syair</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="judul">Syair</label>
                        <textarea class="form-control" name="judul" id="judul" rows="5">{{ old('judul') ? old('judul') : $syairs->judul }}</textarea>
                        @error('judul')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info mt-4 btn-sm">Edit syair</button>
                    <a href="{{ route('syair.index') }}" class="btn btn-secondary mt-4 btn-sm">Kembali</a>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection