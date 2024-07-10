<?php

use App\Http\Controllers\AtividadesController;
use App\Http\Controllers\ComprovantesController;
use App\Http\Controllers\Configuracoes\ConfigUsuariosController;
use App\Http\Controllers\Configuracoes\ValoresETaxasController;
use App\Http\Controllers\ConfiguracoesController;
use App\Http\Controllers\IsencoesController;
use App\Http\Controllers\PagamentosController;
use App\Http\Controllers\PrestadoresController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TuristasController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ValidacoesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/turistas', [TuristasController::class, 'index'])->name('turistas.index');
Route::get('/prestadores', [PrestadoresController::class, 'index'])->name('prestadores.index');
Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/isencoes', [IsencoesController::class, 'index'])->name('isencoes.index');
Route::get('/atividades', [AtividadesController::class, 'index'])->name('atividades.index');
Route::get('/comprovantes', [ComprovantesController::class, 'index'])->name('comprovantes.index');
Route::get('/validacoes', [ValidacoesController::class, 'index'])->name('validacoes.index');
Route::get('/pagamentos', [PagamentosController::class, 'index'])->name('pagamentos.index');

Route::get('/configuracoes', [ConfiguracoesController::class, 'index'])->name('config.index');
Route::get('/configuracoes/usuarios', [ConfigUsuariosController::class, 'index'])->name('config.usuarios.index');

Route::resource('/taxas', ValoresETaxasController::class)
    ->except(['show']);

require __DIR__.'/auth.php';
