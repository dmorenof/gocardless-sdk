<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Refund;

enum RefundType: string
{
    case Mandate = 'mandate';
    case Payment = 'payment';
}
