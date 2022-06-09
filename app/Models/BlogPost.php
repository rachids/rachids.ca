<?php

namespace App\Models;

use App\Helpers\ReadingTime;
use Wink\WinkPost;

class BlogPost extends WinkPost
{
    public function getReadingTime(): int
    {
        return (new ReadingTime($this->body))->getReadingTimeInMinutes();
    }
}
