<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestadoresController extends Controller
{
    public function index()
    {
        return view('prestadores');
    }
}
