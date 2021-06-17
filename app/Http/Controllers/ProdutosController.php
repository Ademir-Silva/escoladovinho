<?php
//Controle dos Reagentes
namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Produto::create([
            'nome'=>$request->nome,
            'gramas'=>$request->gramas,
            'validade'=>$request->validade,
            'adquirido'=>$request->adquirido,
            'quantidade'=>$request->quantidade

        ]);

        return redirect()->route('ver_reagentes');
    }

    public function showA()
    {
        $produto = Produto::get();
        return view('pedido.reagentes', compact('produto'));
    }

    public function show()
    {
        $produto = Produto::get();
        return view('produto.vr', compact('produto'));
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);

        return view('produto.er', ['produto' => $produto]);
    }

    public function update(Request $request)
    {
        Produto::findOrFail($request->id)->update($request->all());

        return redirect()->route('ver_reagentes');
    }

    public function destroy($id)
    {
        Produto::findOrFail($id)->delete();

        return redirect()->route('ver_reagentes');
    }
}
