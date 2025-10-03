@extends('layouts.app')
@section('titulo', 'Editar')
@section('contenido')
    <form class="form-post" action="../{{$post->id}}" method="POST">
        <h2>Editar Post</h2>
        {{-- token oculto por seguridad --}}
        
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
        
        {{-- Genera un token --}}
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" value="{{$post->titulo}}">
        </div>

        <div class="form-group">
            <label for="resumen">Resumen</label>
            <input type="text" name="resumen" value="{{$post->resumen}}">
        </div>

        <div class="form-group">
            <label for="contenido">Contenido</label>
            <textarea name="contenido" cols="30" rows="10"> {{$post->contenido}}</textarea>
        </div>

        <div class="form-group">
            <button type="submit">Actualizar</button>
        </div>

    </form>
    @endsection