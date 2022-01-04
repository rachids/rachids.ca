<?php

namespace App\Services;

use Illuminate\Pagination\LengthAwarePaginator;
use Wink\WinkPost;

class BlogService
{
    public static function getPostsByTag(string $tag): LengthAwarePaginator
    {
        return WinkPost::with(["author:id,slug,name,avatar", "tags:id,slug,name"])
            ->live()
            ->tag($tag)
            ->orderBy("publish_date", "desc")
            ->select("id","slug","title","excerpt","publish_date","featured_image","featured_image_caption")
            ->paginate(8);
    }
}
