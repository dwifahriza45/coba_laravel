@extends('layout.app')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h1 class="mt-5">Negara - Kota</h1>
            <ul class="list-group">
                @foreach ($negara as $ngr)
                <li class="list-group-item">
                    {{ $ngr->nama ?? null }} - {{ $ngr->iniKota->nama ?? null }}
                    <a href="{{URL::to('/')}}/negara/{{$ngr->id}}" class="badge badge-primary float-right ml-1 p-2">detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection