@extends('layout.app')

@section('content')
<div class="container">
    <h3 class="m-5">Detail Negara</h3>
    <ul class="list-group">
        <li class="list-group-item">Kode: {{ $dtlNk->kode }}</li>
        <li class="list-group-item">Nama: {{ $dtlNk->nama }}</li>
        <li class="list-group-item">Kode Iso: {{ $dtlNk->kode_iso3 }}</li>
        <li class="list-group-item">Nama Inggris: {{ $dtlNk->nama_inggris }}</li>
        <li class="list-group-item">lat: {{ $dtlNk->lat }}</li>
        <li class="list-group-item">Ion: {{ $dtlNk->lon }}</li>
        <li class="list-group-item">Kode Telpon: {{ $dtlNk->kode_telepon }}</li>
        <li class="list-group-item">Mata Uang: {{ $dtlNk->mata_uang }}</li>
    </ul>
    <h3 class="m-5">Detail Kota</h3>
    <ul class="list-group">
        <li class="list-group-item">Nama: {{ $dtlNk->iniKota->nama }}</li>
        <li class="list-group-item">Nama Inggris: {{ $dtlNk->iniKota->nama_inggris }}</li>
        <li class="list-group-item">lat: {{ $dtlNk->iniKota->lat }}</li>
        <li class="list-group-item">Ion: {{ $dtlNk->iniKota->lon }}</li>
    </ul>
</div>
@endsection