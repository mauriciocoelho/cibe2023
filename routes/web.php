<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InscricoesController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//PORTAL
Route::get('/', [PortalController::class, 'index']);
Route::get('inscricao', [PortalController::class, 'inscricao'])->name('inscricao');
Route::get('confirma-dados', [PortalController::class, 'confirmaDados'])->name('confirma-dados');
Route::post('finaliza-inscricao', [PortalController::class, 'finalizaInscricao'])->name('finaliza-inscricao');
Route::post('fazer-pagamento', [PortalController::class, 'fazerPagamento'])->name('fazer-pagamento');


//ADMIN
### AUTH ###
Auth::routes();
### HOME ###
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [HomeController::class, 'index'])->name('admin');

Route::resource('/usuarios', UsersController::class);
Route::resource('/inscricoes', InscricoesController::class);
Route::patch('inscricoes/pagamento/{id}', [InscricoesController::class, 'pagamento'])->name('inscricoes.pagamento');
Route::get('exportInscricoes',  [InscricoesController::class, 'export'])->name('inscricoes.export');
Route::get('relatorio-inscricao-pagas', [InscricoesController::class, 'relatorioInscricaoPaga'])->name('relatorio-inscricao.paga');
Route::get('relatorio-inscricao-a-pagar', [InscricoesController::class, 'relatorioInscricaoAPagar'])->name('relatorio-inscricao.apagar');

//Error 404
Route::fallback(function () {
    return view('errors.404');
});

//Cache
Route::get('/clear-cache', function() {
    $run = Artisan::call('config:clear');
    $run = Artisan::call('cache:clear');
    $run = Artisan::call('config:cache');
    return 'FINISHED';  
});
