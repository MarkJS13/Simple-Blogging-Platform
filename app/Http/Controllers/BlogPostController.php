<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function welcome() 
    {
        
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('welcome', [
            'posts' => $posts
        ]);
    }

    public function display()
    {
        //$posts = Post::orderBy('id', 'desc')->get();
        $user = Auth::user();
        $post = Post::where('user_id', $user->id)->orderBy('id', 'desc')->get();
        
        return view('dashboard', [
            'posts' => $post
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $request->validated();

        $user = Auth::user();


        Post::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'body' => $request->body,
                'min_to_read' => $request->min_to_read,
                'user_id' => $user->id
            ]);

        return redirect(route('post.display'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        //dd($post);
        return view('details', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);

        return view('edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, string $id)
    {
        $post = Post::findOrFail($id);

        $request->validated();

        $post->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'min_to_read' => $request->min_to_read,
        ]);
        
        return redirect(route('post.display'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect(route('post.display'))->with('message', 'Successfully Deleted');
    }
}
