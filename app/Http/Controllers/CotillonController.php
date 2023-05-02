<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CotillonController extends Controller
{
    public function index()
    {
        return"Bienbenido a la pagina cotillon";
    }

    public function create()
    {
        return"Bienbenido a la pagina cotillon para crear";
    }
    public function show($cotillon)
    {
        return"Bienbenido a la pagina cotillon, $cotillon";
    }
}
