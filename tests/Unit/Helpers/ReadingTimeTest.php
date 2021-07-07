<?php

namespace Tests\Unit\Helpers;

use App\Helpers\ReadingTime;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class ReadingTimeTest extends TestCase
{
    public function test_it_returns_word_count()
    {
        // Given a content and a ReadingTime object
        $content = "This is only five words.";
        $readingTime = new ReadingTime($content);

        // When getting the wordcount
        $actual = $readingTime->calculateWords();

        // Then it should be equals to the number of words in $content
        $expected = 5;
        $this->assertEquals($expected, $actual);
    }

    public function test_it_returns_one_minute_from_small_content()
    {
        // Given a content and a ReadingTime object
        $content = 'This is going to be pretty quick to read.';
        $readingTime = new ReadingTime($content);

        // When calculating the reading time
        $actual = $readingTime->getReadingTimeInMinutes();

        // Then it should be equals to the proper time
        $expected = 1;

        $this->assertEquals($expected, $actual);
    }

    public function test_it_returns_appropriate_reading_time_from_large_content()
    {
        $faker = Factory::create();

        // Given a large content and a ReadingTime object
        $content = $faker->words(950, true);
        $readingTime = new ReadingTime($content);

        // When calculating the reading time
        $actual = $readingTime->getReadingTimeInMinutes();

        // Then it should be equals to the proper time
        $expected = floor(950 / ReadingTime::AVERAGE_WORDS_PER_MINUTE);

        $this->assertEquals($expected, $actual);
    }
}
