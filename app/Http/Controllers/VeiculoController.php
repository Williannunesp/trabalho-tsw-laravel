<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Marca;
use App\Models\Placa;
use App\Models\Veiculo;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $placas = Placa::find($id);

        $veiculos = Veiculo::all();
        $clientes = Cliente::all();

        return view('placa.dados', ['placas'=> $placas, 'veiculos'=> $veiculos, 'clientes'=> $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $marcas = Marca::all();

        return view('veiculo.create', ['marcas'=> $marcas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Veiculo::create([
            'nome' => $request->nome,
            'marca_id' => $request->marca_id
        ]);

        return redirect('veiculo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $veiculo = Veiculo::query()->orderBy('nome')->get();

        $mensagem = $request->session()->get('mensagem');
        

        return view('veiculo.show', compact('veiculo', ('mensagem')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veiculos = Veiculo::find($id);

        $marcas = Marca::all();

        return view('veiculo.edit', ['veiculos'=> $veiculos, 'marcas'=> $marcas]);
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

        $veiculos = Veiculo::find($id);

        $veiculos->update([
            'nome' => $request->nome,
            'marca_id' => $request->marca_id
        ]);

        return redirect('veiculo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Veiculo::destroy($request->id);

        return redirect('veiculo');
    }
}
