@extends('layout')

@section('titulo')
Lista de Serviços
@endsection

@section('cabecalho')
Serviços Cadastrados
@endsection
      
@section('conteudo')

@if(!empty($mensagem))

<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif
<a href="{{route('telac_servico')}}" class="btn btn-dark mb-2">Cadastrar</a>

<a href="{{route('index')}}" class="btn btn-dark mb-2 ">Inicio</a>

<ul class="list-group">


    @foreach ($servicos as $servico)
    
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $servico->id }}      {{ $servico->nome }}        {{ $servico->valor }}  
            <div class="col col1">
            <a href="{{ route('situacao_servico', ['id' => $servico->id])}}">
                <button class="btn btn-primary ">Incluir Pago</button>
            </a>
        </div>
        <div class="col col1">
            <a href="{{ route('dados_placa', ['id' => $servico->placa_id])}}">
                <button class="btn btn-primary ">Ver Dados</button>
            </a>
        </div>
        <div class="col col1">
            <a href="{{ route('telaedit_servico', ['id' => $servico->id])}}">
                <button class="btn btn-primary ">Editar Serviço</button>
            </a>
        </div>
        </li>


    @endforeach


</ul>
@endsection