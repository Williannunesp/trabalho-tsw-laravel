@extends('layout')

@section('titulo')
Cadastro de Marcas
@endsection

@section('cabecalho')
Cadastrar Marcas
@endsection

@section('conteudo')
<form action="{{ route('cadastrar_marca')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="nome" >Nome Marca</label>
        <input type="text" class="form-control mb-2" name="nome" id="nome">
    </div>
    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection
