<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = POST::paginate(9);
        return view('posts.all_posts', ['posts' => $posts]);
    }
    public function home()
    {
        $posts = POST::paginate(9);
        return view('home', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create_post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:4'],
            'description' => ['required', 'string', 'min:10'],
            'user_id' => ['required', 'exists:users,id']
        ]);
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => '1'
        ]);
        return back()->with('success', 'post added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $singlePost = Post::find($id);
        return view('posts.single_post', ['singlePost' => $singlePost]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::FindOrFail($id);
        return view('posts.edit_post', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::FindOrFail($id);
        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => '1'
        ]);
        return redirect('all_posts')->with('update', 'post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy($id);
        return back()->with('success', 'post deleted successfully');
    }
    public function search(REQUEST $request)
    {
        $search = $request->search;

        $posts = Post::where('description', 'LIKE', '%' . $search . '%')->get();
        return view('posts.search_post', ['posts' => $posts]);
    }
}
