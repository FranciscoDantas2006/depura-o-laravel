<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return view('welcome');
});

//ATIVIDADE 1, 2, 3 e 4

Route::get('/sobre', [PaginaController::class, 'sobre']);

//ATIVIDADE 5

Route::get('/contato', [PaginaController::class, 'contato']);

//ATIVIDADE 6

Route::get('/usuario/{id}', [PaginaController::class, 'usuario']);

//ATIVIDADE 7

Route::get('/produto/novo', function () {
    return "Novo Produto";
});

Route::get('/produto/{id}', function ($id) {
    return "Produto $id";
});


//ATIVIDADE 8

Route::get('/servicos', function () {
    return "Serviços";
});

//ATIVIDADE 9

Route::get('/blog', function () {
    return "Blog principal";
});
