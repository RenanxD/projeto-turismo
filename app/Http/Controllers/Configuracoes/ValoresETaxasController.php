<?php

namespace App\Http\Controllers\Configuracoes;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacaoTaxaRequest;
use App\Models\ValoresETaxas;
use Illuminate\Http\Request;

class ValoresETaxasController extends Controller
{
    public function index(Request $request)
    {
        $taxaAtual = ValoresETaxas::where('taxa_ativa', true)->latest()->first();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        if (!$taxaAtual) {
            $taxaAtual = ValoresETaxas::latest()->first();
        }

        $taxas = ValoresETaxas::paginate(7);

        return view('taxas.index', compact('taxas', 'taxaAtual'))
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('taxas.create');
    }

    public function store(ValidacaoTaxaRequest $request)
    {
        ValoresETaxas::create($request->all());
        $request->session()->flash('mensagem.sucesso', 'Taxa criada com sucesso!');

        return to_route('taxas.index')->with('success', 'Nova Taxa Cadastrada com Sucesso!');
    }

    public function destroy(Request $request)
    {
        ValoresETaxas::destroy($request->taxa);
        $request->session()->flash('mensagem.sucesso', 'Taxa Removida com Sucesso!');

        return to_route('taxas.index');
    }

    public function edit(string $id)
    {
        dd($id);
    }
}
