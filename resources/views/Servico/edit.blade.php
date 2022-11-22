@extends('layout')

@section('titulo')
    Cadastrar Serviços
@endsection

@section('cabecalho')
    Cadastro de Serviços
@endsection

@section('conteudo')

<form action="{{ route('editar_servico', ['id'=> $servicos->id])}}" method="post">

    @csrf
    <div class="col col-6">
        <label for="nome" >Descrição:</label>
        <input type="text" class="form-control mb-2" name="nome" id="nome" value="{{$servicos->nome}}">
    </div>

    <div class="col col-5">
        <label for="placa_id" class=""> Placa:
            <select name="placa_id" class="form-select " aria-label="Default select example">
        </label>
        <option value=""></option>
        @foreach ($placas as $placa)
        :
        @php
            $seEh = $servicos->placa_id == $placa->id;
            $selecao = $seEh ? "selected = 'selected'" : '';
        @endphp
            <option value="{{ $placa->id }}" {{$selecao}}> {{ $placa->numero }}</option>
        @endforeach
        </select>
        <a href="{{route('telac_placa')}}" class="btn btn-success" title="Adicionar Placa">+</a>
    </div>

    <div class="col col-6">
        <label for="valor" >Valor:</label>
        <input type="text" class="form-control mb-2" name="valor" id="valor" value="{{$servicos->valor}}">
    </div>

    <div class="col col-5">
        <label for="situacao_id" class=""> Situação:
            <select name="situacao_id" class="form-select " aria-label="Default select example">
        </label>
        <option value=""></option>
        @foreach ($situacoes as $situacao)
        :
        @php
            $seEh = $servicos->situacao_id == $situacao->id;
            $selecao = $seEh ? "selected = 'selected'" : '';
        @endphp
            <option value="{{ $situacao->id }}" {{$selecao}}> {{ $situacao->nome }}</option>
        @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Salvar</button>
</form>
@endsection