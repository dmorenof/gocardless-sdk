<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\BillingRequest\MandateRequestConstraints\PeriodicLimitsItem;

enum PeriodEnum: string
{
    case Day = 'day';
    case Flexible = 'flexible';
    case Month = 'month';
    case Week = 'week';
    case Year = 'year';
}
