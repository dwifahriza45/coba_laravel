@extends('layout.app')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h1 class="mt-5">Negara</h1>
            <a href="{{URL::to('/')}}/create" class="btn btn-primary my-3">Tambah Negara</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <ul class="list-group">
                @foreach ($negara as $ngr)
                <li class="list-group-item">
                    {{ $ngr->nama}}
                    <a href="{{URL::to('/')}}/crud/{{$ngr->id}}" class="badge badge-primary float-right ml-1 p-2">detail</a>
                    <a href="{{URL::to('/')}}/crud/{{$ngr->id}}/update" class="badge badge-success float-right ml-1 p-2">Update</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection