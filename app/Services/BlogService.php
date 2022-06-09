<?php

namespace App\Services;

use App\Models\BlogPost;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogService
{
    public static function getPostsByTag(string $tag): LengthAwarePaginator
    {
        return BlogPost::with(["author:id,slug,name,avatar", "tags:id,slug,name"])
            ->live()
            ->tag($tag)
            ->orderBy("publish_date", "desc")
            ->select("id", "slug", "title", "excerpt", "body", "publish_date", "featured_image", "featured_image_caption")
            ->paginate(8);
    }
}
