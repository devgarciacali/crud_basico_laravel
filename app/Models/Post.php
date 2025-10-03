<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //posts -> Post
    //users -> User
    use HasFactory;

    protected $fillable = [
        'titulo',
        'resumen',
        'contenido'
    ];
}
