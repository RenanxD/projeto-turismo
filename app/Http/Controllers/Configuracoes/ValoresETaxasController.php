<?php

namespace App\Http\Controllers\Configuracoes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ValoresETaxasController extends Controller
{
    public function index()
    {
        return view('config.valores_e_taxas');
    }

    public function create()
    {
        return view('config.valores_e_taxas_create');
    }
}
