<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidacoesController extends Controller
{
    public function index()
    {
        return view('validacoes');
    }
}
