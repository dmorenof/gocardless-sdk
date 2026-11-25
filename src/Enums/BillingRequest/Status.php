<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\BillingRequest;

enum Status: string
{
    case Cancelled = 'cancelled';
    case Fulfilled = 'fulfilled';
    case Fulfilling = 'fulfilling';
    case Pending = 'pending';
    case ReadyToFulfil = 'ready_to_fulfil';
}
