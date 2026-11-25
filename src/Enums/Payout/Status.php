<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Payout;

enum Status: string
{
    case Bounced = 'bounced';
    case Paid = 'paid';
    case Pending = 'pending';
}
