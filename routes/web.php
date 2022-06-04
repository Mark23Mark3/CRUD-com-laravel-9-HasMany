<?php

use App\Http\Controllers\CategoriaControlador;
use App\Http\Controllers\ProdutoControlador;
use Illuminate\Support\Facades\Route;


Route::get("/",[CategoriaControlador::class,"index"]);

Route::prefix("admin")->group(function(){

    Route::get("categoria",[CategoriaControlador::class,"index"])->name("inicio");
    Route::post("categoria/create",[CategoriaControlador::class,"adicionar"])->name("adicionar_categoria");
    Route::get("categoria/apagar/{id}",[CategoriaControlador::class,"apagar"])->name("apagar_categoria");
    Route::get("categoria/editar/{id}",[CategoriaControlador::class,"editar"])->name("editar_categoria");
    Route::post("categoria/update",[CategoriaControlador::class,"update"])->name("update_categoria");
    
    Route::get("produto",[ProdutoControlador::class,"index"])->name("inicio_produto");
    Route::post("produto/create",[ProdutoControlador::class,"adicionar"])->name("adicionar_produto");
    Route::get("produto/apagar/{id}",[ProdutoControlador::class,"apagar"])->name("apagar_produto");
    Route::get("produto/editar/{id}",[ProdutoControlador::class,"editar"])->name("editar_produto");
    Route::post("produto/update",[ProdutoControlador::class,"update"])->name("update_produto");


}); 