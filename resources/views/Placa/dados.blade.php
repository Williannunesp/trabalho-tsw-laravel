@extends('layout')

@section('titulo')
    Dados Serviço
@endsection

@section('cabecalho')
    Dados do serviço
@endsection

@section('conteudo')

 
     
 
    <div class="col col-6">
        <label for="numero" >Número da Placa:</label>
        <input type="text" class="form-control mb-2" name="numero" id="numero" value="{{$placas->numero}}" disabled>
    </div>
    <div class="col col-5">
        <label for="veiculo_id" class=""> Veículo:
            <select name="veiculo_id" class="form-select " aria-label="Default select example" disabled>
        </label>
        <option value=""></option>
        @foreach ($veiculos as $veiculo)
        :
        @php
            $seEh = $placas->veiculo_id == $veiculo->id;
            $selecao = $seEh ? "selected = 'selected'" : '';
        @endphp
            <option value="{{ $veiculo->id }}" {{$selecao}}> {{ $veiculo->nome }}</option>
        @endforeach
        </select>
    </div>
    <div class="col col-5">
        <label for="cliente_id" class=""> Nome Cliente:
            <select name="cliente_id" class="form-select " aria-label="Default select example" disabled>
        </label>
        <option value=""></option>
        @foreach ($clientes as $cliente)
        :
        @php
            $seEh = $placas->cliente_id == $cliente->id;
            $selecao = $seEh ? "selected = 'selected'" : '';
        @endphp
            <option value="{{ $cliente->id }}" {{$selecao}}> {{ $cliente->nome }}</option>
        @endforeach
        </select>
    </div>
    <div class="col col-5">
        <label for="cliente_id" class=""> WhatsApp:
            <select name="cliente_id" class="form-select " aria-label="Default select example" disabled>
        </label>
        <option value=""></option>
        @foreach ($clientes as $cliente)
        :
        @php
            $seEh = $placas->cliente_id == $cliente->id;
            $selecao = $seEh ? "selected = 'selected'" : '';
        @endphp
            <option value="{{ $cliente->id }}" {{$selecao}}> {{ $cliente->telefone }}</option>
        @endforeach
        </select>
        <a href="{{route('index')}}" class="btn btn-danger">Voltar</a>
    </div>


@endsection