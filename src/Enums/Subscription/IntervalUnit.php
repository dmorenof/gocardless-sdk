<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Subscription;

enum IntervalUnit: string
{
    case Monthly = 'monthly';
    case Weekly = 'weekly';
    case Yearly = 'yearly';
}
