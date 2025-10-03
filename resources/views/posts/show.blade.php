@extends('layouts.app')
@section('titulo', 'Editar')
@section('contenido')
    <div class="container">
        <article>
            <h1>{{$post->titulo}}</h1>
            <p>{{$post->resumen}}</p>
            <p>{{$post->contenido}}</p>
        </article>
        <a href="../">inicio</a>
    </div>
@endsection