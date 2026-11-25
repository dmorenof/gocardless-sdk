<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\OutboundPayment;

enum Scheme: string
{
    case Bacs = 'bacs';
    case FasterPayments = 'faster_payments';
}
