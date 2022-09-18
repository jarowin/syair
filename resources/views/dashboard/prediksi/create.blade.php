@extends('dashboard.layouts.master')

@section('title')
Tambah Prediksi
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">@yield('title')</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('prediksi.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="pasaran_id">Pasaran</label>
                            <select name="pasaran_id" id="pasaran_id" class="form-select mt-2 form-control">
                                <option value="">Pilih Pasaran</option>
                                @foreach ($pasarans as $pasaran)
                                <option value="{{ $pasaran->id }}">{{ $pasaran->nama }}</option>
                                @endforeach
                            </select>
                            @error('pasaran_id')
                            <span class="text-danger">{{ $errors->first('pasaran_id') ?? null }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="angka">Angka Prediksi</label>
                            <input type="text" name="angka" class="form-control mt-2" id="angka"
                                value="{{ old('angka') ? old('angka') : '' }}" placeholder="contoh: 5 7 2 8">
                            @error('angka')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="makau">Makau</label>
                            <input type="text" name="makau" class="form-control mt-2" id="makau"
                                value="{{ old('makau') ? old('makau') : '' }}" placeholder="contoh: 5 / 8">
                            @error('makau')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for="am1">Angka Main</label>
                            <input type="text" name="am1" class="form-control mt-2" id="am1"
                                value="{{ old('am1') ? old('am1') : '' }}" placeholder="contoh: 01">
                            @error('am1')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label for="am2">Angka Main</label>
                            <input type="text" name="am2" class="form-control mt-2" id="am2"
                                value="{{ old('am2') ? old('am2') : '' }}" placeholder="contoh: 39">
                            @error('am2')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label for="am3">Angka Main</label>
                            <input type="text" name="am3" class="form-control mt-2" id="am3"
                                value="{{ old('am3') ? old('am3') : '' }}" placeholder="contoh: 85">
                            @error('am3')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-2">
                            <label for="ja1">Jaga Angka</label>
                            <input type="text" name="ja1" class="form-control mt-2" id="ja1"
                                value="{{ old('ja1') ? old('ja1') : '' }}" placeholder="contoh: 48">
                            @error('ja1')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label for="ja2">Jaga Angka</label>
                            <input type="text" name="ja2" class="form-control mt-2" id="ja2"
                                value="{{ old('ja2') ? old('ja2') : '' }}" placeholder="contoh: 61">
                            @error('ja2')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label for="ja3">Jaga Angka</label>
                            <input type="text" name="ja3" class="form-control mt-2" id="ja3"
                                value="{{ old('ja3') ? old('ja3') : '' }}" placeholder="contoh: 78">
                            @error('ja3')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="mau">Mau Uang</label>
                            <input type="text" name="mau" class="form-control mt-2" id="mau"
                                value="{{ old('mau') ? old('mau') : '' }}" placeholder="contoh: Pak Ogah">
                            @error('mau')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="binatang">Binatangnya</label>
                            <input type="text" name="binatang" class="form-control mt-2" id="binatang"
                                value="{{ old('binatang') ? old('binatang') : '' }}" placeholder="contoh: Banyak gaya">
                            @error('binatang')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="shio">Shio</label>
                            <select name="shio" id="shio" class="form-select mt-2 form-control">
                                <option value="">Pilih shio</option>
                                <option value="tikus">Tikus</option>
                                <option value="kerbau">Kerbau</option>
                                <option value="harimau">Harimau</option>
                                <option value="kelinci">Kelinci</option>
                                <option value="naga">Naga</option>
                                <option value="ular">Ular</option>
                                <option value="kuda">Kuda</option>
                                <option value="kambing">Kambing</option>
                                <option value="monyet">Monyet</option>
                                <option value="ayam">Ayam</option>
                                <option value="anjing">Anjing</option>
                                <option value="babi">Babi</option>
                            </select>
                            @error('shio')
                            <span class="text-danger">{{ $errors->first('shio') ?? null }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="tanggal">Prediksi Tanggal</label>
                            <input type="text" name="tanggal" class="form-control mt-2" id="datepicker"
                                value="{{ old('tanggal') ? old('tanggal') : '' }}" placeholder="Tanggal">
                            @error('tanggal')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="syair_id">Syair</label>
                            <select name="syair_id" id="syair_id" class="form-select mt-2 form-control">
                                <option value="">Pilih syair</option>
                                @foreach ($syairs as $syair)
                                <option value="{{ $syair->id }}">{{ $syair->judul }}</option>
                                @endforeach
                            </select>
                            @error('syair_id')
                            <span class="text-danger">{{ $errors->first('syair_id') ?? null }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label class="form-label" for="url_gambar">URL Gambar</label>
                            <input type="text" class="form-control" name="url_gambar" id="url_gambar"
                                aria-describedby="url_gambarHelp" placeholder="contoh: https://www.google.com"
                                value="{{ old('url_gambar') ? old('url_gambar') : '' }}">
                            @error('url_gambar')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Tambah Prediksi</button>
                    <a href="{{ route('prediksi.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap-datepicker.min.css') }}">
@endpush

@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('backend/assets/js/bootstrap-datepicker.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#datepicker').datepicker(); 
    });
</script>
@endpush