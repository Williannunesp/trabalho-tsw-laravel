@extends('layout')

@section('titulo')
Lista de Veículos
@endsection

@section('cabecalho')
Veículos Cadastrados
@endsection
      
@section('conteudo')

@if(!empty($mensagem))

<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif
<a href="{{route('telac_veiculo')}}" class="btn btn-dark mb-2">Cadastrar</a>

<a href="{{route('index')}}" class="btn btn-dark mb-2 ">Inicio</a>

<ul class="list-group">
    @foreach ($veiculo as $veiculo)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $veiculo->nome }}
            <form method="post" action="/veiculo/excluir/{{$veiculo->id}}" 
                onsubmit="return confirm('tem certeza que deseja remover {{ addslashes($veiculo->nome)}}?')">
                @csrf
                @method('DELETE')

            <div class="col col2">
                <button class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i>
                </button>
            </div>
            </form>
            <div class="col col1">
            <a href="{{ route('telaedit_veiculo', ['id' => $veiculo->id])}}">
                <button class="btn btn-primary ">Editar</button>
            </a>
        </div>
       
        </li>

    @endforeach

</ul>
@endsection