@extends('layout')

@section('titulo')
    Cadastrar Veículo
@endsection

@section('cabecalho')
    Cadastro de Veículo
@endsection

@section('conteudo')

<form action="{{ route('cadastrar_veiculo')}}" method="post">

    @csrf
 
    <div class="col col-6">
        <label for="nome" >Nome Veículo:</label>
        <input type="text" class="form-control mb-2" name="nome" id="nome">
    </div>
    <div class="col col-5">
        <label for="marca_id" class=""> Marca:
            <select name="marca_id" class="form-select " aria-label="Default select example">
        </label>
        <option value=""></option>
        @foreach ($marcas as $marca)
            <option value="{{ $marca->id }}"> {{ $marca->nome }}</option>
        @endforeach
        </select>
        <a href="{{route('telac_marca')}}" class="btn btn-success" title="Adicionar Marca">+</a>
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection