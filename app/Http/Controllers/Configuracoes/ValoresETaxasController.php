<?php

namespace App\Http\Controllers\Configuracoes;

use App\Http\Controllers\Controller;
use App\Models\ValoresETaxas;
use Illuminate\Http\Request;

class ValoresETaxasController extends Controller
{
    public function index()
    {
        $taxaAtual = ValoresETaxas::where('taxa_ativa', true)->latest()->first();

        if (!$taxaAtual) {
            $taxaAtual = ValoresETaxas::latest()->first();
        }

        $taxas = ValoresETaxas::paginate(7);

        return view('config.valores_e_taxas', compact('taxas', 'taxaAtual'));
    }

    public function create()
    {
        return view('config.modal.valores_e_taxas_create');
    }

    public function store(Request $request)
    {
        ValoresETaxas::create($request->all());

        return redirect()->route('config.valores_e_taxas.index');
    }
}
