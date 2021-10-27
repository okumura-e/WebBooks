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
    public function newwork()
    {
        if(Auth::check()=== true){
            return view('livros.newwork');
        }else{
            return view('livros.login');
        }
    }

    public function obra(Request $request)
    {
        $request->validate([
            'capa'=>'required',
            'titulo'=>'required|min:5|',
            'descricao'=>'required|min:50|',
            'obra'=>'required|min:500|',
            'categoria1'=>'required',
            'categoria2',
            'categoria3',
        ]);
    }

}

