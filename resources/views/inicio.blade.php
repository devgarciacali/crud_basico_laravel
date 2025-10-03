{{-- LLAMO A LAS VIEW CON EXTENDS--}}
@extends('layouts.app')
@section('titulo', 'Bienvenidos')
@section('contenido')
<div class="container">
    <a class="btn btn-info" href="posts/create">Nuevo</a>
</div>

@foreach ($noticias as $noticia)
    <article class="blog-post">
        <a class="link-dark" href="posts/{{$noticia->id}}">
            <h2 class="display-5 link-body-emphasis mb-1">{{$noticia->titulo}}</h2>
        </a>
        <p class="blog-post-meta">{{$noticia->resumen}}</p>
        <a href="posts/{{$noticia->id}}/edit" class="btn btn-primary">editar</a>
        <form action="posts/{{$noticia->id}}" method="POST" style="display:inline-block">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit"
                onclick="return confirm('estas seguro de eliminar este post')">Eliminar</button>
        </form>
    </article>
@endforeach
@endsection

