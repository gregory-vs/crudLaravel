<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public static function index()
    {
        return Cliente::all();
    }

    public function create(Request $request)
    {
        $request->post();    
    }

    public function store(Request $request)
    {
        $cliente = new Cliente;
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->dt_nasc = $request->dt_nasc;
        $cliente->sexo = $request->sexo;
        $cliente->endereco = $request->endereco;
        $cliente->estado = $request->estado;
        $cliente->cidade = $request->cidade;
        $cliente->cep = $request->cep;

        try
        {
            $cliente->save();
            return redirect('/');
        }
        catch (\Exception $e)
        {
            return response()->json([
                'e' => $e->getMessage()
            ], 400);
        }
    }

    public function show(string $id)
    {
        return Cliente::findOrfail($id);
    }


    public function update(Request $request)
    {
        $cliente = Cliente::find($request->id);
        try
        {
            $cliente->update($request->all());
            return redirect('/');
        }
        catch (\Exception $e){
            return response()->json([
                'e' => $e->getMessage()
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        
        try
        {
            CLiente::where('id', $id)->delete();
            return redirect('/');
        }
        catch (\Exception $e)
        {
            return response()->json([
                'e' => $e->getMessage()
            ], 400);
        }
    }
}
