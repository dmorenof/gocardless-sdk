<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\BillingRequest;

enum MandateRequestVerify: string
{
    case Always = 'always';
    case Minimum = 'minimum';
    case Recommended = 'recommended';
    case WhenAvailable = 'when_available';
}
