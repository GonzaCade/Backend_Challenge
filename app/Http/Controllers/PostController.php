<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use App\Events\PostSaved;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index', ['posts' => Post::get()]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('posts.create', [
            'post' => new Post
        ]);;
    }

    public function store(SavePostRequest $request)
    {
        $post = new Post($request->validated());

        $post->imagen = $request->file('imagen')->store('images');

        $post->save();

        PostSaved::dispatch($post);

        return redirect()->route('home')->with('status','Post creado correctamente');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post, SavePostRequest $request)
    {
        if( $request->hasFile('imagen'))
        {
            Storage::delete($post->imagen);
            
            $post->fill($request->validated());

            $post->imagen = $request->file('imagen')->store('images');

            $post->save();

            PostSaved::dispatch($post);
        } else {
            $post->update(array_filter($request->validated()));
        }
        return redirect()->route('posts.show', $post)->with('status','Post actualizado correctamente');
    }

    public function destroy(Post $post)
    {
        Storage::delete($post->imagen);
        $post->delete();
        return redirect()->route('home', $post)->with('status','Post eliminado correctamente');
    }
}
