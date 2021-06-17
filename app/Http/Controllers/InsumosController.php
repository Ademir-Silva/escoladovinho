<?php

namespace App\Http\Controllers;

use App\Models\Insumos;
use Illuminate\Http\Request;
use Session;


class InsumosController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        Insumos::create([
            'nome' => $request->nome,
            'descrição' => $request->descrição,
            'validade' => $request->validade,
            'adquirido' => $request->adquirido

        ]);

        Session::flash('message', 'cadastro realizado com sucesso.');
        return redirect()->route('ver_insumos');
    }

    public function showB()
    {
        $insumos = Insumos::get();
        return view('teste', compact('insumos'));
    }

    public function show()
    {
        $insumos = Insumos::get();
        return view('produto.vi', compact('insumos'));
    }

    public function showData()
    {
        $insumos = Insumos::orderBy('validade', 'asc')->get();
        return view('produto.vi', compact('insumos'));
    }

    public function showDataDec()
    {
        $insumos = Insumos::orderBy('validade', 'desc')->get();
        return view('produto.vi', compact('insumos'));
    }

    public function showAd()
    {
        $insumos = Insumos::orderBy('adquirido', 'asc')->get();
        return view('produto.vi', compact('insumos'));
    }

    public function showAdDec()
    {
        $insumos = Insumos::orderBy('adquirido', 'desc')->get();
        return view('produto.vi', compact('insumos'));
    }

    public function showNome()
    {
        $insumos = Insumos::orderBy('nome', 'asc')->get();
        return view('produto.vi', compact('insumos'));
    }

    public function showNomeDec()
    {
        $insumos = Insumos::orderBy('nome', 'desc')->get();
        return view('produto.vi', compact('insumos'));
    }

    public function showA()
    {
        $insumos = Insumos::get();
        return view('pedido.insumos', compact('insumos'));
    }



    public function edit($id)
    {
        $insumos = Insumos::findOrFail($id);

        return view('produto.ei', ['insumos' => $insumos]);
    }

    public function update(Request $request)
    {
        Insumos::findOrFail($request->id)->update($request->all());

        Session::flash('message', 'Item atualizado com sucesso com sucesso.');
        return redirect()->route('ver_insumos');
    }

    public function destroy($id)
    {
        Insumos::findOrFail($id)->delete();

        Session::flash('message', 'Item deletado com sucesso com sucesso.');
        return redirect()->route('ver_insumos');
    }
}
