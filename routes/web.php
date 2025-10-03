<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;


Route::view('/layout', "layouts.app");
//en la ruta obtenuda en esta funcion, retorna la vista welcome
Route::get('/', [HomeController::class, "show"]);

Route::controller(PostsController::class)->group(function(){
   /**SIEMPRE IRA PRIMERO EL CREATE */ 
    Route::get('/posts/create',"create"); // crear los blogs
    Route::get('/posts/{id}', "show"); // 
    Route::post('/posts', "store");
    Route::get('/posts/{id}/edit',"edit");
    Route::patch('/posts/{id}',"update");
    Route::delete('/posts/{id}', "destroy");
});



/*
Route ::get('/historia', function(){
    return view ('historia');
});


Route::get('/contacto', function(){
    return 'contacto';
});

Route::prefix('/nosotros')->group(function(){
    Route ::get('/historia', function(){
        return 'Historia';
    });

    Route ::get('/mision', function(){
        return 'Mision';
    });

    Route ::get('/vision', function(){
        return 'Vision';
    });
});


Route ::get('/noticias/{id}', function($id){
    return $id;
});

Route::get('/servicios/{id}', function($id){
    return request()->segment(1);
});*/