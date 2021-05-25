<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\FindPelis;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/algoritmos', function () {
    return view('algoritmos');
})->name('algoritmos');
Route::post('add', [FindPelis::class, 'addPeli']);
Route::post('delete', [FindPelis::class, 'deletePeli']);


