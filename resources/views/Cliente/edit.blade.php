@extends('layout')

@section('titulo')
Editar Clientes
@endsection

@section('cabecalho')
Editar Clientes
@endsection

@section('conteudo')
<form action="{{ route('editar_cliente', ['id' => $cliente->id])}}" method="post">
    @csrf
    <div class="container">
    <div class="row">
    <div class="form-group">
        <label for="nome" >Nome Cliente:</label>
        <input type="text" class="form-control mb-2" name="nome" id="nome" value="{{$cliente->nome}}">
    </div>

    <div class="form-group">
        <label for="telefone" >Whatsapp:</label>
        <input type="text" class="form-control mb-2" name="telefone" id="telefone"value="{{$cliente->telefone}}">
    </div>
    <div class="form-group">
        <label for="telefone2" >Telefone(Opicional):</label>
        <input type="text" class="form-control mb-2" name="telefone2" id="telefone2" value="{{$cliente->telefone2}}">
    </div>
    <div class="form-group">
        <label for="endereco" >Endereço(Opicional):</label>
        <input type="text" class="form-control mb-2" name="endereco" id="endereco" value="{{$cliente->endereco}}">
    </div>
</div>
</div>
    <button class="btn btn-primary">Salvar</button>
</form>
@endsection
