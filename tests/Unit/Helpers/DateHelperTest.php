<?php

namespace Tests\Unit\Helpers;

use App\Helpers\DateHelper;
use Carbon\Carbon;
use PHPUnit\Framework\TestCase;

class DateHelperTest extends TestCase
{
    public function test_it_returns_human_readable_date()
    {
        // Given the current date
        $date = Carbon::now();

        // When passing the date to the helper without any parameter
        $actual = DateHelper::showHumanOrDate($date);

        // Then it should show the date in human readable form
        $expected = $date->diffForHumans();
        $this->assertEquals($expected, $actual);
    }

    public function test_it_returns_formatted_date()
    {
        // Given a past date
        $date = Carbon::now()->subDays(10);

        // When passing the date to the helper without any parameter
        $actual = DateHelper::showHumanOrDate($date);

        // Then it should show the date formatted
        $expected = $date->format('d/m/Y');
        $this->assertEquals($expected, $actual);
    }

    public function dataFormattingForPeriodProvider(): array
    {
        return [
            [
                'date' => Carbon::now(),
                'periodInDays' => 2,
                'expected' => Carbon::now()->diffForHumans(),
            ],
            [
                'date' => Carbon::now(),
                'periodInDays' => 0,
                'expected' => Carbon::now()->format('d/m/Y'),
            ],
            [
                'date' => Carbon::now()->subDays(10),
                'periodInDays' => 200,
                'expected' => Carbon::now()->subDays(10)->diffForHumans(),
            ],
        ];
    }

    /**
     * @dataProvider dataFormattingForPeriodProvider
     * @param Carbon $date
     * @param int $periodInDays
     * @param string $expected
     */
    public function test_it_returns_proper_formatting_according_to_period(Carbon $date, int $periodInDays, string $expected)
    {
        // Given a date and a period in days
        // When passing the date to the helper with a given period
        $actual = DateHelper::showHumanOrDate($date, $periodInDays);

        // Then it should show the date with the proper formatting
        $this->assertEquals($expected, $actual);
    }
}
