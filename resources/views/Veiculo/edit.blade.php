@extends('layout')

@section('titulo')
    Editar Veículo
@endsection

@section('cabecalho')
    Editar Veículo
@endsection

@section('conteudo')
<form action="{{ route('editar_veiculo', ['id' => $veiculos->id])}}" method="post">
    @csrf
    <div class="form-group">
        <label for="nome" >Nome Veículo:</label>
        <input type="text" class="form-control mb-2" name="nome" id="nome" value="{{ $veiculos->nome}}">
    </div>
    <div class="col col-2 ">
        <label for="marca_id" class=""> Marca:
            <select name="marca_id" class="form-select " aria-label="Default select example">
        </label>
        <option value=""></option>
        @foreach ($marcas as $marca)
        :
        @php
            $seEh = $veiculos->marca_id == $marca->id;
            $selecao = $seEh ? "selected = 'selected'" : '';
        @endphp
            <option value="{{ $marca->id }}" {{$selecao}}> {{ $marca->nome }}</option>
        @endforeach
        </select>
    </div>
    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection