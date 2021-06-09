@extends('layout')
@section('cabecalho')
    Series
@endsection

@section('conteudo')
    <a href="/series/adicionar" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item"><?= $serie; ?></li>
        @endforeach
    </ul>
@endsection
