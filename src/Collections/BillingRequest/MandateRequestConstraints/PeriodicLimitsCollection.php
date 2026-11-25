<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\BillingRequest\MandateRequestConstraints;

final class PeriodicLimitsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\BillingRequest\MandateRequestConstraints\PeriodicLimitsDTO::class;
}
