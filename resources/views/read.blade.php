@extends('layout.app')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h1 class="mt-5">Negara - Kota</h1>
            <ul class="list-group">
                @foreach ($citys as $city)
                <li class="list-group-item">
                    {{ $city->nama ?? null }} - {{ $city->iniNegara->nama?? null }}
                    <a href="{{URL::to('/')}}/kota/{{$city->id}}" class="badge badge-primary float-right ml-1 p-2">detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection