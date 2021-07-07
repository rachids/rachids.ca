<?php


namespace App\Helpers;

class ReadingTime
{
    // Average reading speed.
    const AVERAGE_WORDS_PER_MINUTE = 200;

    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * Return the number of minutes to read $this->content according to average reading speed.
     *
     * @return int
     */
    public function getReadingTimeInMinutes(): int
    {
        $minutes = floor($this->calculateWords() / self::AVERAGE_WORDS_PER_MINUTE);

        return $minutes < 1 ? 1 : $minutes;
    }

    /**
     * Calculate the number of words in $this->content.
     *
     * @return int
     */
    public function calculateWords(): int
    {
        return str_word_count($this->content);
    }
}
