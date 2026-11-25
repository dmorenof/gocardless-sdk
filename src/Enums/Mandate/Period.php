<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Mandate;

enum Period: string
{
    case Day = 'day';
    case Flexible = 'flexible';
    case Month = 'month';
    case Week = 'week';
    case Year = 'year';
}
