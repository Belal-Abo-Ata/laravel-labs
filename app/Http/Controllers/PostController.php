<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::paginate();
        return view('posts.index', ['posts' => $posts]);
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

        $post = new Posts;
        $post->title= $request->title;
        $post->body = $request->body;
        $post->enabled= 1;
        $post->published_at= now();
        $post->user_id = Auth::id();
        $post->save();
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Posts::find($id);

        return view('posts.show', ['post' => $post]);
    }

    public function showTrash()
    {
        $deletedPosts = Posts::onlyTrashed()->get();

        return view('posts.trash', ['deletedPostss' => $deletedPosts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostRequest $request, string $id)
    {
        $post = Posts::find($id);

        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Posts::find($id);
        $post->title= $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Posts::find($id)->delete();
    }
}
