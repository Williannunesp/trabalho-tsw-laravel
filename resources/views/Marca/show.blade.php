@extends('layout')

@section('titulo')
Lista de Marcas
@endsection

@section('cabecalho')
Marcas Cadastradas
@endsection
      
@section('conteudo')

@if(!empty($mensagem))

<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif
<a href="{{route('telac_marca')}}" class="btn btn-dark mb-2">Cadastrar</a>

<a href="{{route('index')}}" class="btn btn-dark mb-2 ">Inicio</a>

<ul class="list-group">
    @foreach ($marcas as $marca)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $marca->nome }}
            <form method="post" action="/marca/{{$marca->id}}" 
                onsubmit="return confirm('tem certeza que deseja remover {{ addslashes($marca->nome)}}?')">
                @csrf
                @method('DELETE')

                <div class="col col2">
                    <button class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                    </button>
                </div>
            </form>
            <div class="col col1">
            <a href="{{ route('telaedit_marca', ['id' =>$marca->id])}}">
                <button class="btn btn-primary ">Editar</button>
            </a>
        </div>

        </li>
       
    @endforeach

</ul>
@endsection