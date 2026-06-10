<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rotas Web — WindMarket
|--------------------------------------------------------------------------
*/

// Página inicial — lista o marketplace de turbinas
Route::get('/', [HomeController::class, 'index'])->name('home');

// Formulário de contato
Route::get('/contato', [ContatoController::class, 'create'])->name('contato');
Route::post('/contato', [ContatoController::class, 'store'])->name('contato.store');

/*
|--------------------------------------------------------------------------
| Rota Fallback
|--------------------------------------------------------------------------
| Captura qualquer URL que não corresponda às rotas definidas acima.
| Exibe uma página 404 customizada com a estética do site.
*/
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
