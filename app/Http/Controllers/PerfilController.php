<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class PerfilController extends Controller
{
    public function perfil()
    {
        if(Auth::check() === true){
            $nome = Auth::user()->name;
            $snome = Auth::user()->sname;
            return view('livros.perfil', ['nome' => $nome, 'snome'=> $snome]);
        }
        else{
            return view('livros.login');
        }
        
    }
}
