<?php

namespace App\Http\Controllers;

use App\Entities\PostMetaTag;
use App\Models\BlogPost;
use App\Services\BlogService;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Wink\WinkPost;

class BlogController extends Controller
{
    /**
     * Retourne une liste paginée de billets publiés.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(string $category = '')
    {
        SEOMeta::setTitle("Blogue");

        if (!empty($category)) {
            $posts = BlogService::getPostsByTag($category);
        } else {
            $posts = BlogPost::with(["author:id,slug,name,avatar", "tags:id,slug,name"])
                ->live()
                ->orderBy("publish_date", "desc")
                ->select("id","slug","title","excerpt","body","publish_date","featured_image","featured_image_caption")
                ->paginate(6);
        }

        return view("blog.index", [
            "posts" => $posts
        ]);
    }

    public function show(BlogPost $post)
    {
        $post->load(["author", "tags"]);

        $this->generateSEOTags($post);

        return view("blog.show", [
            "post" => $post,
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
