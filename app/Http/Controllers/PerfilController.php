<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use App\Traits\UploadAble;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;

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
            'image'=>'required|image|mimes:jpeg,png,jpg,gif',
            'tittle'=>'required|min:5|',
            'descricao'=>'required',
            'obra'=>'required',
            'categoria1'=>'required',
            'categoria2',
            'categoria3',
        ]);
        if ($request->hasFile('image') && $request->file('image')->isValid())
        {
            $requestImg = $request->image;
            $extension = $requestImg->extension();
            $imageName = $requestImg->getClientOriginalName() . "." . $extension;
            $requestImg->move(public_path('img/events'), $imageName);
            $request->image = $imageName;
        }
        $livro = new Book();
        $user = auth()->user()->id;
        $livro->user_id = $user;
        $livro->image = $imageName;
        $livro->tittle = $request->tittle;
        $livro->descricao = $request->descricao;
        $livro->obra = $request->obra;
        $livro->categoria1 = $request->categoria1;
        $livro->categoria2 = $request->categoria2;
        $livro->categoria3 = $request->categoria3;
        $livro->save();
        return redirect()->route('livros.perfil');
    }


    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        if(!empty($user))
        {
            return view('livros.edit', ['nome' => $user->name, 'snome' => $user->sname]);
        }else{
            return view('livros.perfil');
        }
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'sname'=>'required'
        ]);

        $user = auth()->user();
        $nova = [
            'name'=> $request->name,
            'sname'=> $request->sname,
        ];
        User::where('id', $id)->update($nova);
        return redirect()->route('livros.perfil');
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        redirect()->route('livros.index');
    }


}