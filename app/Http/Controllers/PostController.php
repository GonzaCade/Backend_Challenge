<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
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
        $imagen = $request->file('imagen');
        $file_name = $imagen->getClientOriginalName();
        $imagen->move('storage/images', $file_name);
        $url = '/storage/images/' . $file_name;
        $post['imagen'] = $url;

        Post::create($request->validated());

        return redirect()->route('home');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post, SavePostRequest $request)
    {
        $imagen = $request->file('imagen');
        $file_name = $imagen->getClientOriginalName();
        $imagen->move('storage/images', $file_name);
        $url = '/storage/images/' . $file_name;
        $post['imagen'] = $url;
        unset($request['imagen']);
        return $request;

        $post->update($request->validated());
        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('home', $post);
    }
}
