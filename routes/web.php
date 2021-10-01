<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\IndexLoginController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\BibliotecaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('livros.index');
Route::get('/login', [IndexLoginController::class, 'indexLogin'])->name('livros.indexLogin');
Route::post('/login/attempt', [IndexLoginController::class, 'login'])->name('livros.login');

Route::get('/cadastro', [CadastroController::class, 'cadastro'])->name('livros.cadastro');
Route::post('/cadastro/attempt', [CadastroController::class, 'registro'])->name('livros.registro');

Route::get('/biblioteca',[BibliotecaController::class, 'biblioteca'])->name('livros.biblioteca');
