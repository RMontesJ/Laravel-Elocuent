<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
public function index()
{
    $posts = \App\Models\Post::all();
    return view('posts.ver', compact('posts')); // cambiamos a la vista 'ver'
}


   public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'categoria' => 'required',
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->categoria = $request->categoria;
        $post->save();

        return redirect('/crear-post')->with('success', 'Post creado exitosamente.');
    }

public function edit(Post $post)
{
    return view('posts.edit', compact('post'));
}

// Guarda los cambios en la base de datos
public function update(Request $request, Post $post)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    $post->update($request->only('title', 'content'));

    return redirect()->route('ver-posts')->with('success', 'Post actualizado correctamente');
}

    public function destroy(Post $post)
{
    $post->delete();

    return redirect()->route('ver-posts')->with('success', 'Post eliminado correctamente');
}

}
