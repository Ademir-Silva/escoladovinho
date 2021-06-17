<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Estoque;
use Illuminate\Http\Request;

class EstoquesController extends Controller
{
    public function create()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        Estoque::create([

            'nome'=>$request->nome,
            'tipo'=>$request->tipo,
            'grupo'=>$request->grupo,
            'validade'=>$request->validade,
            'adquirido'=>$request->adquirido,
            'quantidade'=>$request->quantidade

        ]);

        return redirect()->route('ver_estoque');
    }


    public function show()
    {
        $estoque = Estoque::get();
        return view('estoque.ve', compact('estoque'));
    }

    public function edit($id)
    {
        $estoque = Estoque::findOrFail($id);

        return view('estoque.ee', ['estoque' => $estoque]);
    }

    public function update(Request $request)
    {
        Estoque::findOrFail($request->id)->update($request->all());

        return redirect()->route('ver_estoque');
    }

    public function destroy($id)
    {
        Estoque::findOrFail($id)->delete();

        return redirect()->route('ver_estoque');
    }
}
