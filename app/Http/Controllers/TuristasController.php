<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuristasController extends Controller
{
    public function index()
    {
        return view('turistas');
    }
}
