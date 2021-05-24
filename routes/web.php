<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/{slug}', [\App\Http\Controllers\SiteController::class, 'index'])->name("site.index");
Route::get('/', [\App\Http\Controllers\SiteController::class, 'landing'])->name("site.landing");

Route::get('/dashboard/login', [\App\Http\Controllers\PainelController::class, 'login'])->name("painel.login");
Route::post('/dashboard/logar', [\App\Http\Controllers\PainelController::class, 'logar'])->name("painel.logar");

Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard/inicio', [\App\Http\Controllers\PainelController::class, 'index'])->name("painel.index");
    Route::get('/dashboard/sair', [\App\Http\Controllers\PainelController::class, 'sair'])->name("painel.sair");

    // ROTAS DE USUARIOS
    Route::get('/dashboard/usuarios/cadastro', [\App\Http\Controllers\UsuariosController::class, 'cadastro'])->name("painel.usuario.cadastro");
    Route::post('/dashboard/usuarios/cadastrar', [\App\Http\Controllers\UsuariosController::class, 'cadastrar'])->name("painel.usuario.cadastrar");
    Route::get('/dashboard/usuarios', [\App\Http\Controllers\UsuariosController::class, 'consultar'])->name("painel.usuarios");
    Route::get('/dashboard/usuarios/editar/{usuario}', [\App\Http\Controllers\UsuariosController::class, 'editar'])->name("painel.usuario.editar");
    Route::post('/dashboard/usuarios/salvar/{usuario}', [\App\Http\Controllers\UsuariosController::class, 'salvar'])->name("painel.usuario.salvar");
    
    // ROTAS DE CLIENTES
    Route::get('/dashboard/clientes', [\App\Http\Controllers\ClientesController::class, 'consultar'])->name("painel.clientes");
    Route::get('/dashboard/clientes/cadastro', [\App\Http\Controllers\ClientesController::class, 'cadastro'])->name("painel.cliente.cadastro");
    Route::post('/dashboard/clientes/cadastrar', [\App\Http\Controllers\ClientesController::class, 'cadastrar'])->name("painel.cliente.cadastrar");
    Route::get('/dashboard/clientes/relatorio/{cliente}', [\App\Http\Controllers\ClientesController::class, 'relatorio'])->name("painel.cliente.relatorio");
    Route::get('/dashboard/clientes/editar/{cliente}', [\App\Http\Controllers\ClientesController::class, 'editar'])->name("painel.cliente.editar");
    Route::post('/dashboard/clientes/salvar/{cliente}', [\App\Http\Controllers\ClientesController::class, 'salvar'])->name("painel.cliente.salvar");
    Route::post('/dashboard/clientes/rede/{cliente}', [\App\Http\Controllers\ClientesController::class, 'rede'])->name("painel.cliente.getree.rede");
    Route::post('/dashboard/clientes/rede/adicionar/{cliente}', [\App\Http\Controllers\ClientesController::class, 'adicionar_rede'])->name("painel.cliente.rede.adicionar");
    Route::post('/dashboard/clientes/rede/salvar/{elemento}', [\App\Http\Controllers\ClientesController::class, 'salvar_rede'])->name("painel.cliente.rede.salvar");
    Route::get('/dashboard/clientes/rede/remover/{elemento}', [\App\Http\Controllers\ClientesController::class, 'remover_rede'])->name("painel.cliente.rede.remover");

    // ROTA DE LOG
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
});