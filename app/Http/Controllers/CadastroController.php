<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CadastroController extends Controller
{
    public function cadastro()
    {
        return view('livros.cadastro');
    }
    public function registro(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|',
            'sname'=>'required',
            'email'=>'email|required',
            'password'=>'min:8|required',
            'confirm'=>'required_with:password|same:password',
            'date'=>'required',
        ]);
        $request['password']=Hash::make($request['password']);
        User::create($request->all());

        return view('livros.login');
    }
}
