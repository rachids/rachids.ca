<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Wink\WinkPost;

class BlogController extends Controller
{
    /**
     * Retourne une liste paginée de billets publiés.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $currentPage = request()->get("page", 1);

        $posts = Cache::remember("blog.posts.page{$currentPage}", 60 * 10, function () {
            return WinkPost::with(["author", "tags"])->live()->orderBy("publish_date", 'desc')->paginate(5);
        });

        return view("blog.index", [
            "posts" => $posts
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(WinkPost $post)
    {
        $post->load(["author", "tags"]);

        return view("blog.show", [
            "post" => $post
        ]);
    }
}
