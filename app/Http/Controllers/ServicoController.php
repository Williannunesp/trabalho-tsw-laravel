<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Placa;
use App\Models\Servico;
use App\Models\Situacao;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $servicos = Servico::find($id);

        $placas = Placa::all();
        $situacoes = Situacao::all();

        return view ('servico.situacao', ['servicos'=> $servicos, 'placas'=> $placas, 'situacoes'=> $situacoes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $placas = Placa::all();
        $situacoes = Situacao::all();

        return view('servico.create', ['placas'=> $placas, 'situacoes'=> $situacoes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Servico::create([
            'nome'=> $request->nome,
            'placa_id'=> $request->placa_id,
            'situacao_id'=> $request->situacao_id,
            'valor'=> $request->valor
        ]);

        return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $servicos = Servico::query()->orderBy('nome')->get();


        $mensagem = $request->session()->get('mensagem');
        

        return view('servico.show', compact('servicos',('mensagem')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicos = Servico::find($id);

        $placas = Placa::all();
        $situacoes = Situacao::all();

        return view ('servico.edit', ['servicos'=> $servicos, 'placas'=> $placas, 'situacoes'=> $situacoes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $servicos = Servico::find($id);


        $servicos->update([
            'nome'=> $request->nome,
            'placa_id'=> $request->placa_id,
            'situacao_id'=> $request->situacao_id,
            'valor'=> $request->valor
        ]);

        return redirect('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
