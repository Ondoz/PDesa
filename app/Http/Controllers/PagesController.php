<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PagesController extends Controller
{
    public function show($slug, $details = null)
    {
        $page = Page::findBySlug($slug);
        if ($page->slug == "blog") {
            $posts = Post::orderBy('created_at', 'desc')->paginate(10);
            return view('blog', compact('posts'));
        } else {
            return view('page', ['page' => $page]);
        }
    }

    public function blog_details($slug)
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        $post = Post::where('slug', $slug)->first();
        return view('blog_details', compact('posts', 'post'));
    }
}
