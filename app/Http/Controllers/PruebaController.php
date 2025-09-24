<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\Inertia;
use App\Models\Cliente;


class PruebaController extends Controller
{
    public function login(){
return inertia::render('Principal/Prueba');
    }


    public function index2(){
        return inertia::render('Principal/Welcome');
    }

    public function index(){
        $clientes=Cliente::all();

        return inertia::render('Principal/Sucursal/Cliente', [
            'clientes' => $clientes,
        ]);
    }

    public function create(){

    }

public function store(Request $request)
{
    try {
        $cliente = Cliente::create($request->all());
        return Inertia::location(route('cliente.index'));
    } catch (\Exception $e) {
        return back()->withErrors(['error' => $e->getMessage()]);
    }
}



    public function show(Cliente $Cliente)
    {

    }
     public function edit(Cliente $Cliente)
    {

    }

public function update(Request $request, $id)
{
    try {
        $cliente = Cliente::findOrFail($id);
        $cliente->fill($request->all())->save();
        return Inertia::location(route('cliente.index'));
    } catch (\Exception $e) {
        return back()->withErrors(['error' => $e->getMessage()]);
    }
}


public function destroy($id)
{
    try {
        Cliente::where('id', $id)->delete();

return Inertia::location(route('cliente.index'));
    } catch(\Exception $e) {
        return $e->getMessage();
    }
}

}

