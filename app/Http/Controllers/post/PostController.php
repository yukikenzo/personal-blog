<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
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
        $posts = Post::where('id', '<>', $firstPost->id)->get();

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
    public function store(PostRequest $request)
    {
        $post = new Post();

        if ($request->image) {


            $post->image = $request->image->store('posts');

            // $extension = $request->image->getClientOriginalExtension();

            // $post->image = $request->image->storeAs('posts', now().".{$extension}");
        }

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
        $categorias = Categoria::orderBy('nome')->get();
        return view('posts.edit', compact('post', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
        $post = Post::findOrFail($id);

        $post->titulo = $request->input('titulo');
        $post->categoria_id = $request->input('categoria_id');
        $post->descricao = $request->input('descricao');

        if ($request->image) {

            if ($post->image) {
                unlink('storage/' . $post->image);
            }

            $post->image = $request->image->store('posts');
        }

        $post->update();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        if ($post->image) {
            unlink('storage/' . $post->image);
        }

        $post->delete();

        return redirect('/');
    }
}
