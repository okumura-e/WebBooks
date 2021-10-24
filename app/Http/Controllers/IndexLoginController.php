<?php

namespace App\Http\Controllers;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexLoginController extends Controller
{
    public function indexLogin()
    {
        return view('livros.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'=>'email|required',
            'password'=>'required|min:8'
        ]);
        $dados = $request->only('email','password');
        
        if(Auth::attempt($dados)){
            return view('livros.biblioteca');
        }else{
            return redirect()->route('livros.login');
        }
    }
}
