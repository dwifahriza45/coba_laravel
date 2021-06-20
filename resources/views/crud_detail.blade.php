@extends('layout.app')

@section('content')
<div class="container">
    <h3>Detail Negara</h3>
    <ul class="list-group">
        <li class="list-group-item">Kode: {{ $negara->kode }}</li>
        <li class="list-group-item">Nama: {{ $negara->nama }}</li>
        <li class="list-group-item">Kode Iso: {{ $negara->kode_iso3 }}</li>
        <li class="list-group-item">Nama Inggris: {{ $negara->nama_inggris }}</li>
        <li class="list-group-item">lat: {{ $negara->lat }}</li>
        <li class="list-group-item">Ion: {{ $negara->lon }}</li>
        <li class="list-group-item">Kode Telpon: {{ $negara->kode_telepon }}</li>
        <li class="list-group-item">Mata Uang: {{ $negara->mata_uang }}</li>
    </ul>
    <form action="{{ $negara->id }}" method="POST">
        @method('delete')
        @csrf
        <button class="btn btn-danger my-3">delete</button>
    </form>
</div>
@endsection