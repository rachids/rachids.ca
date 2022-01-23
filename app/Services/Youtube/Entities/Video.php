<?php

namespace App\Services\Youtube\Entities;

use Carbon\Carbon;
use Illuminate\Support\Str;

class Video
{
    public function __construct(
        public string $id,
        public string $title,
        public string $thumbnail,
        public string $description,
        public Carbon $publishedAt,
    )
    {
    }

    public function excerpt(): string
    {
        return Str::words($this->description, 30);
    }

    public function getUrl(): string
    {
        return 'https://youtube.com/watch?v=' . $this->id;
    }

    public function getTitle(): string
    {
        return html_entity_decode($this->title, ENT_QUOTES);
    }
}
