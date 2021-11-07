<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Book;
use App\Models\User;

class BibliotecaController extends Controller
{
    public function biblioteca()
    {
        if(Auth::check() === true){
            $user = auth()->user();
            $books = $user->books;
                return view('livros.biblioteca', compact('books'));
        }
        else{
            return view('livros.login');
        }
    }
}

