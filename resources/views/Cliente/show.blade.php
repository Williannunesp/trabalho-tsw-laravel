@extends('layout')

@section('titulo')
Lista de Clientes
@endsection

@section('cabecalho')
Clientes Cadastrados
@endsection
      
@section('conteudo')

@if(!empty($mensagem))

<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif
<a href="{{route('telac_cliente')}}" class="btn btn-dark mb-2">Cadastrar</a>

<a href="{{route('index')}}" class="btn btn-dark mb-2 ">Inicio</a>

<ul class="list-group">
    @foreach ($clientes as $cliente)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $cliente->nome }}
            <form method="post" action="/cliente/{{$cliente->id}}" 
                onsubmit="return confirm('tem certeza que deseja remover {{ addslashes($cliente->nome)}}?')">
                @csrf
                @method('DELETE')

                <div class="col col2">
                    <button class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                    </button>
                </div>
            </form>
            <div class="col col1">
            <a href="{{ route('telaedit_cliente', ['id' =>$cliente->id])}}">
                <button class="btn btn-primary ">Editar</button>
            </a>
        </div>

        </li>
       
    @endforeach

</ul>
@endsection