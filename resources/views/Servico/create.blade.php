@extends('layout')

@section('titulo')
    Cadastrar Serviços
@endsection

@section('cabecalho')
    Cadastro de Serviços
@endsection

@section('conteudo')

<form action="{{ route('cadastrar_servico')}}" method="post">

    @csrf
    <div class="col col-6">
        <label for="nome" >Descrição:</label>
        <input type="text" class="form-control mb-2" name="nome" id="nome">
    </div>

    <div class="col col-5">
        <label for="placa_id" class=""> Placa:
            <select name="placa_id" class="form-select " aria-label="Default select example">
        </label>
        <option value=""></option>
        @foreach ($placas as $placa)
            <option value="{{ $placa->id }}"> {{ $placa->numero }}</option>
        @endforeach
        </select>
        <a href="{{route('telac_placa')}}" class="btn btn-success" title="Adicionar Placa">+</a>
    </div>

    <div class="col col-6">
        <label for="valor" >Valor:</label>
        <input type="text" class="form-control mb-2" name="valor" id="valor">
    </div>

    <div class="col col-5">
        <label for="situacao_id" class=""> Situação:
            <select name="situacao_id" class="form-select " aria-label="Default select example">
        </label>
        <option value=""></option>
        @foreach ($situacoes as $situacao)
            <option value="{{ $situacao->id }}"> {{ $situacao->nome }}</option>
        @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection