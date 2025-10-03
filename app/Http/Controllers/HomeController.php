<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function show(){
        //recupera todo los registros de la tabla posts de la base de datos
        $noticias = Post::get();
        //retorna a la view lo que recupero en la tbla posts
        return view ('inicio') -> with('noticias', $noticias);
    }
}
