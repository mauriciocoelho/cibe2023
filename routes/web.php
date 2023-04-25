<?php

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
Route::get('/', function () {
    return view('portal.index');
});

Route::get('confirma-dados', [PortalController::class, 'confirmaDados'])->name('confirma-dados');

//ADMIN
### AUTH ###
Auth::routes();
### HOME ###
Route::get('/admin.home', [HomeController::class, 'index'])->name('admin.home');

//Cache
Route::get('/clear-cache', function() {
    $run = Artisan::call('config:clear');
    $run = Artisan::call('cache:clear');
    $run = Artisan::call('config:cache');
    return 'FINISHED';  
});
