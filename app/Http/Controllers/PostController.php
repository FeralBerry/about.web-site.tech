<?php

namespace App\Http\Controllers;

use App\Events\PostCreate;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::get();

        return view('posts', compact('posts'));
    }

    public function store()
    {
        $post = Post::create([
            'user_id' => 1,
            'title' => 'Заголовок',
            'body' => 'текст'
        ]);
        event(new PostCreate($post));
        return $post;
        //return back()->with('success','Post created successfully.');
    }
}
