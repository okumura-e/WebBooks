<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestaqueController extends Controller
{
    public function destaque()
    {
        return view('livros.destaque');
    }
}
