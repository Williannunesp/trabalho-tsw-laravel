@extends('layout')

@section('titulo')
Editar Marcas
@endsection

@section('cabecalho')
Editar Marcas
@endsection

@section('conteudo')
<form action="{{ route('editar_marca', ['id' => $marca->id])}}" method="post">
    @csrf
    <div class="form-group">
        <label for="nome" >Nome Marca</label>
        <input type="text" class="form-control mb-2" name="nome" id="nome" value="{{$marca->nome}}">
    </div>
    <button class="btn btn-primary">Salvar</button>
</form>
@endsection
