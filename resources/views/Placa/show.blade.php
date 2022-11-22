@extends('layout')

@section('titulo')
Lista de Placas
@endsection

@section('cabecalho')
Placas Cadastradas
@endsection
      
@section('conteudo')
@if(!empty($mensagem))

<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif
<a href="{{route('telac_placa')}}" class="btn btn-dark mb-2">Cadastrar</a>

<a href="{{route('index')}}" class="btn btn-dark mb-2 ">Inicio</a>

<ul class="list-group">
    @foreach ($placa as $placa)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $placa->numero }}
            <form method="post" action="/placa/excluir/{{$placa->id}}" 
                onsubmit="return confirm('tem certeza que deseja remover {{ addslashes($placa->numero)}}?')">
                @csrf
                @method('DELETE')

            <div class="col col2">
                <button class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i>
                </button>
            </div>
            </form>
            <div class="col col1">
            <a href="{{ route('telaedit_placa', ['id' => $placa->id])}}">
                <button class="btn btn-primary ">Editar</button>
            </a>
        </div>
       
        </li>

    @endforeach

</ul>
@endsection