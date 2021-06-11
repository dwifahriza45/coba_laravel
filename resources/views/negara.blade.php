@extends('layout.app')

@section('content')
<div class="container">
    <h3 class="m-5">Detail Negara</h3>
    <ul class="list-group">
        <li class="list-group-item">{{ $dtlNgr->kode }}</li>
        <li class="list-group-item">{{ $dtlNgr->nama }}</li>
        <li class="list-group-item">{{ $dtlNgr->kode_iso3 }}</li>
        <li class="list-group-item">{{ $dtlNgr->nama_inggris }}</li>
        <li class="list-group-item">{{ $dtlNgr->lat }}</li>
        <li class="list-group-item">{{ $dtlNgr->lon }}</li>
        <li class="list-group-item">{{ $dtlNgr->kode_telepon }}</li>
        <li class="list-group-item">{{ $dtlNgr->mata_uang }}</li>
        <li class="list-group-item">{{ $dtlNgr->created_at }}</li>
        <li class="list-group-item">{{ $dtlNgr->updated_at }}</li>
    </ul>
</div>
@endsection