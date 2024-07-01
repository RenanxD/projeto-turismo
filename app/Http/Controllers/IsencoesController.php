<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsencoesController extends Controller
{
    public function index()
    {
        return view('isencoes');
    }
}
