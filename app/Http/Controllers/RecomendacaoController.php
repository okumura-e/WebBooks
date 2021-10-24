<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecomendacaoController extends Controller
{
    public function recomendacao()
    {
        return view('livros.recomendacao');
    }
}
