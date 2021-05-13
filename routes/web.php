<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\QueueController;
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

Route::redirect('/', '/tickets');

Route::get('/tickets', [IndexController::class, 'index'])->name('tickets.index');
Route::post('/tickets', [ClientController::class, 'store'])->name('tickets.store');

Route::get('/queues/{id}', [QueueController::class, 'index'])->name('queues.index');
Route::get('/clients/edit/{id}', [ClientController::class, 'update'])->name('clients.update');
Route::get('/clients/delete/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');
