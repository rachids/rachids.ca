<?php

namespace App\Http\Controllers;

use App\Entities\PostMetaTag;
use App\Helpers\ReadingTime;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
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
        SEOMeta::setTitle("Blogue");

        $currentPage = request()->get("page", 1);

        $posts = Cache::remember("blog.posts.page{$currentPage}", 60 * 10, function () {
            return WinkPost::with(["author:id,slug,name,avatar", "tags:id,slug,name"])
                ->live()
                ->orderBy("publish_date", "desc")
                ->select("id","slug","title","excerpt","publish_date","featured_image","featured_image_caption")
                ->paginate(8);
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

        $this->generateSEOTags($post);

        $readingTime = new ReadingTime($post->content);

        return view("blog.show", [
            "post" => $post,
            "readingTime" => $readingTime,
        ]);
    }

    /**
     * Isolate the SEO tags generation.
     *
     * @param WinkPost $post
     */
    private function generateSEOTags(WinkPost $post): void
    {
        $postMetaTags = PostMetaTag::createFromArray($post->meta);

        SEOMeta::setTitle($post->title);
        SEOMeta::setDescription($postMetaTags->metaDescription);
        OpenGraph::setTitle($postMetaTags->openGraphTitle);
        OpenGraph::setType('article')->setArticle([
            'published_time' => $post->publish_date->toW3cString(),
            'author' => $post->author->name,
            'tag' => $post->tags->implode('name', ','),
        ]);
        OpenGraph::setDescription($postMetaTags->openGraphDescription);
        OpenGraph::addImage($postMetaTags->openGraphImage, [
            'height' => $postMetaTags->openGraphImageHeight,
            'width' => $postMetaTags->openGraphImageWidth,
        ]);
    }
}
