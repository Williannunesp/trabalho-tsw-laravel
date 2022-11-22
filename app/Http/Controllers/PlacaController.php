<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Placa;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class PlacaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $veiculos = Veiculo::all();
        $clientes = Cliente::all();


        return view('placa.create', ['veiculos'=> $veiculos, 'clientes'=> $clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Placa::create([
            'numero'=> $request->numero,
            'veiculo_id'=> $request->veiculo_id,
            'cliente_id'=> $request->cliente_id
        ]);

        return redirect('placa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $placa = Placa::query()->orderBy('numero')->get();

        $mensagem = $request->session()->get('mensagem');
        

        return view('placa.show', compact('placa', ('mensagem')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $placas = Placa::find($id);

        $veiculos = Veiculo::all();
        $clientes = Cliente::all();


        return view('placa.create', ['placas'=> $placas, 'veiculos'=> $veiculos, 'clientes'=> $clientes]);
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
        $placas = Placa::find($id);

        $placas->update([
            'numero'=> $request->numero,
            'veiculo_id'=> $request->veiculo_id,
            'cliente_id'=> $request->cliente_id
        ]);

        return redirect('placa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Placa::destroy($request->id);

        return redirect('placa');
    }
}
