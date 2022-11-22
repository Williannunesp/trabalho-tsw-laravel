@extends('layout')

@section('titulo')
Cadastro de Clientes
@endsection

@section('cabecalho')
Cadastrar Clientes
@endsection

@section('conteudo')
<form action="{{ route('cadastrar_cliente')}}" method="post">
    @csrf
    <div class="container">
    <div class="row">
    <div class="form-group">
        <label for="nome" >Nome Cliente:</label>
        <input type="text" class="form-control mb-2" name="nome" id="nome">
    </div>

    <div class="form-group">
        <label for="telefone" >Whatsapp:</label>
        <input type="text" class="form-control mb-2" name="telefone" id="telefone">
    </div>
    <div class="form-group">
        <label for="telefone2" >Telefone(Opicional):</label>
        <input type="text" class="form-control mb-2" name="telefone2" id="telefone2">
    </div>
    <div class="form-group">
        <label for="endereco" >Endereço(Opicional):</label>
        <input type="text" class="form-control mb-2" name="endereco" id="endereco">
    </div>
</div>
</div>
    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection
