<?php

namespace App\Http\Controllers\Configuracoes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigUsuariosController extends Controller
{
    public function index()
    {
        return view('config.usuarios');
    }
}
