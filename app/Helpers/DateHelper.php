<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper
{
    /**
     * Return the date in human readable form if the date is less than $period
     * otherwise return the date normally formatted (dd/mm/YY).
     *
     * @param Carbon $date
     * @param int $periodInDays
     * @return string
     */
    public static function showHumanOrDate(Carbon $date, int $periodInDays = 7): string
    {
        $limitPeriod = $date->copy()->addDays($periodInDays);

        if($limitPeriod->lessThan(Carbon::now())) {
            return $date->format('d/m/Y');
        }

        return $date->diffForHumans();
    }
}
