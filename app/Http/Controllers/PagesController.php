<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PagesController extends Controller
{
    public function show($slug)
    {
        $page = Page::findBySlug($slug);
        return view('page', ['page' => $page]);
    }

    public function blog_index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('blog', compact('posts'));
    }

    public function blog_details($slug)
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        $post = Post::where('slug', $slug)->first();
        return view('blog_details', compact('posts', 'post'));
    }
}
