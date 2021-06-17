<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function home()
    {
        return view('pedido.pedido');
    }

    public function store(Request $request)
    {
        Pedido::create([
            'nome' => $request->nome,
            'item' => $request->item,
            'nome_item' => $request->nome_item,
            'previsão' => $request->previsão,
            'quantidade' => $request->quantidade,
            'situação' => $request->situação,

        ]);

        return redirect()->route('ver_solicitações');
    }

    public function show()
    {
        $pedido = Pedido::get();
        return view('pedido.lista', compact('pedido'));
    }

    public function showA()
    {
        $pedido = Pedido::get();
        return view('produto.vs', compact('pedido'));
    }

    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);

        return view('produto.es', ['pedido' => $pedido]);
    }

    public function update(Request $request)
    {
        Pedido::findOrFail($request->id)->update($request->all());

        return redirect()->route('ver_solicitações');
    }

    public function destroy($id)
    {
        Pedido::findOrFail($id)->delete();

        return redirect()->route('ver_solicitações');
    }
}
