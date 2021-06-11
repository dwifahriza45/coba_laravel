@extends('layout.app')

@section('content')
<div class="container">
    <h3 class="m-5">Detail Kota</h3>
    <ul class="list-group">
        <li class="list-group-item">{{ $dtlKota->negara_id }}</li>
        <li class="list-group-item">{{ $dtlKota->nama }}</li>
        <li class="list-group-item">{{ $dtlKota->nama_inggris }}</li>
        <li class="list-group-item">{{ $dtlKota->lat }}</li>
        <li class="list-group-item">{{ $dtlKota->lon }}</li>
        <li class="list-group-item">{{ $dtlKota->created_at }}</li>
        <li class="list-group-item">{{ $dtlKota->updated_at }}</li>
    </ul>
</div>
@endsection