<?php

namespace App\Services\Youtube;

use App\Services\Youtube\Entities\Video;
use Carbon\Carbon;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class YoutubeService
{
    public function getLatestVideo(): Video
    {
        $parameters= [
            'part' => 'snippet',
            'channelId' => config('services.youtube.channel_id'),
            'maxResults' => 1,
            'order' => 'date',
            'type' => 'video',
        ];

        $lastVideo = $this->fetch('search', $parameters)->json('items')[0];

        return new Video(
            $lastVideo['id']['videoId'],
            $lastVideo['snippet']['title'],
            $lastVideo['snippet']['thumbnails']['medium']['url'],
            $lastVideo['snippet']['description'],
            Carbon::createFromFormat('Y-m-d\TH:i:sP', $lastVideo['snippet']['publishedAt']),
        );
    }

    private function fetch(string $uri, array $parameters = []): Response
    {
        $parameters = array_merge($parameters, [
            'key' => config('services.youtube.key'),
        ]);

        return Http::baseUrl('https://www.googleapis.com/youtube/v3/')
            ->asJson()
            ->get($uri, $parameters);
    }
}
