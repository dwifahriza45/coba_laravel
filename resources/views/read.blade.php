@extends('layout.app')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h1 class="mt-5">Negara</h1>
            <ul class="list-group">
                @foreach ($negara as $ngr)
                <li class="list-group-item">
                    {{ $ngr->nama }}
                    <!-- Pengingat: pelajari Route Model Binding -->
                    <a href="{{ url('negara/1') }}" class="badge badge-primary float-right ml-1 p-2">detail</a>
                </li>
                @endforeach
            </ul>
            <h1 class="mt-4">Kota</h1>
            <ul class="list-group">
                @foreach ($kota as $kt)
                <li class="list-group-item">
                    {{ $kt->nama }}
                    <a href="{{ url('kota/1') }}" class="badge badge-primary float-right ml-1 p-2">detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection