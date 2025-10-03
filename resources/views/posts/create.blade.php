@extends('layouts.app')
@section('titulo', 'Crear')
@section('contenido')
    <form class="form-post" action="../posts" method="POST">
        <h2>Crear Post</h2>
        {{-- token oculto por seguridad --}}
        
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
        
        {{-- Genera un token --}}
        @csrf

        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo">
        </div>

        <div class="form-group">
            <label for="resumen">Resumen</label>
            <input type="text" name="resumen">
        </div>

        <div class="form-group">
            <label for="contenido">Contenido</label>
            <textarea name="contenido"></textarea>
        </div>

        <div class="form-group">
            <button type="submit">enviar</button>
        </div>

    </form>
    {{-- @endforeach --}}
    @endsection
    