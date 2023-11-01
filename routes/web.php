<?php

use App\Livewire\Admin\Livros\Livros;
use App\Livewire\Admin\Livros\LivrosForm;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::redirect('/','/livros');
Route::get('/livros',Livros::class);
Route::get('/livros/add',LivrosForm::class);
Route::get('/livros/{livro}/editar',LivrosForm::class);

