<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BibliotecaController extends Controller
{
    public function biblioteca()
    {
        if(Auth::check() === true){
            return view('livros.biblioteca');
        }
        else{
            return view('livros.login');
        }
    }
}
