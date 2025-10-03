<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->input('titulo'));

        //mandamos istanciar al modelo Post 
        // $post = new Post;
        // $post->titulo = $request->input('titulo');
        // $post->resumen = $request->input('resumen');
        // $post->contenido = $request->input('contenido');
        
        // $post->save();

        //Post::create($request->all());
        Post::create([
            'titulo' =>  $request->input('titulo'),
            'resumen' =>  $request->input('resumen'),
            'contenido' =>  $request->input('contenido'),
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $id)
    {

        //accede solo al id existente de la bsd
       // $post = Post::findOrFail($id);
       // dd($id);
        return view('posts.show')->with([
            'post'=>$id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $id)
    {
        return view('posts.edit')->with([
            'post'=>$id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $id)
    {
        //actualiza con los siguientes parametros
        
        $id->update([
            'titulo'=>$request->input('titulo'),
            'resumen'=>$request->input('resumen'),
            'contenido'=>$request->input('contenido')
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $id)
    {
        $id->delete();
        return redirect('/');
    }
}
