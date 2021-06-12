@extends('layout.app')

@section('content')
<div class="container">
    <h3 class="m-5">Detail Kota</h3>
    <ul class="list-group">
        <li class="list-group-item">Nama: {{ $dtlKn->nama }}</li>
        <li class="list-group-item">Nama Inggris: {{ $dtlKn->nama_inggris }}</li>
        <li class="list-group-item">lat: {{ $dtlKn->lat }}</li>
        <li class="list-group-item">Ion: {{ $dtlKn->lon }}</li>
    </ul>
    <h3 class="m-5">Detail Negara</h3>
    <ul class="list-group">
        <li class="list-group-item">Kode: {{ $dtlKn->iniNegara->kode }}</li>
        <li class="list-group-item">Nama: {{ $dtlKn->iniNegara->nama }}</li>
        <li class="list-group-item">Kode Iso: {{ $dtlKn->iniNegara->kode_iso3 }}</li>
        <li class="list-group-item">Nama Inggris: {{ $dtlKn->iniNegara->nama_inggris }}</li>
        <li class="list-group-item">lat: {{ $dtlKn->iniNegara->lat }}</li>
        <li class="list-group-item">Ion: {{ $dtlKn->iniNegara->lon }}</li>
        <li class="list-group-item">Kode Telpon: {{ $dtlKn->iniNegara->kode_telepon }}</li>
        <li class="list-group-item">Mata Uang: {{ $dtlKn->iniNegara->mata_uang }}</li>
    </ul>
</div>
@endsection