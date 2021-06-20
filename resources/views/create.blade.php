@extends('layout.app')

@section('content')
<div class="container my-3">
    <div class="row mt-3">
        <div class="col-md-6">
            <h1 class="my-3">Tambah Data</h1>
            <form action="crud" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" name="kode" placeholder="Masukkan Kode" value="{{ old('kode') }}">
                </div>
                <div class="form-group">
                    <label for="kode_iso3">Kode Iso</label>
                    <input type="text" class="form-control @error('kode_iso3') is-invalid @enderror" id="kode_iso3" name="kode_iso3" placeholder="Masukkan kode Iso" value="{{ old('kode_iso3') }}">
                </div>
                <div class="form-group">
                    <label for="nama">nama negara</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan nama negara" value="{{ old('nama') }}">
                    <small class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="nama_inggris">nama inggris</label>
                    <input type="text" class="form-control @error('nama_inggris') is-invalid @enderror" id="nama_inggris" name="nama_inggris" placeholder="Masukkkan nama inggris" value="{{ old('nama_inggris') }}">
                    <small class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="lat">lat</label>
                    <input type="text" class="form-control @error('lat') is-invalid @enderror" id="lat" name="lat" placeholder="Masukkan lat" value="{{ old('lat') }}">
                    <small class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="lon">lon</label>
                    <input type="text" class="form-control @error('lon') is-invalid @enderror" id="lon" name="lon" placeholder="Masukkan lon" value="{{ old('lon') }}">
                    <small class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="kode_telepon">kode telepon</label>
                    <input type="text" class="form-control @error('kode_telepon') is-invalid @enderror" id="kode_telepon" name="kode_telepon" placeholder="Masukkan kode telepon negara" value="{{ old('kode_telepon') }}">
                    <small class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="mata_uang">mata uang</label>
                    <input type="text" class="form-control @error('mata_uang') is-invalid @enderror" id="mata_uang" name="mata_uang" placeholder="Masukkan jenis mata uang negara" value="{{ old('mata_uang') }}">
                    <small class="form-text text-muted"></small>
                </div>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </form>
        </div>
    </div>
</div>
@endsection