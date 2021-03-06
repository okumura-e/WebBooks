<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\IndexLoginController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\RecomendacaoController;
use App\Http\Controllers\DestaqueController;
use App\Http\Controllers\PerfilController;

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
Route::get('/leitura/{id}', [BibliotecaController::class, 'leitura'])->name('livros.leitura');
Route::get('/recomendacao',[RecomendacaoController::class, 'recomendacao'])->name('livros.recomendacao');
Route::get('/destaque',[DestaqueController::class, 'destaque'])->name('livros.destaque');

Route::get('/perfil', [PerfilController::class, 'perfil'])->name('livros.perfil');
Route::get('/newwork',[PerfilController::class, 'newwork'])->name('livros.newwork');
Route::post('/newpost',[PerfilController::class, 'obra'])->name('livros.post');


Route::get('/{id}/profile',[PerfilController::class, 'edit'])->where('id', '[0-9]+')->name('livros.edit');
Route::put('/{id}/newprofile', [PerfilController::class,'update'])->where('id', '[0-9]+')->name('livros.update');
Route::delete('/{id}', [PerfilController::class, 'destroy'])->where('id', '[0-9]+')->name('livros.destroy');

Route::get('/editbook/{id}',[PerfilController::class, 'editBook'])->where('id', '[0-9]+')->name('livros.editBook');
Route::put('/newbook/{id}', [PerfilController::class, 'updateBook'])->where('id', '[0-9]+')->name('livros.updateBook');
Route::delete('/delete/{id}', [PerfilController::class, 'destroyBook'])->where('id', '[0-9]+')->name('livros.destroyBook');

Route::fallback([IndexController::class, 'index'])->name('livros.index');