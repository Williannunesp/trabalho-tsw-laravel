@extends('layout')

@section('titulo')
    Cadastrar Placa
@endsection

@section('cabecalho')
    Cadastro de Placas
@endsection

@section('conteudo')
<form action="{{ route('cadastrar_placa')}}" method="post">

    @csrf
 
    <div class="col col-6">
        <label for="numero" >Número da Placa:</label>
        <input type="text" class="form-control mb-2" name="numero" id="numero">
    </div>
    <div class="col col-5">
        <label for="veiculo_id" class=""> Veículo:
            <select name="veiculo_id" class="form-select " aria-label="Default select example">
        </label>
        <option value=""></option>
        @foreach ($veiculos as $veiculo)
            <option value="{{ $veiculo->id }}"> {{ $veiculo->nome }}</option>
        @endforeach
        </select>
        <a href="{{route('telac_veiculo')}}" class="btn btn-success" title="Adicionar veiculo">+</a>
    </div>
    <div class="col col-5">
        <label for="cliente_id" class=""> Cliente:
            <select name="cliente_id" class="form-select " aria-label="Default select example">
        </label>
        <option value=""></option>
        @foreach ($clientes as $cliente)
            <option value="{{ $cliente->id }}"> {{ $cliente->nome }}</option>
        @endforeach
        </select>
        <a href="{{route('telac_cliente')}}" class="btn btn-success" title="Adicionar cliente">+</a>
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>

@endsection