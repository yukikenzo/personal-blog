<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\posts\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $firstPost = Post::all()->first();
        $posts = Post::all()->toArray();

        $key = array_search($firstPost, $posts);
        unset($posts[$key]);

        return view('welcome', compact('firstPost', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::orderBy('nome')->get();

        return view('posts.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post();

        $post->titulo = $request->input('titulo');
        $post->descricao = $request->input('descricao');
        $post->categoria_id = $request->input('categoria_id');

        $post->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);

        $posts = Post::where('categoria_id', '=', $post->categoria_id)->where('id', '<>', $post->id)->get();

        return view('posts.post', compact('post', 'posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);

        $post->titulo = $request->input('titulo');
        $post->tema = $request->input('tema');
        $post->descricao = $request->input('descricao');

        $post->update();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::findOrFail($id)->delete();

        return redirect('/');
    }
}
