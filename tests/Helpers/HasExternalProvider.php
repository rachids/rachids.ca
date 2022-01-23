<?php

namespace Tests\Helpers;

use App\Services\Youtube\Entities\Video;
use App\Services\Youtube\YoutubeService;
use Mockery\MockInterface;

trait HasExternalProvider
{
    private function mockYoutubeLatestVideo(): void
    {

        $this->mock(YoutubeService::class, function (MockInterface $mock) {
            $mock->shouldReceive('getLatestVideo')
                ->andReturn(
                    new Video(
                        'abc-video-id',
                        'My New Youtube Video',
                        'thumb.jpg',
                        'This is a Fake Video For Test Purpose.',
                        now()
                    )
                );
        });
    }
}
