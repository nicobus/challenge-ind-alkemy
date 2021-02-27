<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::byCreationDateDesc()->paginate(8);
        $title = 'Todos los posts';
        $vac = compact('posts', 'title');
        return view('pages.home', $vac);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post;
        $title = 'Crear Post';
        $vac = compact('post', 'title');
        return view('pages.createPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post;
        $post->create($request->all());
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $title = 'Post '. $id;
        $vac = compact('post', 'title
        ');
        return view('pages.postDetail', $vac);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $title = 'Editar post' . $id;
        $vac = compact('post', 'title');
        return view('pages.postEdit', $vac);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request)
    {
        $post = new Post;
        $post->create($request->all());
        return redirect(route('postDetail', ['id' => $post->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostRequest $request)
    {
        $post = Post::find($request['movie_id']);
        $request->delete();
        return redirect(route('home'));
    }
}
