<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprovantesController extends Controller
{
    public function index()
    {
        return view('comprovantes');
    }
}
