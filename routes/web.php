<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendasController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('vendas', VendasController::class);

Route::post('/vendas/criar', [VendasController::class, 'store'])->name('vendas.store');
Route::get('/vendas/listar', [VendasController::class, 'show'])->name('vendas.show');
Route::put('/vendas/alterar', [VendasController::class, 'update'])->name('vendas.update');
Route::delete('/vendas/deletar', [VendasController::class, 'destroy'])->name('vendas.destroy');