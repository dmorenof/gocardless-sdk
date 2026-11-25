<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Payout;

enum PayoutType: string
{
    case Merchant = 'merchant';
    case Partner = 'partner';
}
