<?php
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\consignadoController;
use App\Http\Controllers\produtoController;
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

Route::get('/',[ClienteController::class,'index'])->name('Home');
Route::get('/create',[ClienteController::class,'create'])->name('Criar-Cliente');
Route::get('/produtos',[produtoController::class,'index'])->name('Produtos');
Route::get('/produtos/create',[produtoController::class,'create'])->name('Criar-Produto');
Route::get('/consignados',[consignadoController::class,'index'])->name('Consignados');
